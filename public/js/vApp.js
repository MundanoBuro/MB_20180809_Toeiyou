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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);
__webpack_require__(3);
__webpack_require__(4);
__webpack_require__(5);
__webpack_require__(6);
module.exports = __webpack_require__(7);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

Vue.use(VueAwesomeSwiper);

var app = new Vue({
  el: "#app",
  components: {
    LocalSwiper: VueAwesomeSwiper.swiper,
    LocalSlide: VueAwesomeSwiper.swiperSlide
  },
  delimiters: ["[[", "]]"],
  data: {
    message: "Hello Vue!",
    swiperOptionA: {
      pagination: {
        el: ".swiper-pagination"
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    },
    swiperOptionB: {
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true
      }
    },
    UI: {
      LOADER: {
        state: true,
        class: "default"
      },
      MENU: {
        ABOUT: {
          state: "",
          uClass: "default"
        },
        BUSINESS: {
          state: "",
          uClass: "default"
        },
        INDUSTRY: {
          state: "",
          uClass: "default"
        },
        CLIENTS: {
          state: "",
          uClass: "default"
        },
        PORTAL: {
          state: "",
          uClass: "default"
        },
        CONTACT: {
          state: "",
          uClass: "default"
        }
      },
      CARDS: [{
        id: "missionAndVision",
        class: "hide"
      }, {
        id: "history",
        class: "hide"
      }, {
        id: "ourpeople",
        class: "hide"
      }, {
        id: "deliz",
        class: "hide"
      }, {
        id: "ready",
        class: "hide"
      }, {
        id: "startups",
        class: "hide"
      }]
    },
    isLoading: true
  },
  computed: {
    swiperA: function swiperA() {
      return this.$refs.awesomeSwiperA.swiper;
    },
    swiperB: function swiperB() {
      return this.$refs.awesomeSwiperB.swiper;
    }
  },
  mounted: function mounted() {
    var _this = this;

    if (!window.localStorage.getItem("load")) {
      this.waitOnLoad(500);
    } else {
      this.waitOnLoad(0);
    }

    var toSectionHash = window.location.hash.split("#");
    var toSection = toSectionHash[1];

    window.setTimeout(function (x) {
      var target = "missionAndVision";
      _this.toogleCard(target);
      $('html, body').animate({
        scrollTop: $("#" + target).offset().top
      }, 1000);
    }, 1000);

    window.setTimeout(function (x) {
      var target = "history";
      _this.toogleCard(target);
      $('html, body').animate({
        scrollTop: $("#" + target).offset().top
      }, 1000);
    }, 2000);

    window.setTimeout(function (x) {
      var target = "ourpeople";
      _this.toogleCard(target);
      $('html, body').animate({
        scrollTop: $("#" + target).offset().top
      }, 1000);
    }, 2000);
  },

  methods: {
    onSetTranslate: function onSetTranslate() {
      console.log("onSetTranslate");
    },
    waitOnLoad: function waitOnLoad(time) {
      var that = this;
      var url = location.href;
      that.UI.LOADER.class = "default";
      setTimeout(function () {
        that.UI.LOADER.class = "fadeOut";
        setTimeout(function () {
          that.UI.LOADER.state = false;
          setTimeout(function () {
            window.localStorage.setItem("load", "ok");
          }, time);
        }, time);
      }, time);
    },

    menuOnHover: function menuOnHover(parent, page) {
      this.UI.MENU[page].uClass = "hover";
    },
    menuOnLeave: function menuOnLeave(parent, page) {
      if (parent == "item") {
        var that = this;
        window["uiMenuTimer"] = setTimeout(function () {
          that.UI.MENU[page].uClass = "default";
        }, 500);
      } else {
        this.UI.MENU[page].uClass = "default";
        clearTimeout(window["uiMenuTimer"]);
      }
    },
    toogleCard: function toogleCard(cardId) {

      var kCard = this.UI.CARDS.findIndex(function (card) {
        return card.id == cardId;
      });

      if (this.UI.CARDS[kCard].class == 'hide') {
        this.UI.CARDS[kCard].class = 'default';
      } else {
        this.UI.CARDS[kCard].class = 'hide';
      }
      console.log(" Vue Toogle Class for Card  : " + cardId + " on => " + this.UI.CARDS[kCard] + " kCard : " + kCard);
    }
  }
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 4 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 5 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 6 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 7 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);