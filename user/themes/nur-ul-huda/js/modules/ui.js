/**
 * NUR-UL-HUDA FRONTEND LOGIC
 * -------------------------
 * Blueprint: [frontend-logic.blueprint.md](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/blueprints/docs/frontend-logic.blueprint.md)
 */
import MobileMenu from './mobile-menu.js';
import { Logger } from './utils.js';

/**
 * UI Controller
 * Manages global UI interactions for the Grav Theme.
 */
export default class UIController {
  /**
   * Centralized DOM Selectors
   * @type {Object}
   */
  static #selectors = {
    header: '#header',
    topBanner: '.header-top-sticky',
    search: {
      trigger: '#search-trigger',
      overlay: '#search-overlay',
      close: '#search-close',
      container: '#search-container',
      input: '#tntsearch-field'
    },
    mobile: {
      submenuToggle: '.mobile-submenu-toggle',
      submenu: '.mobile-submenu',
      icon: 'i'
    }
  };

  /**
   * Initialize UI Controller
   */
  constructor() {
    this.isTouch = window.DocumentTouch && document instanceof DocumentTouch;
    this.mobileMenu = new MobileMenu();
    this.init();
    Logger.info('UIController: Initialized');
  }

  /**
   * Initialize all UI components
   */
  init() {
    this.initStickyHeader();
    this.initSearch();
    this.initMobileAccordion();
  }

  /**
   * Initialize Sticky Header with dynamic offset calculation
   */
  initStickyHeader() {
    const header = document.querySelector(UIController.#selectors.header);
    const topBanner = document.querySelector(UIController.#selectors.topBanner);
    let lastScrollTop = 0;
    const scrollThreshold = 10; // Smaller threshold for immediate feedback

    if (!header) {
      Logger.warn('UIController: Header element not found');
      return;
    }

    // Dynamic Offset Calculation function
    const updateHeaderOffset = () => {
      const topBannerHeight = topBanner ? topBanner.offsetHeight : 0;
      const mainHeaderHeight = header ? header.offsetHeight : 0;
      const totalHeight = topBannerHeight + mainHeaderHeight;

      document.documentElement.style.setProperty('--header-top-offset', `${topBannerHeight}px`);
      document.documentElement.style.setProperty('--header-total-height', `${totalHeight}px`);
      Logger.info(`UIController: Header offset updated to ${topBannerHeight}px`);
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

  /**
   * Initialize Search Overlay interactions
   */
  initSearch() {
    const s = UIController.#selectors.search;
    const searchTrigger = document.querySelector(s.trigger);
    const searchOverlay = document.querySelector(s.overlay);
    const searchClose = document.querySelector(s.close);
    const searchInput = document.querySelector(s.input);

    const toggleSearch = () => {
      if (!searchOverlay) return;

      const isVisible = searchOverlay.classList.contains('is-visible');

      if (!isVisible) {
        // Open
        searchOverlay.classList.add('is-visible');
        document.body.style.overflow = 'hidden';
        setTimeout(() => searchInput?.focus(), 100);
        Logger.info('UIController: Search opened');
      } else {
        // Close
        searchOverlay.classList.remove('is-visible');
        document.body.style.overflow = '';
        Logger.info('UIController: Search closed');
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

  /**
   * Initialize Mobile Menu Accordion logic
   */
  initMobileAccordion() {
    const s = UIController.#selectors.mobile;
    const submenuToggles = document.querySelectorAll(s.submenuToggle);

    if (submenuToggles.length === 0) return;

    submenuToggles.forEach(toggle => {
      toggle.addEventListener('click', (e) => {
        e.preventDefault();

        const parentLi = toggle.closest('li');
        const submenu = parentLi.querySelector(s.submenu);
        const icon = toggle.querySelector(s.icon);

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
    Logger.info(`UIController: Mobile accordion initialized with ${submenuToggles.length} toggles`);
  }
}

new UIController();
