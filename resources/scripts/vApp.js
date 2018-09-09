VueScrollTo.setDefaults({
  container: "body",
  duration: 500,
  easing: "ease",
  offset: 0,
  cancelable: true,
  onStart: false,
  onDone: false,
  onCancel: false,
  x: false,
  y: true
});

var app = new Vue({
  el: "#app",
  delimiters: ["[[", "]]"],
  data: {
    message: "Hello Vue!",
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
  mounted() {
    this.waitOnLoad();
  },
  methods: {
    waitOnLoad() {
      var that = this;
      var url = location.href;
      that.UI.LOADER.class = "default";
      setTimeout(function() {
        that.UI.LOADER.class = "fadeOut";
        setTimeout(function() {
          that.UI.LOADER.state = false;
          setTimeout(function() {
            if (url.includes("/about")) {
            }
          }, 1000);
        }, 500);
      }, 1500);
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
