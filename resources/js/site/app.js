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
