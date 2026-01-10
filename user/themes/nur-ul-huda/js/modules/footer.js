// Enhanced Footer JavaScript - Performance Optimized
(function() {
    'use strict';
    
    // Cache DOM elements
    const footer = document.getElementById('footer');
    if (!footer) return;
    
    const backToTop = footer.querySelector('[data-back-to-top]');
    const accordionToggles = footer.querySelectorAll('[data-footer-toggle]');
    
    // Accordion Functionality with Event Delegation (Mobile Only)
    if (accordionToggles.length > 0) {
        const isMobile = () => window.innerWidth < 768;
        
        // Single event listener for all toggles (event delegation pattern)
        footer.addEventListener('click', function(e) {
            const toggle = e.target.closest('[data-footer-toggle]');
            if (!toggle || !isMobile()) return;
            
            const content = toggle.nextElementSibling;
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
            
            // Toggle accordion
            toggle.setAttribute('aria-expanded', !isExpanded);
            content.setAttribute('aria-hidden', isExpanded);
            content.classList.toggle('active');
        });
        
        // Reset accordions on resize (debounced)
        let resizeTimeout;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(function() {
                if (!isMobile()) {
                    accordionToggles.forEach(toggle => {
                        toggle.setAttribute('aria-expanded', 'false');
                        const content = toggle.nextElementSibling;
                        content.setAttribute('aria-hidden', 'false');
                        content.classList.remove('active');
                    });
                }
            }, 150);
        }, { passive: true });
    }
    
    // Back to Top Button with IntersectionObserver (More Efficient)
    if (backToTop) {
        // Fallback to scroll listener if IntersectionObserver not supported
        if ('IntersectionObserver' in window) {
            // Create a sentinel element at 300px from top
            const sentinel = document.createElement('div');
            sentinel.style.cssText = 'position:absolute;top:300px;height:1px;width:1px;pointer-events:none;';
            document.body.prepend(sentinel);
            
            const observer = new IntersectionObserver(
                ([entry]) => {
                    backToTop.classList.toggle('visible', !entry.isIntersecting);
                },
                { threshold: 0 }
            );
            
            observer.observe(sentinel);
        } else {
            // Fallback: scroll listener with debouncing
            let scrollTimeout;
            window.addEventListener('scroll', function() {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(function() {
                    backToTop.classList.toggle('visible', window.scrollY > 300);
                }, 100);
            }, { passive: true });
        }
    }
})();
