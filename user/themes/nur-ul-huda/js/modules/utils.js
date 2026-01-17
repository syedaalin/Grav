/**
 * Nur-ul-Huda Theme - Number Formatting Utilities
 * Provides locale-aware number formatting for RTL/LTR support
 *
 * @module ThemeUtils
 */

export default class ThemeUtils {
  #config = {};
  #numberFormat = "western";
  #arabicNumerals = ["٠", "١", "٢", "٣", "٤", "٥", "٦", "٧", "٨", "٩"];
  #persianNumerals = ["۰", "۱", "۲", "۳", "۴", "۵", "٦", "٧", "٨", "٩"];

  constructor() {
    this.#loadConfig();
    Logger.configure(this.#config.debugger || false);
  }

  /**
   * Load theme configuration from window object
   * @private
   */
  #loadConfig() {
    try {
      if (window.GravConfig) {
        this.#config = window.GravConfig;
        this.#numberFormat = this.#config.numberFormat || "western";
      } else {
        console.warn("ThemeUtils: window.GravConfig is missing.");
      }
    } catch (error) {
      console.error("Failed to load theme config", error);
    }
  }

  /**
   * Convert Western numerals (0-9) to Arabic-Indic (٠-٩)
   * @param {number|string} num - Number to convert
   * @returns {string} Converted number string
   */
  toArabicIndic(num) {
    return String(num).replace(/\d/g, (d) => this.#arabicNumerals[d]);
  }

  /**
   * Convert Western numerals (0-9) to Persian (۰-۹)
   * @param {number|string} num - Number to convert
   * @returns {string} Converted number string
   */
  toPersian(num) {
    return String(num).replace(/\d/g, (d) => this.#persianNumerals[d]);
  }

  /**
   * Format number based on theme configuration
   * @param {number|string} num - Number to format
   * @returns {string} Formatted number
   */
  formatNumber(num) {
    switch (this.#numberFormat) {
      case "arabic_indic":
        return this.toArabicIndic(num);
      case "persian":
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
      case "arabic_indic":
        return this.toArabicIndic(time);
      case "persian":
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
  formatCurrency(amount, symbol = "$") {
    const formattedAmount = this.formatNumber(amount.toFixed(2));
    const direction = document.documentElement.dir || "ltr";

    // In RTL, currency symbol typically goes after the number
    return direction === "rtl"
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

/**
 * Standardized Logger for Theme
 * Handles debug/production logging states
 */
export class Logger {
  static #debug = false;

  /**
   * Configure logger state
   * @param {boolean} isDebug - Whether debug mode is enabled
   */
  static configure(isDebug) {
    this.#debug = isDebug;
  }

  /**
   * Log info message (Debug mode only)
   * @param {string} msg - Message
   * @param {...*} args - Additional arguments
   */
  static info(msg, ...args) {
    if (this.#debug) console.log(`[Info] ${msg}`, ...args);
  }

  /**
   * Log warning message
   * @param {string} msg - Message
   * @param {...*} args - Additional arguments
   */
  static warn(msg, ...args) {
    console.warn(`[Warn] ${msg}`, ...args);
  }

  /**
   * Log error message
   * @param {string} msg - Message
   * @param {...*} args - Additional arguments
   */
  static error(msg, ...args) {
    console.error(`[Error] ${msg}`, ...args);
  }
}

/**
 * Minimal Signal implementation for reactive state
 */
export class Signal {
  #value;
  #subscribers = new Set();

  constructor(initialValue) {
    this.#value = initialValue;
  }

  get value() {
    return this.#value;
  }

  set value(newValue) {
    if (this.#value === newValue) return;
    this.#value = newValue;
    this.#notify();
  }

  subscribe(fn) {
    this.#subscribers.add(fn);
    fn(this.#value); // Initial call
    return () => this.#subscribers.delete(fn);
  }

  #notify() {
    this.#subscribers.forEach((fn) => fn(this.#value));
  }
}

// Export singleton instance
export const themeUtils = new ThemeUtils();
