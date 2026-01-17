/**
 * High Contrast Module - ES2025+
 * Handles toggling high contrast mode for accessibility.
 */

import { Logger } from './utils.js';

export class HighContrast {
  constructor() {
    this.init();
  }

  /**
   * Initialize High Contrast State
   */
  init() {
    const hcToggle = document.querySelector('button[title="High Contrast"]');
    Logger.info('HighContrast: Initialized');

    if (hcToggle) {
      hcToggle.addEventListener('click', () => {
        document.body.classList.toggle('high-contrast');
        const isEnabled = document.body.classList.contains('high-contrast');
        localStorage.setItem('high-contrast', isEnabled);
        Logger.info(`HighContrast: Toggled to ${isEnabled}`);
      });
    }

    // Load initial state
    if (localStorage.getItem('high-contrast') === 'true') {
      document.body.classList.add('high-contrast');
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
