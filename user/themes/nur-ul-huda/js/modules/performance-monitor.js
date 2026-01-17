/**
 * Performance Monitoring Module - ES2025+
 * NUR-UL-HUDA FRONTEND LOGIC
 */

import { Logger } from './utils.js';

export class PerformanceMonitor {
    #metrics = new Map();
    #observers = [];

    constructor() {
        this.#initializeObservers();
        Logger.info('PerformanceMonitor: Initialized');
    }

    /**
     * Initialize performance observers
     * @private
     */
    #initializeObservers() {
        // Largest Contentful Paint (LCP)
        if ('PerformanceObserver' in window) {
            try {
                const lcpObserver = new PerformanceObserver((list) => {
                    const entries = list.getEntries();
                    const lastEntry = entries[entries.length - 1];
                    this.#metrics.set('LCP', lastEntry.renderTime || lastEntry.loadTime);
                    this.#reportMetric('LCP', lastEntry.renderTime || lastEntry.loadTime);
                });
                lcpObserver.observe({ type: 'largest-contentful-paint', buffered: true });
                this.#observers.push(lcpObserver);
            } catch (e) {
                Logger.warn('PerformanceMonitor: LCP observer not supported');
            }

            // First Input Delay (FID) -> Interaction to Next Paint (INP) is modern replacement, but keeping FID for compatibility
            try {
                const fidObserver = new PerformanceObserver((list) => {
                    const entries = list.getEntries();
                    entries.forEach((entry) => {
                        this.#metrics.set('FID', entry.processingStart - entry.startTime);
                        this.#reportMetric('FID', entry.processingStart - entry.startTime);
                    });
                });
                fidObserver.observe({ type: 'first-input', buffered: true });
                this.#observers.push(fidObserver);
            } catch (e) {
                Logger.warn('PerformanceMonitor: FID observer not supported');
            }

            // Cumulative Layout Shift (CLS)
            try {
                let clsValue = 0;
                const clsObserver = new PerformanceObserver((list) => {
                    for (const entry of list.getEntries()) {
                        if (!entry.hadRecentInput) {
                            clsValue += entry.value;
                            this.#metrics.set('CLS', clsValue);
                        }
                    }
                });
                clsObserver.observe({ type: 'layout-shift', buffered: true });
                this.#observers.push(clsObserver);
            } catch (e) {
                Logger.warn('PerformanceMonitor: CLS observer not supported');
            }
        }

        // Report CLS on page hide
        window.addEventListener('visibilitychange', () => {
            if (document.visibilityState === 'hidden') {
                const cls = this.#metrics.get('CLS') || 0;
                this.#reportMetric('CLS', cls);
            }
        });
    }

    /**
     * Report metric to analytics
     * @private
     */
    #reportMetric(name, value) {
        // Send to analytics if available
        if (typeof gtag !== 'undefined') {
            gtag('event', name, {
                value: Math.round(value),
                metric_id: name,
                metric_value: value,
                metric_delta: value
            });
        }
    }

    /**
     * Get all collected metrics
     * @returns {Object} Metrics object
     */
    getMetrics() {
        return Object.fromEntries(this.#metrics);
    }

    /**
     * Get specific metric
     * @param {string} name - Metric name
     * @returns {number|undefined} Metric value
     */
    getMetric(name) {
        return this.#metrics.get(name);
    }

    /**
     * Measure custom timing
     * @param {string} name - Measurement name
     * @param {Function} fn - Function to measure
     * @returns {Promise<any>} Function result
     */
    async measure(name, fn) {
        const startTime = performance.now();
        try {
            const result = await fn();
            const duration = performance.now() - startTime;
            this.#metrics.set(name, duration);
            this.#reportMetric(name, duration);
            return result;
        } catch (error) {
            const duration = performance.now() - startTime;
            this.#metrics.set(`${name}_error`, duration);
            throw error;
        }
    }

    /**
     * Disconnect all observers
     */
    disconnect() {
        this.#observers.forEach(observer => observer.disconnect());
        this.#observers = [];
    }
}

// Export singleton instance
export const performanceMonitor = new PerformanceMonitor();
export default performanceMonitor;

