/**
 * Hijri Date Service - ES6 Module
 * Handles Hijri calendar calculations with Maghrib-aware date transition
 * 
 * @module HijriDateService
 */

(function(window) {
    'use strict';

    class HijriDateService {
        #offset = 0;
        #cache = new Map();

        /**
         * Constructor
         * @param {number} offset - Manual calibration offset in days
         */
        constructor(offset = 0) {
            this.#offset = offset;
        }

        /**
         * Get current Hijri date
         * @param {Object} prayerTimings - Prayer timings for Maghrib check
         * @returns {Promise<Object>} Hijri date object
         */
        async getCurrentDate(prayerTimings = null) {
            const now = new Date();
            const cacheKey = this.#getCacheKey(now);
            
            if (this.#cache.has(cacheKey)) {
                return this.#cache.get(cacheKey);
            }

            try {
                // Check if we're past Maghrib (Islamic day starts at sunset)
                let dateToUse = now;
                if (prayerTimings && this.#isPastMaghrib(now, prayerTimings)) {
                    dateToUse = new Date(now);
                    dateToUse.setDate(dateToUse.getDate() + 1);
                }

                const hijriDate = await this.#fetchHijriDate(dateToUse);
                
                if (hijriDate) {
                    this.#cache.set(cacheKey, hijriDate);
                }
                
                return hijriDate;
            } catch (error) {
                console.error("Could not fetch Hijri date", error);
                return null;
            }
        }

        /**
         * Set calibration offset
         * @param {number} offset - Offset in days
         */
        setOffset(offset) {
            this.#offset = offset;
            this.#cache.clear();
        }

        /**
         * Clear cache
         */
        clearCache() {
            this.#cache.clear();
        }

        /**
         * Check if current time is past Maghrib
         * @private
         */
        #isPastMaghrib(now, prayerTimings) {
            if (!prayerTimings || !prayerTimings.Maghrib) {
                return false;
            }

            const [hrs, mins] = prayerTimings.Maghrib.split(':').map(Number);
            const maghribTime = new Date(now);
            maghribTime.setHours(hrs, mins, 0, 0);
            
            return now > maghribTime;
        }

        /**
         * Fetch Hijri date from API
         * @private
         */
        async #fetchHijriDate(date) {
            // Format date as DD-MM-YYYY
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const year = date.getFullYear();
            const dateStr = `${day}-${month}-${year}`;
            
            // Apply offset by adjusting the date
            const adjustedDate = new Date(date);
            adjustedDate.setDate(adjustedDate.getDate() + this.#offset);
            const adjDay = String(adjustedDate.getDate()).padStart(2, '0');
            const adjMonth = String(adjustedDate.getMonth() + 1).padStart(2, '0');
            const adjYear = adjustedDate.getFullYear();
            const adjDateStr = `${adjDay}-${adjMonth}-${adjYear}`;
            
            const response = await fetch(
                `https://api.aladhan.com/v1/gToH/${adjDateStr}`
            );
            
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            
            const data = await response.json();
            
            if (data.code === 200) {
                return data.data.hijri;
            }
            
            return null;
        }

        /**
         * Generate cache key
         * @private
         */
        #getCacheKey(date) {
            return `hijri_${date.toISOString().split('T')[0]}_${this.#offset}`;
        }

        /**
         * Format Hijri date
         * @param {Object} hijriDate - Hijri date object from API
         * @returns {string} Formatted date string
         */
        formatDate(hijriDate) {
            if (!hijriDate) return '';
            
            const { day, month, year } = hijriDate;
            return `${day} ${month.en} ${year}`;
        }
    }

    // Export singleton instance
    const hijriDate = new HijriDateService();
    
    // Expose to window for backward compatibility
    window.HijriDateModule = hijriDate;

})(window);
