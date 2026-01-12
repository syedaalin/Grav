
// Spiritual Module Orchestrator
// Orchestrates PrayerTimes, HijriDate, and AdhanPlayer modules.

jQuery(document).ready(async function($){
    if (!$('#top-banner-utility-bar').length) return;

    let config = {};
    try {
        const configElement = document.getElementById('theme-config');
        if (configElement) {
            config = JSON.parse(configElement.textContent);
        }
    } catch (e) {
        console.error('Failed to parse theme config', e);
    }

    const hijriOffset = config.hijriOffset || 0;
    const location = config.location || 'Karachi';
    const method = config.prayerMethod || 'tehran';
    const adhanUrl = config.adhanMedia;
    
    // Dependencies (assumed loaded via simpler script tags or concatenation)
    const PrayerTimes = window.PrayerTimesModule;
    const HijriDate = window.HijriDateModule;
    const AdhanPlayer = window.AdhanPlayerModule;

    if (!PrayerTimes || !HijriDate || !AdhanPlayer) {
        console.warn("Spiritual modules not loaded.");
        return;
    }

    try {
        // 1. Fetch Prayers
        const timings = await PrayerTimes.fetch({ location, method });
        
        if (timings) {
            // 2. Update Hijri Date (Maghrib Aware)
            HijriDate.setOffset(hijriOffset);
            const hijriData = await HijriDate.getCurrentDate(timings);
            const hijriStr = HijriDate.formatDate(hijriData);
            $('#hijri-date').html(hijriStr);

            // 3. Initialize Adhan
            AdhanPlayer.init(adhanUrl, timings);

            // 4. Update UI (Next Prayer & Countdown)
            updateTopBannerUI(timings);
            
            // Clear errors
             $('#prayer-error').remove();
        }
    } catch (e) {
        handleError(e);
    }

    // UI Updater Logic (kept here as it's presentation layer glue)
    function updateTopBannerUI(timings) {
        const next = PrayerTimes.getNextPrayer(timings);
        if (!next) return;

        $('#next-prayer-name').text(next.name);

        const timer = setInterval(() => {
            const nextPrayerTime = new Date(next.time);
            const remaining = nextPrayerTime - new Date();

            if (remaining <= 0) {
                clearInterval(timer);
                location.reload(); // Refresh for next prayer
            } 
            
            // Format time as hh:mm AM/PM instead of countdown
            // Using toLocaleString logic for consistency or themeUtils
            const hours = nextPrayerTime.getHours();
            const minutes = nextPrayerTime.getMinutes();
            const ampm = hours >= 12 ? 'PM' : 'AM';
            const formattedHours = hours % 12 || 12; // Convert 0 to 12
            const formattedMinutes = minutes.toString().padStart(2, '0');
            
            const timeStr = `${formattedHours}:${formattedMinutes} ${ampm}`;
            
            $('#prayer-countdown').text(timeStr);

        }, 1000);
    }

    function handleError(e) {
        if ($('#top-banner-utility-bar').length && !$('#prayer-error').length) {
            $('#top-banner-utility-bar').prepend(
                '<div id="prayer-error" class="bg-error/5 border border-error/20 text-error px-4 py-2 rounded-lg text-xs mb-2">' +
                '<i class="la la-exclamation-triangle mr-2"></i>' +
                'Unable to load prayer times. <a href="#" onclick="location.reload()" class="underline font-bold">Retry</a>' +
                '</div>'
            );
        }
        
        // Retry logic could arguably move to the module, but keeping simple for now
        const retryDelay = Math.min(30000 * Math.pow(2, (window.prayerRetryCount || 0)), 120000);
        window.prayerRetryCount = (window.prayerRetryCount || 0) + 1;
        setTimeout(() => location.reload(), retryDelay);
    }
});
