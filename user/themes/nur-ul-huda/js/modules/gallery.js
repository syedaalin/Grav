/**
 * Nur-ul-Huda Theme - Gallery Swipe Gestures
 * Enables swipe navigation for gallery lightbox
 */

(function($) {
    'use strict';

    // Only enable on touch devices
    if (!('ontouchstart' in window)) {
        return;
    }

    let touchStartX = 0;
    let touchEndX = 0;
    const swipeThreshold = 50; // minimum distance for swipe

    // Wait for lightbox to be initialized
    $(document).on('touchstart', '.glightbox-container', function(e) {
        touchStartX = e.changedTouches[0].screenX;
    });

    $(document).on('touchend', '.glightbox-container', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });

    function handleSwipe() {
        const swipeDistance = touchEndX - touchStartX;

        if (Math.abs(swipeDistance) < swipeThreshold) {
            return; // Not a swipe, just a tap
        }

        if (swipeDistance > 0) {
            // Swipe right - go to previous
            const $prevBtn = $('.glightbox-button-prev, .gprev');
            if ($prevBtn.length && $prevBtn.is(':visible')) {
                $prevBtn.click();
            }
        } else {
            // Swipe left - go to next
            const $nextBtn = $('.glightbox-button-next, .gnext');
            if ($nextBtn.length && $nextBtn.is(':visible')) {
                $nextBtn.click();
            }
        }
    }

    // Add visual feedback for swipe
    let swipeIndicatorTimeout;
    $(document).on('touchmove', '.glightbox-container', function(e) {
        const currentX = e.changedTouches[0].screenX;
        const diff = currentX - touchStartX;

        if (Math.abs(diff) > 10) {
            // Show swipe indicator
            clearTimeout(swipeIndicatorTimeout);
            
            const direction = diff > 0 ? 'right' : 'left';
            const $indicator = $('.swipe-indicator');
            
            if ($indicator.length === 0) {
                const icon = direction === 'right' ? 'fa-chevron-left' : 'fa-chevron-right';
                $('body').append(
                    `<div class="swipe-indicator fixed top-1/2 ${direction === 'right' ? 'left-4' : 'right-4'} -translate-y-1/2 bg-white/20 backdrop-blur-md text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl z-9999 transition-opacity duration-300">
                        <i class="fa ${icon}"></i>
                    </div>`
                );
            }

            swipeIndicatorTimeout = setTimeout(function() {
                $('.swipe-indicator').fadeOut(200, function() {
                    $(this).remove();
                });
            }, 300);
        }
    });

})(jQuery);
