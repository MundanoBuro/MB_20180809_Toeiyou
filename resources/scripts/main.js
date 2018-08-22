// --------------------------------- //
import { preloading } from "./_preload.js";

var myswiper;

// --------------------------------- //
// -- OnLoad ----------------------- //
// --------------------------------- //
$(document).ready(function() {
  preloading();
  var myswiper = new Swiper(".swiper-container", {
    parallax: true,
    direction: "horizontal",
    loop: true,
    speed: 1000,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    on: {
      init: function() {
        console.log("swiper initialized");
        setTimeout(function() {
          myswiper.update(true);
        }, 250);
      }
    }
  });
});
