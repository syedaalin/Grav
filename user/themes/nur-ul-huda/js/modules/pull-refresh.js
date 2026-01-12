/**
 * Nur-ul-Huda Theme - Pull-to-Refresh for Prayer Times
 * Enables pull-to-refresh gesture on mobile devices
 */

(function($) {
    'use strict';

    // Only enable on touch devices
    if (!('ontouchstart' in window)) {
        return;
    }

    let startY = 0;
    let currentY = 0;
    let pulling = false;
    const threshold = 80; // pixels to pull before refresh
    const $topBanner = $('#top-banner-utility-bar');
    const $body = $('body');

    // Create pull indicator
    const $pullIndicator = $('<div id="pull-indicator" class="fixed top-0 left-0 right-0 z-200 bg-primary text-white text-center py-2 text-sm font-bold transform -translate-y-full transition-transform duration-300">' +
        '<i class="fa fa-sync-alt mr-2"></i>' +
        '<span>Pull to refresh prayer times</span>' +
        '</div>');
    
    $body.prepend($pullIndicator);

    // Touch start
    $(document).on('touchstart', function(e) {
        // Only trigger if at top of page
        if (window.scrollY === 0) {
            startY = e.touches[0].pageY;
            pulling = true;
        }
    });

    // Touch move
    $(document).on('touchmove', function(e) {
        if (!pulling) return;

        currentY = e.touches[0].pageY;
        const pullDistance = currentY - startY;

        if (pullDistance > 0 && pullDistance < threshold * 2) {
            // Show indicator
            const progress = Math.min(pullDistance / threshold, 1);
            $pullIndicator.css('transform', `translateY(${pullDistance - 100}%)`);
            
            if (pullDistance >= threshold) {
                $pullIndicator.addClass('bg-accent text-dark');
                $pullIndicator.find('span').text('Release to refresh');
            } else {
                $pullIndicator.removeClass('bg-accent text-dark');
                $pullIndicator.find('span').text('Pull to refresh prayer times');
            }
        }
    });

    // Touch end
    $(document).on('touchend', function(e) {
        if (!pulling) return;

        const pullDistance = currentY - startY;

        if (pullDistance >= threshold) {
            // Trigger refresh
            $pullIndicator.find('i').addClass('fa-spin');
            $pullIndicator.find('span').text('Refreshing...');
            
            // Reload page to refresh prayer times
            setTimeout(function() {
                window.location.reload();
            }, 500);
        } else {
            // Reset
            $pullIndicator.css('transform', 'translateY(-100%)');
        }

        pulling = false;
        startY = 0;
        currentY = 0;
    });

})(jQuery);
