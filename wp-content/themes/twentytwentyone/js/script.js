(function ($, undefined) {
  $(function () {
    $("h2").css("color", "red");
  });
  $(window).scroll(function () {
    /* Скроллировать фоновые слои с разной скоростью */
    var winTop = $(window).scrollTop();
    $(".home .mars").css(
      "background-position",
      "center " + -(winTop * 0.5) + "px"
    );
  });
})(jQuery);
