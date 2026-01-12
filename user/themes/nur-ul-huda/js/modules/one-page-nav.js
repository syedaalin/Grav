(function ($) {
  $(document).ready(function () {
    // Initialize Single Page Nav for internal navigation
    if ($("ul.navigation").length && $.fn.singlePageNav) {
      $("ul.navigation").singlePageNav({
        offset: $("#header").outerHeight() || 0,
        filter: ":not(.external)",
        updateHash: true,
        currentClass: "text-primary font-bold", // Applied via Modern Vanilla CSS utilities
      });
    }
  });
})(jQuery);
