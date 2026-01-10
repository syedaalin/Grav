
// Prayer Times Module
// Handles API fetching, caching, and state management for prayer times.

const PrayerTimes = {
    async fetch(config) {
        const { location, method } = config;
        
        // Map prayer methods to API codes
        const methodMap = {
            'tehran': '0',
            'karachi': '1',
            'isna': '2',
            'leva': '7'
        };
        const apiMethod = methodMap[method] || '0';
        
        // Check localStorage cache first
        const today = new Date().toISOString().split('T')[0];
        const cacheKey = `prayers_${location}_${today}`;
        const cached = localStorage.getItem(cacheKey);
        
        if (cached) {
            try {
                return JSON.parse(cached);
            } catch (e) {
                localStorage.removeItem(cacheKey);
            }
        }
        
        // Fetch from API
        try {
            const response = await fetch(`https://api.aladhan.com/v1/timingsByAddress?address=${location}&method=${apiMethod}`);
            const data = await response.json();
            
            if (data.code === 200) {
                const timings = data.data.timings;
                localStorage.setItem(cacheKey, JSON.stringify(timings));
                return timings;
            }
        } catch (e) {
            console.error("Could not fetch prayer times", e);
            throw e;
        }
        
        return null; // Fallback
    },

    getNextPrayer(timings) {
        if (!timings) return null;

        const prayerNames = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
        const now = new Date();
        
        for (let name of prayerNames) {
            const [hrs, mins] = timings[name].split(':');
            const ptime = new Date();
            ptime.setHours(hrs, mins, 0);
            if (ptime > now) {
                return { name, time: ptime };
            }
        }

        // Next day Fajr
        const [hrs, mins] = timings['Fajr'].split(':');
        const nextPrayerTime = new Date();
        nextPrayerTime.setDate(nextPrayerTime.getDate() + 1);
        nextPrayerTime.setHours(hrs, mins, 0);
        
        return { name: 'Fajr', time: nextPrayerTime };
    }
};

window.PrayerTimesModule = PrayerTimes;
