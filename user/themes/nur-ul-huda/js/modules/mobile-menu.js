
// Mobile Menu Module
// Handles the off-canvas mobile menu toggle and overlay interactions.

document.addEventListener('DOMContentLoaded', function() {
    const mobileToggle = document.getElementById('mobile-toggle');
    const mobileClose = document.getElementById('mobile-close');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const bodyEl = document.body;

    function toggleMenu() {
        if (!mobileOverlay) return;
        
        // Use data attribute for explicit state tracking
        const isOpen = mobileOverlay.dataset.open === 'true';
        
        if (!isOpen) {
            // Open menu
            mobileOverlay.dataset.open = 'true';
            mobileOverlay.classList.remove('-translate-x-full');
            mobileOverlay.classList.remove('pointer-events-none');
            mobileOverlay.setAttribute('aria-hidden', 'false');
            bodyEl.style.overflow = 'hidden';
            if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'true');
        } else {
            // Close menu
            mobileOverlay.dataset.open = 'false';
            mobileOverlay.classList.add('-translate-x-full');
            mobileOverlay.classList.add('pointer-events-none');
            mobileOverlay.setAttribute('aria-hidden', 'true');
            bodyEl.style.overflow = '';
            if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'false');
        }
    }

    if (mobileToggle) {
        mobileToggle.addEventListener('click', function(e) {
            e.stopPropagation(); // Stop bubbling
            toggleMenu();
        });
    }

    if (mobileClose) {
        mobileClose.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleMenu();
        });
    }

    // Prevent clicks on the overlay background from closing it unintentionally
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }
});
