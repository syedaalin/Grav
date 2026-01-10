(function($) {
    $(document).ready(function() {
        // Initialize Single Page Nav for internal navigation
        if ($('ul.navigation').length && $.fn.singlePageNav) {
            $('ul.navigation').singlePageNav({
                offset: $('#header').outerHeight() || 0,
                filter: ':not(.external)',
                updateHash: true,
                currentClass: 'text-blue-600 font-bold' // Matching Tailwind classes from template
            });
        }
    });
})(jQuery);
