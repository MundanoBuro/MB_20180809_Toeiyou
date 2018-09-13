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
      }
    },
    isLoading: true
  },
  computed: {
    swiperA() {
      return this.$refs.awesomeSwiperA.swiper;
    },
    swiperB() {
      return this.$refs.awesomeSwiperB.swiper;
    }
  },
  mounted() {
    if (!window.localStorage.getItem("load")) {
      this.waitOnLoad(500);
    } else {
      this.waitOnLoad(0);
    }
  },
  methods: {
    onSetTranslate() {
      console.log("onSetTranslate");
    },
    waitOnLoad(time) {
      var that = this;
      var url = location.href;
      that.UI.LOADER.class = "default";
      setTimeout(function() {
        that.UI.LOADER.class = "fadeOut";
        setTimeout(function() {
          that.UI.LOADER.state = false;
          setTimeout(function() {
            window.localStorage.setItem("load", "ok");
          }, time);
        }, time);
      }, time);
    },
    menuOnHover: function(parent, page) {
      this.UI.MENU[page].uClass = "hover";
    },
    menuOnLeave: function(parent, page) {
      if (parent == "item") {
        var that = this;
        window["uiMenuTimer"] = setTimeout(function() {
          that.UI.MENU[page].uClass = "default";
        }, 500);
      } else {
        this.UI.MENU[page].uClass = "default";
        clearTimeout(window["uiMenuTimer"]);
      }
    }
  }
});
