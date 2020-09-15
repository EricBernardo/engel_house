window.$ = window.jQuery = require("jquery");

require("owl.carousel");
require("./map");
require("./keywords");
require("./product_details");

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

$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        autoplay: true,
        nav: true,
        items: window.outerWidth > 768 ? 4 : 1,
    });
});
