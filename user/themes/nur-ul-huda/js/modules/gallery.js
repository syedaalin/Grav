/**
 * Nur-ul-Huda Theme - Gallery Touch Helper - ES2025+
 * Blueprint: [frontend-logic.blueprint.md](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/blueprints/docs/frontend-logic.blueprint.md)
 */

export class GalleryHelper {
  #touchStartX = 0;
  #touchEndX = 0;
  #swipeThreshold = 50;
  #swipeIndicatorTimeout = null;

  constructor() {
    this.init();
  }

  init() {
    // Only enable on touch devices
    if (!('ontouchstart' in window)) return;

    this.#bindEvents();
  }

  #bindEvents() {
    // Event delegation for Glightbox container (which might be added to body)
    document.addEventListener('touchstart', (e) => {
      const container = e.target.closest('.glightbox-container');
      if (container) {
        this.#touchStartX = e.changedTouches[0].screenX;
      }
    }, { passive: true });

    document.addEventListener('touchend', (e) => {
      const container = e.target.closest('.glightbox-container');
      if (container) {
        this.#touchEndX = e.changedTouches[0].screenX;
        this.#handleSwipe();
      }
    }, { passive: true });

    document.addEventListener('touchmove', (e) => {
      const container = e.target.closest('.glightbox-container');
      if (!container) return;

      const currentX = e.changedTouches[0].screenX;
      const diff = currentX - this.#touchStartX;

      if (Math.abs(diff) > 10) {
        this.#showSwipeIndicator(diff > 0 ? 'right' : 'left');
      }
    }, { passive: true });
  }

  #handleSwipe() {
    const swipeDistance = this.#touchEndX - this.#touchStartX;

    if (Math.abs(swipeDistance) < this.#swipeThreshold) return;

    if (swipeDistance > 0) {
      // Swipe right - go to previous
      const prevBtn = document.querySelector('.glightbox-button-prev, .gprev');
      if (prevBtn && prevBtn.offsetParent !== null) prevBtn.click();
    } else {
      // Swipe left - go to next
      const nextBtn = document.querySelector('.glightbox-button-next, .gnext');
      if (nextBtn && nextBtn.offsetParent !== null) nextBtn.click();
    }
  }

  #showSwipeIndicator(direction) {
    clearTimeout(this.#swipeIndicatorTimeout);
    
    let indicator = document.querySelector('.swipe-indicator');
    if (!indicator) {
      indicator = document.createElement('div');
      indicator.className = `swipe-indicator fixed top-1/2 ${direction === 'right' ? 'left-4' : 'right-4'} -translate-y-1/2 bg-white/20 backdrop-blur-md text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl z-[9999] transition-opacity duration-300`;
      indicator.innerHTML = `<i class="la ${direction === 'right' ? 'la-angle-left' : 'la-angle-right'}"></i>`;
      document.body.appendChild(indicator);
    }

    this.#swipeIndicatorTimeout = setTimeout(() => {
      if (indicator) {
        indicator.style.opacity = '0';
        setTimeout(() => indicator.remove(), 300);
      }
    }, 300);
  }
}

// Auto-initialize
new GalleryHelper();
export default GalleryHelper;

