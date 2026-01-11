
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
        const header = document.getElementById('header');
        
        if (!isOpen) {
            // Calculate Top Offset based on Header's visual position
            if (header) {
                const headerRect = header.getBoundingClientRect();
                // We use 'bottom' so it starts exactly where the header ends
                // This accounts for any sticky translation or top banner
                mobileOverlay.style.top = Math.max(0, headerRect.bottom) + 'px';
            }

            // Determine Direction based on button position
            let startClass = '-translate-x-full';
            let removeClass = 'translate-x-full';
            let sideClass = 'left-0';
            let removeSideClass = 'right-0';

            if (mobileToggle) {
                const rect = mobileToggle.getBoundingClientRect();
                // If button is on the Right half, start from Right
                if (rect.left > (window.innerWidth / 2)) {
                    startClass = 'translate-x-full';
                    removeClass = '-translate-x-full';
                    sideClass = 'right-0';
                    removeSideClass = 'left-0';
                }
            }

            // Temporarily disable transition to prevent "swiping" across screen
            mobileOverlay.style.transition = 'none';
            
            // Apply Side Positioning
            mobileOverlay.classList.remove(removeSideClass);
            mobileOverlay.classList.add(sideClass);

            // Apply Start Position (Translate)
            mobileOverlay.classList.remove(removeClass);
            mobileOverlay.classList.add(startClass);

            // Force reflow to apply the position instantly
            void mobileOverlay.offsetWidth;

            // Restore transition (Clear inline style to revert to CSS)
            mobileOverlay.style.transition = '';

            // Open menu
            mobileOverlay.dataset.open = 'true';
            mobileOverlay.classList.add('open'); // Required for CSS state
            mobileOverlay.classList.remove('invisible'); // Ensure visibility
            mobileOverlay.classList.remove('pointer-events-none');
            mobileOverlay.setAttribute('aria-hidden', 'false');
            bodyEl.style.overflow = 'hidden';
            if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'true');
        } else {
            // Close menu
            mobileOverlay.dataset.open = 'false';
            mobileOverlay.classList.remove('open');
            mobileOverlay.classList.add('invisible'); // Hide again
            mobileOverlay.classList.add('pointer-events-none');
            mobileOverlay.setAttribute('aria-hidden', 'true');
            bodyEl.style.overflow = '';
            
            if (mobileToggle) {
                mobileToggle.setAttribute('aria-expanded', 'false');
                mobileToggle.focus(); // Return focus to trigger
            }
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
