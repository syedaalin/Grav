/**
 * Enhanced Footer JavaScript - Performance Optimized
 * NUR-UL-HUDA FRONTEND LOGIC - ES2025+
 * Blueprint: [frontend-logic.blueprint.md](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/blueprints/docs/frontend-logic.blueprint.md)
 */

import { Logger } from './utils.js';

export class BottomBanner {
    #bottomBanner = null;
    #backToTop = null;
    #accordionToggles = [];

    constructor() {
        this.#bottomBanner = document.getElementById('bottom-banner');
        if (!this.#bottomBanner) {
            Logger.warn('BottomBanner: Element not found');
            return;
        }

        this.#backToTop = this.#bottomBanner.querySelector('[data-back-to-top]');
        this.#accordionToggles = this.#bottomBanner.querySelectorAll('[data-bottom-banner-toggle]');

        this.init();
    }

    init() {
        this.#initAccordions();
        this.#initBackToTop();
        Logger.info('BottomBanner: Initialized');
    }

    #initAccordions() {
        if (this.#accordionToggles.length === 0) return;

        const isMobile = () => window.innerWidth < 768;

        // Single event listener for all toggles (event delegation pattern)
        this.#bottomBanner.addEventListener('click', (e) => {
            const toggle = e.target.closest('[data-bottom-banner-toggle]');
            if (!toggle || !isMobile()) return;

            const content = toggle.nextElementSibling;
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';

            // Toggle accordion
            toggle.setAttribute('aria-expanded', !isExpanded);
            if (content) {
                content.setAttribute('aria-hidden', isExpanded);
                content.classList.toggle('active');
            }
        });

        // Reset accordions on resize (debounced)
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                if (!isMobile()) {
                    this.#accordionToggles.forEach(toggle => {
                        toggle.setAttribute('aria-expanded', 'false');
                        const content = toggle.nextElementSibling;
                        if (content) {
                            content.setAttribute('aria-hidden', 'false');
                            content.classList.remove('active');
                        }
                    });
                }
            }, 150);
        }, { passive: true });
    }

    #initBackToTop() {
        if (!this.#backToTop) return;

        const circle = this.#backToTop.querySelector('.progress-ring-circle');
        if (!circle) return;

        const radius = circle.r.baseVal.value;
        const circumference = radius * 2 * Math.PI;

        // Setup initial circle state
        circle.style.strokeDasharray = `${circumference} ${circumference}`;
        circle.style.strokeDashoffset = circumference;

        const updateProgress = () => {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;

            // Toggle visibility
            this.#backToTop.classList.toggle('visible', scrollTop > 300);

            // Calculate progress
            if (docHeight > 0) {
                const scrollPercent = scrollTop / docHeight;
                const offset = circumference - (scrollPercent * circumference);
                circle.style.strokeDashoffset = offset;
            }
        };

        // Throttled scroll listener
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    updateProgress();
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });

        // Initial check
        updateProgress();
    }
}

// Auto-initialize
new BottomBanner();
export default BottomBanner;

