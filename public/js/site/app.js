/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/site/app.js":
/*!**********************************!*\
  !*** ./resources/js/site/app.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./map */ "./resources/js/site/map.js");

__webpack_require__(/*! ./lead */ "./resources/js/site/lead.js");

__webpack_require__(/*! ./carousel */ "./resources/js/site/carousel.js");

/***/ }),

/***/ "./resources/js/site/carousel.js":
/*!***************************************!*\
  !*** ./resources/js/site/carousel.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

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
  var productAmountVisible = 4; // var carouselPrev = carousel.querySelector(".js-carousel-prev");
  // var carouselNext = carousel.querySelector(".js-carousel-next");
  //Count all the products

  [].forEach.call(products, function (product) {
    productAmount++;
    productListWidth += 250;
    productList.style.width = productListWidth + "px";
  }); // This is a bit hacky, let me know if you find a better way to do this!
  // Move the carousels product-list

  function moveProductList() {
    productList.style.transform = "translateX(-" + 205 * productListSteps + "px)";
  }

  var intervalNextSlide = null;

  var nextSlide = function nextSlide() {
    if (productListSteps < productAmount - productAmountVisible) {
      productListSteps++;
      moveProductList();
    } else {
      clearInterval(intervalNextSlide);
      intervalPrevSlide = setInterval(prevSlide, 3000);
    }
  };

  var intervalPrevSlide = null;

  var prevSlide = function prevSlide() {
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

/***/ }),

/***/ "./resources/js/site/lead.js":
/*!***********************************!*\
  !*** ./resources/js/site/lead.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var formContactButton = document.getElementById("form-contact-button");

if (formContactButton) {
  formContactButton.addEventListener("click", function () {
    var elMessageForm = document.getElementById("messages-form");
    elMessageForm.innerHTML = "";

    var __this = this;

    var __form = document.getElementById("form-contact");

    var __url = __form.getAttribute("action");

    var formData = new FormData(document.getElementById("form-contact"));

    __this.setAttribute("disabled", "disabled");

    var xhr = new XMLHttpRequest();
    xhr.open("POST", __url);
    xhr.setRequestHeader("Accept", "application/json");
    xhr.send(formData);

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        var __html = "";

        __this.removeAttribute("disabled");

        var response = JSON.parse(xhr.response);

        if (typeof response.errors != "undefined") {
          __html = '<div id="form-message" class="alert alert-danger" role="alert">';
          __html += '<p class="alert-heading">Atenção!</p>';
          Object.values(response.errors).map(function (errors) {
            Object.values(errors).map(function (error) {
              __html += "<p>" + error + "</p>";
            });
          });
          __html += "</div>";
        } else {
          __html = '<div id="form-message" class="alert alert-success" role="alert">';
          __html += '<p class="alert-heading">Formulário enviado com sucesso!</p>';
          __html += "</div>";

          __form.reset();
        }

        elMessageForm.innerHTML = __html;
      }
    };
  });
}

/***/ }),

/***/ "./resources/js/site/map.js":
/*!**********************************!*\
  !*** ./resources/js/site/map.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

function setIframeSrc() {
  var map = document.getElementById("map");

  if (map) {
    var ifrm = document.createElement("iframe");
    ifrm.setAttribute("src", map.attributes["data-src"].value);
    ifrm.setAttribute("title", "Veja nossa entrevista no Destaque Brasil");
    ifrm.setAttribute("frameborder", "0");
    ifrm.setAttribute("aria-hidden", "false");
    ifrm.setAttribute("tabindex", "0");
    ifrm.setAttribute("defer", "defer");
    map.appendChild(ifrm);
  }
}

setTimeout(setIframeSrc, 3000);

/***/ }),

/***/ "./resources/sass/admin.scss":
/*!***********************************!*\
  !*** ./resources/sass/admin.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/site/app.scss":
/*!**************************************!*\
  !*** ./resources/sass/site/app.scss ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***************************************************************************************************!*\
  !*** multi ./resources/js/site/app.js ./resources/sass/site/app.scss ./resources/sass/admin.scss ***!
  \***************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Projects\benquer\engel_house\resources\js\site\app.js */"./resources/js/site/app.js");
__webpack_require__(/*! C:\Projects\benquer\engel_house\resources\sass\site\app.scss */"./resources/sass/site/app.scss");
module.exports = __webpack_require__(/*! C:\Projects\benquer\engel_house\resources\sass\admin.scss */"./resources/sass/admin.scss");


/***/ })

/******/ });