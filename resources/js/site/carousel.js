

(function () {
  var carousels = document.querySelectorAll(".js-product-carousel");

  [].forEach.call(carousels, function (carousel) {
      carouselize(carousel);
  });
})();

function carouselize(carousel) {
  var productList = carousel.querySelector(".js-product-list");
  var productListWidth = 0;
  var productListSteps = 0;
  var products = carousel.querySelectorAll(".product");
  var productAmount = 0;
  var productAmountVisible = 4;
  // var carouselPrev = carousel.querySelector(".js-carousel-prev");
  // var carouselNext = carousel.querySelector(".js-carousel-next");

  //Count all the products
  [].forEach.call(products, function (product) {
      productAmount++;
      productListWidth += 250;
      productList.style.width = productListWidth + "px";
  });

  // This is a bit hacky, let me know if you find a better way to do this!
  // Move the carousels product-list
  function moveProductList() {
      productList.style.transform =
          "translateX(-" + 205 * productListSteps + "px)";
  }

  let intervalNextSlide = null;
  let nextSlide = function () {
      if (productListSteps < productAmount - productAmountVisible) {
          productListSteps++;
          moveProductList();
      } else {
          clearInterval(intervalNextSlide);
          intervalPrevSlide = setInterval(prevSlide, 3000);
      }
  };

  let intervalPrevSlide = null;
  let prevSlide = function () {
      if (productListSteps > 0) {
          productListSteps--;
          moveProductList();
      } else {
          clearInterval(intervalPrevSlide);
          intervalNextSlide = setInterval(nextSlide, 3000);
      }
  };

  intervalNextSlide = setInterval(nextSlide, 3000);

  carousel.querySelector(".carousel__view").style.display = "block";

}
