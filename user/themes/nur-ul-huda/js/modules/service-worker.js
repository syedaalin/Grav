/**
 * Service Worker Registration Module - ES2025+
 * Handles strict registration of PWA service worker.
 */
import { themeUtils } from './utils.js';

export class ServiceWorkerManager {
  constructor() {
    this.init();
  }

  init() {
    if (!('serviceWorker' in navigator)) return;

    window.addEventListener('load', () => {
      const config = themeUtils.getConfig();
      // Default to root-relative path if theme_url is missing, but prefer config
      const themeUrl = config.theme_url || '/user/themes/nur-ul-huda';
      const swPath = `${themeUrl}/sw.js`;

      navigator.serviceWorker.register(swPath)
        .then((registration) => {
          console.debug('SW registered:', registration);
        })
        .catch((error) => {
          console.error('SW registration failed:', error);
        });
    });
  }
}

// Auto-initialize
new ServiceWorkerManager();
export default ServiceWorkerManager;
