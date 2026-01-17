/**
 * Service Worker Registration Module - ES2025+
 * Handles strict registration of PWA service worker.
 */
import { themeUtils, Logger } from './utils.js';

/**
 * Service Worker Manager
 * Handles registration of PWA service worker with theme configuration support.
 */
export class ServiceWorkerManager {
  /**
   * Initialize Service Worker Manager
   */
  constructor() {
    this.init();
  }

  /**
   * Register Service Worker
   * @private
   */
  init() {
    if (!('serviceWorker' in navigator)) {
      Logger.info('Service Worker: Not supported in this browser');
      return;
    }

    window.addEventListener('load', () => {
      const config = themeUtils.getConfig();
      // Default to root-relative path if theme_url is missing, but prefer config
      const themeUrl = config.theme_url || '/user/themes/nur-ul-huda';
      const swPath = `${themeUrl}/sw.js`;

      navigator.serviceWorker.register(swPath)
        .then((registration) => {
          Logger.info('Service Worker: Registered successfully', registration.scope);
        })
        .catch((error) => {
          Logger.error('Service Worker: Registration failed', error);
        });
    });
  }
}

// Auto-initialize
new ServiceWorkerManager();
export default ServiceWorkerManager;
