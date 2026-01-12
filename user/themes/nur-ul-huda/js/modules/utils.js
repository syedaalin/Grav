/**
 * Nur-ul-Huda Theme - Number Formatting Utilities
 * Provides locale-aware number formatting for RTL/LTR support
 * 
 * @module ThemeUtils
 */

(function(window) {
    'use strict';

    class ThemeUtils {
        #config = {};
        #numberFormat = 'western';
        #arabicNumerals = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        #persianNumerals = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];

        constructor() {
            this.#loadConfig();
        }

        /**
         * Load theme configuration from DOM
         * @private
         */
        #loadConfig() {
            try {
                const configElement = document.getElementById('theme-config');
                if (configElement) {
                    this.#config = JSON.parse(configElement.textContent);
                    this.#numberFormat = this.#config.numberFormat || 'western';
                }
            } catch (error) {
                console.error('Failed to parse theme config', error);
            }
        }

        /**
         * Convert Western numerals (0-9) to Arabic-Indic (٠-٩)
         * @param {number|string} num - Number to convert
         * @returns {string} Converted number string
         */
        toArabicIndic(num) {
            return String(num).replace(/\d/g, d => this.#arabicNumerals[d]);
        }
        
        /**
         * Convert Western numerals (0-9) to Persian (۰-۹)
         * @param {number|string} num - Number to convert
         * @returns {string} Converted number string
         */
        toPersian(num) {
            return String(num).replace(/\d/g, d => this.#persianNumerals[d]);
        }
        
        /**
         * Format number based on theme configuration
         * @param {number|string} num - Number to format
         * @returns {string} Formatted number
         */
        formatNumber(num) {
            switch (this.#numberFormat) {
                case 'arabic_indic':
                    return this.toArabicIndic(num);
                case 'persian':
                    return this.toPersian(num);
                default:
                    return String(num);
            }
        }
        
        /**
         * Format time (HH:MM:SS) based on locale
         * @param {string} time - Time string in HH:MM or HH:MM:SS format
         * @returns {string} Formatted time
         */
        formatTime(time) {
            switch (this.#numberFormat) {
                case 'arabic_indic':
                    return this.toArabicIndic(time);
                case 'persian':
                    return this.toPersian(time);
                default:
                    return time;
            }
        }

        /**
         * Format currency with proper symbol placement
         * @param {number} amount - Amount to format
         * @param {string} symbol - Currency symbol (default: $)
         * @returns {string} Formatted currency
         */
        formatCurrency(amount, symbol = '$') {
            const formattedAmount = this.formatNumber(amount.toFixed(2));
            const direction = document.documentElement.dir || 'ltr';
            
            // In RTL, currency symbol typically goes after the number
            return direction === 'rtl' 
                ? `${formattedAmount}${symbol}` 
                : `${symbol}${formattedAmount}`;
        }

        /**
         * Get theme configuration
         * @returns {Object} Theme configuration object
         */
        getConfig() {
            return { ...this.#config };
        }

        /**
         * Get specific config value
         * @param {string} key - Config key
         * @param {*} defaultValue - Default value if key not found
         * @returns {*} Config value
         */
        getConfigValue(key, defaultValue = null) {
            return this.#config[key] ?? defaultValue;
        }
    }

    // Export singleton instance
    const themeUtils = new ThemeUtils();
    
    // Expose to window for backward compatibility
    window.themeUtils = themeUtils;

})(window);
