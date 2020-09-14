$(document).ready(function () {
    $(".product_details__carousel").owlCarousel({
        autoplay: true,
        nav: false,
        responsive: {
            0: {
                items: 4,
            },
            768: {
                items: 5,
            },
        },
    });
});
