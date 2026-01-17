/**
 * Nur-ul-Huda One Page Navigation - ES2025+ Module
 * Handles smooth scrolling and navigation highlighting for modular pages.
 * Pure Vanilla JS - No jQuery
 */
import { Logger } from './utils.js';

export default class OnePageNav {
  static #selectors = {
    header: '#header',
    navLinks: 'ul.navigation a[href^="#"]',
    sections: 'section[id], div[id]'
  };

  constructor() {
    this.header = document.querySelector(OnePageNav.#selectors.header);
    this.navLinks = document.querySelectorAll(OnePageNav.#selectors.navLinks);
    this.sections = document.querySelectorAll(OnePageNav.#selectors.sections);
    this.init();
  }

  init() {
    if (!this.navLinks.length) {
      Logger.info('OnePageNav: No navigation links found');
      return;
    }

    this.bindClickEvents();
    this.initScrollSpy();
    Logger.info('OnePageNav: Initialized');
  }

  bindClickEvents() {
    this.navLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        const targetId = link.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);

        if (targetSection) {
          e.preventDefault();

          const headerHeight = this.header ? this.header.offsetHeight : 0;
          const targetPosition = targetSection.getBoundingClientRect().top + window.scrollY - headerHeight;

          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });

          // Update URL hash without jumping
          history.pushState(null, null, `#${targetId}`);
        }
      });
    });
  }

  initScrollSpy() {
    if ('IntersectionObserver' in window) {
      const observerOptions = {
        root: null,
        rootMargin: '-20% 0px -60% 0px', // Activate when section is near top
        threshold: 0
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            this.setActiveLink(entry.target.id);
          }
        });
      }, observerOptions);

      this.sections.forEach(section => observer.observe(section));
    } else {
      // Fallback for older browsers (though ES2025 implies modern)
      window.addEventListener('scroll', () => {
        this.sections.forEach(section => {
          const rect = section.getBoundingClientRect();
          if (rect.top >= 0 && rect.top <= 300) {
            this.setActiveLink(section.id);
          }
        });
      }, { passive: true });
    }
  }

  setActiveLink(id) {
    this.navLinks.forEach(link => {
      const href = link.getAttribute('href');
      if (href === `#${id}`) {
        link.classList.add('text-primary', 'font-bold', 'active');
      } else {
        link.classList.remove('text-primary', 'font-bold', 'active');
      }
    });
  }
}

// Auto-initialize
new OnePageNav();
