var isTouch = window.DocumentTouch && document instanceof DocumentTouch;

// Smart Sticky Header Logic
let lastScrollTop = 0;
const header = document.getElementById('header');
const scrollThreshold = 100; // Only hide after scrolling this far

function scrollHeader() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
        // Scrolling Down
        header.style.transform = 'translateY(-100%)';
        header.classList.remove('shadow-sm'); // Optional: remove shadow when hidden
    } else {
        // Scrolling Up
        header.style.transform = 'translateY(0)';
        if (scrollTop > 0) {
            header.classList.add('shadow-sm', 'bg-white/95');
            header.classList.remove('bg-white/80');
        } else {
            header.classList.remove('shadow-sm', 'bg-white/95');
            header.classList.add('bg-white/80');
        }
    }
    lastScrollTop = scrollTop;
}

// ... existing parallaxBackground function ...

jQuery(document).ready(function($){

    // Initialize Scroll Event
    if (!isTouch){
        $(window).scroll(function() { // Changed to window for better support
            scrollHeader();
            parallaxBackground();
        });
    } else {
        $(window).on('touchmove', function() {
           scrollHeader();
        });
        // Also bind to scroll on touch devices as fallback
        $(window).scroll(function() {
            scrollHeader();
        });
    }


    // ... existing smooth scroll handlers ...

    // Responsive Menu (Off-Canvas Logic)
    // Responsive Menu (Off-Canvas Logic) - Vanilla JS for reliability
    const mobileToggle = document.getElementById('mobile-toggle');
    const mobileClose = document.getElementById('mobile-close');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const bodyEl = document.body;

    function toggleMenu() {
        if (!mobileOverlay) return;
        
        // Check state by class
        if (mobileOverlay.classList.contains('-translate-x-full')) {
            // Open
            mobileOverlay.classList.remove('-translate-x-full');
            bodyEl.classList.add('overflow-hidden');
            if(mobileToggle) mobileToggle.setAttribute('aria-expanded', 'true');
        } else {
            // Close
            mobileOverlay.classList.add('-translate-x-full');
            bodyEl.classList.remove('overflow-hidden');
            if(mobileToggle) mobileToggle.setAttribute('aria-expanded', 'false');
        }
    }

    if (mobileToggle) {
        mobileToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleMenu();
        });
    }

    if (mobileClose) {
        mobileClose.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleMenu();
        });
    }

    // Close on click outside
    document.addEventListener('click', function(e) {
        if (mobileOverlay && !mobileOverlay.classList.contains('-translate-x-full') && 
            !mobileOverlay.contains(e.target) && 
            (!mobileToggle || !mobileToggle.contains(e.target))) {
            toggleMenu();
        }
    });

    // --- Nur-e-Hidayat Spiritual Logic ---
    
    function updateSpiritualData() {
        const config = window.themeConfig || {};
        const hijriOffset = config.hijriOffset || 0;
        const location = config.location || 'Karachi';
        const method = config.prayerMethod || 'tehran';
        const adhanUrl = config.adhanMedia;
        
        let prayerTimings = null;

        // 1. Prayer Times Logic (Aladhan API)
        async function fetchPrayers() {
            try {
                const response = await fetch(`https://api.aladhan.com/v1/timingsByAddress?address=${location}&method=4`);
                const data = await response.json();
                if (data.code === 200) {
                    prayerTimings = data.data.timings;
                    updateMinaret();
                    checkAdhan();
                    // Clear any previous error messages
                    $('#prayer-error').remove();
                } else {
                    throw new Error('Invalid API response');
                }
            } catch (e) { 
                console.error("Could not fetch prayer times", e);
                // Display user-friendly error message
                if ($('#minaret-utility-bar').length && !$('#prayer-error').length) {
                    $('#minaret-utility-bar').prepend(
                        '<div id="prayer-error" class="bg-red-50 border border-red-200 text-red-700 px-4 py-2 rounded-lg text-xs mb-2">' +
                        '<i class="fa fa-exclamation-triangle mr-2"></i>' +
                        'Unable to load prayer times. <a href="#" onclick="location.reload()" class="underline font-bold">Retry</a>' +
                        '</div>'
                    );
                }
                // Retry after 30 seconds
                setTimeout(fetchPrayers, 30000);
            }
        }

        function updateMinaret() {
            if (!prayerTimings) return;
            
            const prayerNames = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
            const now = new Date();
            let nextPrayer = null;
            let nextPrayerTime = null;

            for (let name of prayerNames) {
                const [hrs, mins] = prayerTimings[name].split(':');
                const ptime = new Date();
                ptime.setHours(hrs, mins, 0);
                if (ptime > now) {
                    nextPrayer = name;
                    nextPrayerTime = ptime;
                    break;
                }
            }

            if (!nextPrayer) {
                nextPrayer = 'Fajr';
                const [hrs, mins] = prayerTimings['Fajr'].split(':');
                nextPrayerTime = new Date();
                nextPrayerTime.setDate(nextPrayerTime.getDate() + 1);
                nextPrayerTime.setHours(hrs, mins, 0);
            }

            $('#next-prayer-name').text(nextPrayer);
            
            // Countdown
            const timer = setInterval(() => {
                const remaining = nextPrayerTime - new Date();
                if (remaining <= 0) {
                    clearInterval(timer);
                    fetchPrayers(); // Refresh for next prayer
                } else {
                    const h = Math.floor(remaining / 3600000);
                    const m = Math.floor((remaining % 3600000) / 60000);
                    const s = Math.floor((remaining % 60000) / 1000);
                    const timeStr = `${h.toString().padStart(2, '0')}:${m.toString().padStart(2, '0')}:${s.toString().padStart(2, '0')}`;
                    // Use formatTime if available
                    const formattedTime = window.themeUtils && window.themeUtils.formatTime 
                        ? window.themeUtils.formatTime(timeStr) 
                        : timeStr;
                    $('#prayer-countdown').text(formattedTime);
                }
            }, 1000);

            updateHijri();
        }

        // 2. Maghrib-Aware Hijri Logic
        function updateHijri() {
            const date = new Date();
            let finalOffset = hijriOffset;

            // Transition Hijri date at Maghrib
            if (prayerTimings && prayerTimings.Maghrib) {
                const [mHrs, mMins] = prayerTimings.Maghrib.split(':');
                const maghribTime = new Date();
                maghribTime.setHours(mHrs, mMins, 0);
                if (date >= maghribTime) finalOffset += 1;
            }

            date.setDate(date.getDate() + finalOffset);
            
            try {
                const formatter = new Intl.DateTimeFormat('en-u-ca-islamic-umalqura-nu-latn', {
                    day: 'numeric', month: 'long', year: 'numeric'
                });
                $('#hijri-date').text(formatter.format(date));
            } catch (e) { console.error("Hijri error", e); }
        }

        // 3. Adhan Audio Logic
        let adhanPlayed = false;
        function checkAdhan() {
            if (!adhanUrl || !prayerTimings) return;
            
            setInterval(() => {
                const now = new Date();
                const nowStr = `${now.getHours().toString().padStart(2, '0')}:${now.getMinutes().toString().padStart(2, '0')}`;
                
                const prayers = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
                if (prayers.some(p => prayerTimings[p] === nowStr)) {
                    if (!adhanPlayed) {
                        const audio = new Audio(adhanUrl);
                        audio.play().catch(e => console.log("Adhan autoplay blocked", e));
                        adhanPlayed = true;
                        setTimeout(() => adhanPlayed = false, 70000); // Reset after 1 min
                    }
                }
            }, 30000);
        }

        checkAdhan();
        updateHijri(); // Call immediately for instant local date
        fetchPrayers();
    }

    if ($('#minaret-utility-bar').length) {
        updateSpiritualData();
    }

    // --- Accessibility Logic ---

    // 1. High Contrast Toggle
    const hcToggle = $('button[title="High Contrast"]');
    hcToggle.click(function() {
        $('body').toggleClass('high-contrast');
        localStorage.setItem('high-contrast', $('body').hasClass('high-contrast'));
    });

    if (localStorage.getItem('high-contrast') === 'true') {
        $('body').addClass('high-contrast');
    }

    // 2. Font Scaling
    let fontSize = parseInt(localStorage.getItem('font-size-offset')) || 0;
    const applyFontSize = () => {
        $('html').css('font-size', (100 + fontSize) + '%');
        localStorage.setItem('font-size-offset', fontSize);
    };

    $('button[title="Larger Text"]').click(function() {
        if (fontSize < 30) {
            fontSize += 5;
            applyFontSize();
        }
    });

    $('button[title="Smaller Text"]').click(function() {
        if (fontSize > -10) {
            fontSize -= 5;
            applyFontSize();
        }
    });
    
    // Initial apply
    if (fontSize !== 0) applyFontSize();

});
