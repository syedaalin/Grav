/**
 * NUR-UL-HUDA FRONTEND LOGIC
 * -------------------------
 * Blueprint: [frontend-logic.blueprint.md](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/blueprints/docs/frontend-logic.blueprint.md)
 */
import MobileMenu from './mobile-menu.js';

export default class UIController {
  constructor() {
    this.isTouch = window.DocumentTouch && document instanceof DocumentTouch;
    this.mobileMenu = new MobileMenu();
    this.init();
  }

  init() {
    this.initStickyHeader();
    this.initSearch();
    this.initMobileAccordion();
  }

  initStickyHeader() {
    const header = document.getElementById('header');
    const topBanner = document.querySelector('.header-top-sticky');
    let lastScrollTop = 0;
    const scrollThreshold = 10; // Smaller threshold for immediate feedback

    if (!header) return;

    // Dynamic Offset Calculation function
    const updateHeaderOffset = () => {
        const topBannerHeight = topBanner ? topBanner.offsetHeight : 0;
        const mainHeaderHeight = header ? header.offsetHeight : 0;
        const totalHeight = topBannerHeight + mainHeaderHeight;

        document.documentElement.style.setProperty('--header-top-offset', `${topBannerHeight}px`);
        document.documentElement.style.setProperty('--header-total-height', `${totalHeight}px`);
    };

    // Initial Calculation and Resize Listener
    updateHeaderOffset();
    window.addEventListener('resize', updateHeaderOffset, { passive: true });

    const scrollHeader = () => {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      const bannerHeight = topBanner ? topBanner.offsetHeight : 0;
      
      if (scrollTop > bannerHeight + scrollThreshold) {
        header.classList.add('is-scrolled');
      } else {
        header.classList.remove('is-scrolled');
      }
      
      lastScrollTop = scrollTop;
    };

    window.addEventListener('scroll', scrollHeader, { passive: true });
    
    // Initial check
    scrollHeader();
    
    // Re-verify offset after a short delay and on image load for dynamic content
    setTimeout(updateHeaderOffset, 500);
    window.addEventListener('load', updateHeaderOffset);
  }

  initSearch() {
    const searchTrigger = document.getElementById('search-trigger');
    const searchOverlay = document.getElementById('search-overlay');
    const searchClose = document.getElementById('search-close');
    const searchContainer = document.getElementById('search-container');
    const searchInput = document.getElementById('tntsearch-field');

    const toggleSearch = () => {
      if (!searchOverlay) return;

      const isVisible = searchOverlay.classList.contains('is-visible');

      if (!isVisible) {
        // Open
        searchOverlay.classList.add('is-visible');
        document.body.style.overflow = 'hidden';
        setTimeout(() => searchInput?.focus(), 100);
      } else {
        // Close
        searchOverlay.classList.remove('is-visible');
        document.body.style.overflow = '';
      }
    };

    if (searchTrigger) {
      searchTrigger.addEventListener('click', (e) => {
        e.preventDefault();
        toggleSearch();
      });
    }

    if (searchClose) {
      searchClose.addEventListener('click', (e) => {
        e.preventDefault();
        toggleSearch();
      });
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && searchOverlay?.classList.contains('is-visible')) {
        toggleSearch();
      }
    });

    if (searchOverlay) {
      searchOverlay.addEventListener('click', (e) => {
        if (e.target === searchOverlay) {
          toggleSearch();
        }
      });
    }
  }

  initMobileAccordion() {
    const submenuToggles = document.querySelectorAll('.mobile-submenu-toggle');

    submenuToggles.forEach(toggle => {
      toggle.addEventListener('click', (e) => {
        e.preventDefault();

        const parentLi = toggle.closest('li');
        const submenu = parentLi.querySelector('.mobile-submenu');
        const icon = toggle.querySelector('i');

        if (submenu) {
          submenu.classList.toggle('hidden');

          if (icon) {
            icon.classList.toggle('rotate-180');
          }

          const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
          toggle.setAttribute('aria-expanded', !isExpanded);
        }
      });
    });
  }
}

new UIController();
