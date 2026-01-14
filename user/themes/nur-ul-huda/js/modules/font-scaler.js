/**
 * Font Scaler Module - ES2025+
 * Handles resizing root font size for accessibility.
 */

export class FontScaler {
  #fontSize = 0;

  constructor() {
    this.init();
  }

  init() {
    this.#fontSize = parseInt(localStorage.getItem('font-size-offset')) || 0;
    
    const increaseBtn = document.querySelector('button[title="Larger Text"]');
    const decreaseBtn = document.querySelector('button[title="Smaller Text"]');

    if (increaseBtn) {
      increaseBtn.addEventListener('click', () => {
        if (this.#fontSize < 30) {
          this.#fontSize += 5;
          this.#applyFontSize();
        }
      });
    }

    if (decreaseBtn) {
      decreaseBtn.addEventListener('click', () => {
        if (this.#fontSize > -10) {
          this.#fontSize -= 5;
          this.#applyFontSize();
        }
      });
    }
    
    // Initial apply
    if (this.#fontSize !== 0) this.#applyFontSize();

    // Sync across tabs
    window.addEventListener('storage', (e) => {
      if (e.key === 'font-size-offset') {
        this.#fontSize = parseInt(e.newValue) || 0;
        this.#applyFontSize(false); // Don't save back to storage
      }
    });
  }

  #applyFontSize(save = true) {
    document.documentElement.style.fontSize = (100 + this.#fontSize) + '%';
    if (save) {
      localStorage.setItem('font-size-offset', this.#fontSize);
    }
  }
}

// Auto-initialize
new FontScaler();
export default FontScaler;

