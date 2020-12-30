const formContactButton = document
    .getElementById("form-contact-button")

if(formContactButton) {

    getCaptcha();

    formContactButton
    .addEventListener("click", function () {
        const elMessageForm = document.getElementById("messages-form");
        elMessageForm.innerHTML = "";
        const __this = this;
        const __form = document.getElementById("form-contact");
        const __url = __form.getAttribute("action");

        let formData = new FormData(document.getElementById("form-contact"));

        __this.setAttribute("disabled", "disabled");

        let xhr = new XMLHttpRequest();
        xhr.open("POST", __url);
        xhr.setRequestHeader("Accept", "application/json");
        xhr.send(formData);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                let __html = "";
                __this.removeAttribute("disabled");
                const response = JSON.parse(xhr.response);
                if (typeof response.errors != "undefined") {                    
                    __html =
                        '<div id="form-message" class="alert alert-danger" role="alert">';
                    __html += '<p class="alert-heading">Atenção!</p>';
                    Object.values(response.errors).map(function (errors) {
                        Object.values(errors).map(function (error) {
                            __html += "<p>" + error + "</p>";
                        });
                    });
                    __html += "</div>";
                } else {
                    __html =
                        '<div id="form-message" class="alert alert-success" role="alert">';
                    __html +=
                        '<p class="alert-heading">Formulário enviado com sucesso!</p>';
                    __html += "</div>";

                    __form.reset();
                }

                getCaptcha();
                elMessageForm.innerHTML = __html;
            }
        };
    });
}

function getCaptcha() {
    const __formContact = document.getElementById("form-contact");
    if (__formContact) {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", __formContact.getAttribute('data-url-key'));
        xhr.setRequestHeader("Accept", "application/json");
        xhr.send();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                const { key, img } = JSON.parse(xhr.response);
                __formContact.querySelector('.form__captcha').innerHTML = '<img src="' + img + '">';
                __formContact.querySelector('[name="key"]').value = key;
                __formContact.querySelector('[name="captcha"]').value = '';
            }
        };
    }
}