/**
 * Nur-ul-Huda Theme - Pull-to-Refresh for Prayer Times
 * Enables pull-to-refresh gesture on mobile devices - ES2025+
 * Blueprint: [frontend-logic.blueprint.md](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/blueprints/docs/frontend-logic.blueprint.md)
 */

export class PullToRefresh {
  #startY = 0;
  #currentY = 0;
  #pulling = false;
  #threshold = 80;
  #pullIndicator = null;

  constructor() {
    this.init();
  }

  init() {
    // Only enable on touch devices
    if (!('ontouchstart' in window)) return;

    this.#createIndicator();
    this.#bindEvents();
  }

  #createIndicator() {
    this.#pullIndicator = document.createElement('div');
    this.#pullIndicator.id = 'pull-indicator';
    this.#pullIndicator.className = 'fixed top-0 left-0 right-0 z-[200] bg-primary text-white text-center py-2 text-sm font-bold transform -translate-y-full transition-transform duration-300';
    this.#pullIndicator.innerHTML = '<i class="la la-sync mr-2"></i><span>Pull to refresh prayer times</span>';
    document.body.prepend(this.#pullIndicator);
  }

  #bindEvents() {
    document.addEventListener('touchstart', (e) => {
      if (window.scrollY === 0) {
        this.#startY = e.touches[0].pageY;
        this.#pulling = true;
      }
    }, { passive: true });

    document.addEventListener('touchmove', (e) => {
      if (!this.#pulling) return;

      this.#currentY = e.touches[0].pageY;
      const pullDistance = this.#currentY - this.#startY;

      if (pullDistance > 0 && pullDistance < this.#threshold * 2) {
        const progress = Math.min(pullDistance / this.#threshold, 1);
        this.#pullIndicator.style.transform = `translateY(${pullDistance - this.#pullIndicator.offsetHeight}px)`;
        
        const label = this.#pullIndicator.querySelector('span');
        if (pullDistance >= this.#threshold) {
          this.#pullIndicator.classList.add('bg-accent', 'text-dark');
          if (label) label.textContent = 'Release to refresh';
        } else {
          this.#pullIndicator.classList.remove('bg-accent', 'text-dark');
          if (label) label.textContent = 'Pull to refresh prayer times';
        }
      }
    }, { passive: true });

    document.addEventListener('touchend', () => {
      if (!this.#pulling) return;

      const pullDistance = this.#currentY - this.#startY;

      if (pullDistance >= this.#threshold) {
        const icon = this.#pullIndicator.querySelector('i');
        const label = this.#pullIndicator.querySelector('span');
        if (icon) icon.classList.add('la-spin');
        if (label) label.textContent = 'Refreshing...';
        
        setTimeout(() => {
          window.location.reload();
        }, 500);
      } else {
        this.#pullIndicator.style.transform = 'translateY(-100%)';
      }

      this.#pulling = false;
      this.#startY = 0;
      this.#currentY = 0;
    });
  }
}

// Auto-initialize if module is loaded
new PullToRefresh();
export default PullToRefresh;

