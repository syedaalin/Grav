/**
 * Nur-ul-Huda Theme - Number Formatting Utilities
 * Provides locale-aware number formatting for RTL/LTR support
 */

(function(window) {
    'use strict';

    // Get theme configuration
    const themeConfig = window.themeConfig || {};
    const numberFormat = themeConfig.numberFormat || 'western';
    
    /**
     * Convert Western numerals (0-9) to Arabic-Indic (٠-٩)
     * @param {number|string} num - Number to convert
     * @returns {string} Converted number string
     */
    function toArabicIndic(num) {
        const arabicNumerals = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        return String(num).replace(/\d/g, d => arabicNumerals[d]);
    }
    
    /**
     * Convert Western numerals (0-9) to Persian (۰-۹)
     * @param {number|string} num - Number to convert
     * @returns {string} Converted number string
     */
    function toPersian(num) {
        const persianNumerals = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        return String(num).replace(/\d/g, d => persianNumerals[d]);
    }
    
    /**
     * Format number based on theme configuration
     * @param {number|string} num - Number to format
     * @returns {string} Formatted number
     */
    function formatNumber(num) {
        if (numberFormat === 'arabic_indic') {
            return toArabicIndic(num);
        } else if (numberFormat === 'persian') {
            return toPersian(num);
        }
        return String(num);
    }
    
    /**
     * Format time (HH:MM:SS) based on locale
     * @param {string} time - Time string in HH:MM or HH:MM:SS format
     * @returns {string} Formatted time
     */
    function formatTime(time) {
        if (numberFormat === 'arabic_indic') {
            return toArabicIndic(time);
        } else if (numberFormat === 'persian') {
            return toPersian(time);
        }
        return time;
    }

    /**
     * Format currency with proper symbol placement
     * @param {number} amount - Amount to format
     * @param {string} symbol - Currency symbol (default: $)
     * @returns {string} Formatted currency
     */
    function formatCurrency(amount, symbol = '$') {
        const formattedAmount = formatNumber(amount.toFixed(2));
        const direction = document.documentElement.dir || 'ltr';
        
        // In RTL, currency symbol typically goes after the number
        if (direction === 'rtl') {
            return `${formattedAmount}${symbol}`;
        }
        return `${symbol}${formattedAmount}`;
    }

    // Expose utilities globally
    window.themeUtils = window.themeUtils || {};
    Object.assign(window.themeUtils, {
        formatNumber,
        formatTime,
        formatCurrency,
        toArabicIndic,
        toPersian
    });

})(window);
