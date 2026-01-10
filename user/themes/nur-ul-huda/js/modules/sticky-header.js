// Sticky Header Module
// Handles the fluid smart show/hide behavior of the header on scroll.
// Matches scroll speed and direction instantly.

document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header');
    if (!header) return;

    let lastScrollY = window.scrollY;
    let currentTranslate = 0;
    let ticking = false;

    // Remove CSS transition for instant response to scroll speed
    header.style.transition = 'background-color 0.3s ease, backdrop-filter 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease'; 
    // Note: 'transform' is intentionally OMITTED from transition to prevent lag

    const topBanner = document.getElementById('top-banner-utility-bar');

    function updateHeader() {
        const scrollY = window.scrollY;
        const diff = scrollY - lastScrollY;
        const headerHeight = header.offsetHeight;
        const topBannerHeight = topBanner ? topBanner.offsetHeight : 0;

        // 1. Scrolled State (Styling)
        if (scrollY > 10) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        // 2. Sticky Offset
        // Stick below the Top Banner
        header.style.top = `${topBannerHeight}px`;

        // 3. Fluid Smart Logic
        // Down (diff > 0): Header moves UP (Subtract from translate)
        // Up (diff < 0): Header moves DOWN (Add to translate)
        
        // If at very top, force visible
        if (scrollY <= topBannerHeight) {
            currentTranslate = 0;
        } else {
            currentTranslate -= diff;
            
            // Clamp:
            // Min: -(headerHeight + topBannerHeight) (Fully hidden)
            // Max: 0 (Fully visible at sticky position)
            const minTranslate = -(headerHeight + topBannerHeight);
            
            if (currentTranslate > 0) currentTranslate = 0;
            if (currentTranslate < minTranslate) currentTranslate = minTranslate;
        }

        // Apply Transform
        header.style.transform = `translateY(${currentTranslate}px)`;

        lastScrollY = scrollY;
        ticking = false;
    }

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(updateHeader);
            ticking = true;
        }
    }, { passive: true });
});
