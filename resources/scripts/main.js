// --------------------------------- //
import { preloading } from "./_preload.js";
import { openCard } from "./_ui.js";
var myswiper;

// --------------------------------- //
// -- OnLoad ----------------------- //
// --------------------------------- //
$(document).ready(function() {
  preloading();
  var myswiper = new Swiper(".swiper-container", {
    parallax: true,
    autoplay: 0,
    direction: "horizontal",
    loop: "true",
    speed: 1000,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    pagination: {
      el: ".swiper-pagination"
    },
    on: {
      init: function() {
        console.log("swiper initialized");

        setTimeout(function() {
          myswiper.update(true);
        }, 250);

        setInterval(function() {
          myswiper.slideNext();
        }, 10000);
      }
    }
  });

  var href = location.href;
  var href_index = href.indexOf("#") + 1;
  var anchor = href.substring(href_index);
  var targets = href.split("#");
  var target_page_raw = targets[0].split("/");
  var target_page = target_page_raw[3];
  var target_section = targets[1];

  setTimeout(function() {
    openCard("#" + target_page + "-" + target_section);
  }, 1500);
});
