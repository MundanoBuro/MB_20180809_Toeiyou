export function openCard(id) {
  // Scroll to Card
  $("html,body").animate(
    {
      scrollTop: $(id).offset().top - 60
    },
    500,
    function() {
      $(id).addClass("open");
      setTimeout(function() {
        $(id + " .card .col")
          .fadeIn()
          .css("display", "inline-block");
      }, 2000);
    }
  );
}
