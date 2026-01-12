/**
 * Prayer Times Service - ES6 Module
 * Handles API fetching, caching, and state management for prayer times.
 * 
 * @module PrayerTimesService
 */

(function(window) {
    'use strict';

    class PrayerTimesService {
        #cache = new Map();
        #methodMap = {
            'tehran': '0',
            'karachi': '1',
            'isna': '2',
            'leva': '7'
        };

        /**
         * Fetch prayer times for a location
         * @param {Object} config - Configuration object
         * @param {string} config.location - Location name
         * @param {string} config.method - Prayer calculation method
         * @returns {Promise<Object|null>} Prayer timings object
         */
        async fetch(config) {
            const { location, method } = config;
            const apiMethod = this.#methodMap[method] || '0';
            
            // Check cache first
            const today = new Date().toISOString().split('T')[0];
            const cacheKey = this.#getCacheKey(location, today);
            
            if (this.#cache.has(cacheKey)) {
                return this.#cache.get(cacheKey);
            }
            
            // Check localStorage
            const cached = localStorage.getItem(cacheKey);
            if (cached) {
                try {
                    const data = JSON.parse(cached);
                    this.#cache.set(cacheKey, data);
                    return data;
                } catch (e) {
                    localStorage.removeItem(cacheKey);
                }
            }
            
            // Fetch from API
            try {
                const response = await fetch(
                    `https://api.aladhan.com/v1/timingsByAddress?address=${encodeURIComponent(location)}&method=${apiMethod}`
                );
                
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                
                const data = await response.json();
                
                if (data.code === 200) {
                    const timings = data.data.timings;
                    this.#cache.set(cacheKey, timings);
                    localStorage.setItem(cacheKey, JSON.stringify(timings));
                    return timings;
                }
            } catch (error) {
                console.error("Could not fetch prayer times", error);
                throw error;
            }
            
            return null;
        }

        /**
         * Get the next upcoming prayer
         * @param {Object} timings - Prayer timings object
         * @returns {Object|null} Next prayer with name and time
         */
        getNextPrayer(timings) {
            if (!timings) return null;

            const prayerNames = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
            const now = new Date();
            
            for (const name of prayerNames) {
                const [hrs, mins] = timings[name].split(':').map(Number);
                const ptime = new Date();
                ptime.setHours(hrs, mins, 0, 0);
                
                if (ptime > now) {
                    return { name, time: ptime };
                }
            }

            // Next day Fajr
            const [hrs, mins] = timings['Fajr'].split(':').map(Number);
            const nextPrayerTime = new Date();
            nextPrayerTime.setDate(nextPrayerTime.getDate() + 1);
            nextPrayerTime.setHours(hrs, mins, 0, 0);
            
            return { name: 'Fajr', time: nextPrayerTime };
        }

        /**
         * Clear cache
         */
        clearCache() {
            this.#cache.clear();
        }

        /**
         * Generate cache key
         * @private
         */
        #getCacheKey(location, date) {
            return `prayers_${location}_${date}`;
        }
    }

    // Export singleton instance
    const prayerTimes = new PrayerTimesService();
    
    // Expose to window for backward compatibility
    window.PrayerTimesModule = prayerTimes;

})(window);
