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
      CARDS:[
        {
          id : "missionAndVision",
          class : "hide"
        },
        {
          id : "history",
          class : "hide"
        },
        {
          id : "ourpeople",
          class : "hide"
        },
        {
          id : "deliz",
          class : "hide"
        },
        {
          id : "ready",
          class : "hide"
        },
        {
          id : "startups",
          class : "hide"
        }
      ]
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
    
    var toSectionHash = window.location.hash.split("#");
    var toSection = toSectionHash[1];
    
    window.setTimeout( x => {
      var target = "missionAndVision";
      this.toogleCard(target);
      if(toSection == target){
        $('html, body').animate({
          scrollTop: $("#" + target).offset().top
      }, 1000);
      }

    },1000)

    window.setTimeout( x => {
      var target = "history";
      this.toogleCard(target);
      if(toSection == target){
      $('html, body').animate({
        scrollTop: $("#" + target).offset().top
    }, 1000);
  }
    },2000)

    window.setTimeout( x => {
      var target = "ourpeople";
      this.toogleCard(target);
      if(toSection == target){
          $('html, body').animate({
            scrollTop: $("#" + target).offset().top
        }, 1000);
      }
    },2000)


    window.setTimeout( x => {
      var target = "deliz";
      this.toogleCard(target);
      if(toSection == target){
          $('html, body').animate({
            scrollTop: $("#" + target).offset().top
        }, 1000);
      }
    },2000)

    
    window.setTimeout( x => {
      var target = "ready";
      this.toogleCard(target);
      if(toSection == target){
          $('html, body').animate({
            scrollTop: $("#" + target).offset().top
        }, 1000);
      }
    },2000)
    
    
    window.setTimeout( x => {
      var target = "startups";
      this.toogleCard(target);
      if(toSection == target){
          $('html, body').animate({
            scrollTop: $("#" + target).offset().top
        }, 1000);
      }
    },2000)

    
    window.setTimeout( x => {
      var target = "size";
      this.toogleCard(target);
      if(toSection == target){
          $('html, body').animate({
            scrollTop: $("#" + target).offset().top
        }, 1000);
      }
    },2000)


    
    window.setTimeout( x => {
      var target = "evolution";
      this.toogleCard(target);
      if(toSection == target){
          $('html, body').animate({
            scrollTop: $("#" + target).offset().top
        }, 1000);
      }
    },2000)

    
    window.setTimeout( x => {
      var target = "proyection";
      this.toogleCard(target);
      if(toSection == target){
          $('html, body').animate({
            scrollTop: $("#" + target).offset().top
        }, 1000);
      }
    },2000)

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
    },
    toogleCard(cardId){
      
      var kCard = this.UI.CARDS.findIndex( card => {
        return card.id == cardId;
      });

      if(this.UI.CARDS[kCard].class == 'hide'){
        this.UI.CARDS[kCard].class = 'default';
      }else{
        this.UI.CARDS[kCard].class = 'hide'
      }
      console.log(" Vue Toogle Class for Card  : " + cardId +" on => " + this.UI.CARDS[kCard] + " kCard : " + kCard)
    }
  }
});
