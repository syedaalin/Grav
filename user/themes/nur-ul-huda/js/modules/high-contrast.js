/**
 * High Contrast Module - ES2025+
 * Handles toggling high contrast mode for accessibility.
 */

export class HighContrast {
  constructor() {
    this.init();
  }

  init() {
    const hcToggle = document.querySelector('button[title="High Contrast"]');
    
    if (hcToggle) {
      hcToggle.addEventListener('click', () => {
        document.body.classList.toggle('high-contrast');
        localStorage.setItem('high-contrast', document.body.classList.contains('high-contrast'));
      });

      // Load initial state
      if (localStorage.getItem('high-contrast') === 'true') {
        document.body.classList.add('high-contrast');
      }
    }

    // Sync across tabs
    window.addEventListener('storage', (e) => {
      if (e.key === 'high-contrast') {
        document.body.classList.toggle('high-contrast', e.newValue === 'true');
      }
    });
  }
}

// Auto-initialize
new HighContrast();
export default HighContrast;

