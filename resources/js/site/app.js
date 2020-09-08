const menuButton = document.getElementById("menu--button");

if (menuButton) {
    menuButton.onclick = function () {
        if (this.checked) {
            document.getElementById("menu").classList.add("active");
        } else {
            document.getElementById("menu").classList.remove("active");
        }
    };
}

window.$ = window.jQuery = require("jquery");

require("owl.carousel");

$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        autoplay: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 4,
            },
        },
    });
});
