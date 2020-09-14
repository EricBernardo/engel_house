(function () {
    var carousels = document.querySelectorAll(".js-keywords-carousel");

    [].forEach.call(carousels, function (carousel) {
        carouselize(carousel);
    });
})();

function carouselize(carousel) {
    var keywordList = carousel.querySelector(".js-keywords-list");
    var keywordListWidth = 0;
    var keywordListSteps = 0;
    var keywords = carousel.querySelectorAll(".keywords");
    var keywordAmount = 0;
    var keywordAmountVisible = 4;
    // var carouselPrev = carousel.querySelector(".js-carousel-prev");
    // var carouselNext = carousel.querySelector(".js-carousel-next");

    //Count all the keywords
    [].forEach.call(keywords, function (keyword) {
        keywordAmount++;
        keywordListWidth += 250;
        keywordList.style.width = keywordListWidth + "px";
    });

    // This is a bit hacky, let me know if you find a better way to do this!
    // Move the carousels keywords-list
    function movekeywordList() {
        keywordList.style.transform =
            "translateX(-" + 205 * keywordListSteps + "px)";
    }

    let intervalNextSlide = null;
    let nextSlide = function () {
        if (keywordListSteps < keywordAmount - keywordAmountVisible) {
            keywordListSteps++;
            movekeywordList();
        } else {
            clearInterval(intervalNextSlide);
            intervalPrevSlide = setInterval(prevSlide, 3000);
        }
    };

    let intervalPrevSlide = null;
    let prevSlide = function () {
        if (keywordListSteps > 0) {
            keywordListSteps--;
            movekeywordList();
        } else {
            clearInterval(intervalPrevSlide);
            intervalNextSlide = setInterval(nextSlide, 3000);
        }
    };

    intervalNextSlide = setInterval(nextSlide, 3000);

    carousel.querySelector(".keywords__view").style.display = "block";
}
