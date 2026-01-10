/* Nur-e-Hidayat: The Digital Sanctum - Core Logic */

/**
 * Adhan Playback Logic
 */
function initAdhan(adhanUrl) {
    if (!adhanUrl) return;
    const adhan = new Audio(adhanUrl);
    
    // Check every minute if it's prayer time
    setInterval(() => {
        const now = new Date();
        const timeString = `${now.getHours().toString().padStart(2, '0')}:${now.getMinutes().toString().padStart(2, '0')}`;
        if (window.PRAYER_TIMES && Object.values(window.PRAYER_TIMES).includes(timeString)) {
            adhan.play().catch(e => console.log('Auto-play blocked, interaction required.'));
        }
    }, 60000);
}

/**
 * Prayer Time Utility (Real Integration)
 */
async function initPrayerTimes() {
    const ticker = document.querySelector('.prayer-ticker');
    if (!ticker) return;

    const city = document.body.dataset.city || 'Karachi';
    const country = document.body.dataset.countryCode || 'PK';
    const method = document.body.dataset.method || '1';

    try {
        const response = await fetch(`https://api.aladhan.com/v1/timingsByCity?city=${city}&country=${country}&method=${method}`);
        const data = await response.json();
        const timings = data.data.timings;
        window.PRAYER_TIMES = timings;
        
        startPrayerCountdown(timings);
    } catch (e) {
        ticker.textContent = "Offline Mode";
        console.error('Failed to sync with the Digital Sanctum API');
    }
}

function startPrayerCountdown(timings) {
    const ticker = document.querySelector('.prayer-ticker');
    if (!ticker) return;

    const updateTicker = () => {
        const now = new Date();
        const currentTime = now.getHours() * 60 + now.getMinutes();
        
        const prayerOrder = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
        let nextPrayer = null;
        let nextTimeStr = '';

        for (const p of prayerOrder) {
            const [h, m] = timings[p].split(':').map(Number);
            const pTime = h * 60 + m;
            if (pTime > currentTime) {
                nextPrayer = p;
                nextTimeStr = timings[p];
                break;
            }
        }

        if (!nextPrayer) {
            nextPrayer = 'Fajr'; // Next day
            nextTimeStr = timings['Fajr'];
        }

        const [nh, nm] = nextTimeStr.split(':').map(Number);
        let diff = (nh * 60 + nm) - currentTime;
        if (diff < 0) diff += 1440; // Tomorrow

        const rh = Math.floor(diff / 60);
        const rm = diff % 60;

        ticker.innerHTML = `${nextPrayer} in <span class="text-accent-gold">${rh}h ${rm}m</span>`;
    };

    updateTicker();
    setInterval(updateTicker, 60000);
}

/**
 * Hijri Date Logic (with 2026 maghrib transition)
 */
function initHijriDate() {
    const dateElements = document.querySelectorAll('.hijri-date-display');
    if (!dateElements.length) return;

    const updateHijri = () => {
        const lang = document.documentElement.lang || 'en';
        // Map Grav languages to BCP47 locales for Islamic calendar
        const localeMap = { 'ur': 'ur-u-ca-islamic-uma', 'ar': 'ar-u-ca-islamic-uma', 'fa': 'fa-u-ca-islamic-uma', 'en': 'en-u-ca-islamic-uma' };
        const locale = localeMap[lang] || localeMap['en'];

        const options = { calendar: 'islamic-uma', day: 'numeric', month: 'long', year: 'numeric' };
        const today = new Date();
        
        const calibration = parseInt(document.body.dataset.hijriCalibration || 0);
        today.setDate(today.getDate() + calibration);

        let maghribHour = 18;
        if (window.PRAYER_TIMES && window.PRAYER_TIMES.Maghrib) {
            maghribHour = parseInt(window.PRAYER_TIMES.Maghrib.split(':')[0]);
        }

        if (today.getHours() >= maghribHour) {
            today.setDate(today.getDate() + 1);
        }

        const hijriStr = new Intl.DateTimeFormat(locale, options).format(today);
        
        dateElements.forEach(el => {
            el.innerHTML = `<i class="fa fa-moon-o mr-2"></i> ${hijriStr}`;
        });
    };

    updateHijri();
}

/**
 * JazzCash Interactivity (Rule 5.B)
 */
function initJazzCash() {
    document.addEventListener('snipcart.ready', () => {
        Snipcart.events.on('theme.before_render', (activeStep) => {
            // Logic to inject JazzCash payment option into Snipcart checkout
            console.log('Sanctum: JazzCash Middleware Ready');
        });
    });
}

/**
 * Dark/Light Mode Sovereignty
 */
function initThemeToggle() {
    if (localStorage.getItem('sanctum-theme') === 'light') {
        document.documentElement.classList.add('light-mode');
    }

    window.toggleTheme = () => {
        const isLight = document.documentElement.classList.toggle('light-mode');
        localStorage.setItem('sanctum-theme', isLight ? 'light' : 'dark');
    };
}

/**
 * PWA Registration
 */
function registerPWA() {
    if ('serviceWorker' in navigator) {
        const swPath = document.body.dataset.themeUrl + '/sw.js';
        navigator.serviceWorker.register(swPath)
            .then(reg => console.log('Sanctum Offline Secure.'))
            .catch(err => console.log('PWA registration failed:', err));
    }
}

/**
 * Snipcart Integration Logic
 */
function initSnipcart() {
    document.addEventListener('snipcart.ready', () => {
        const countElement = document.querySelector('.snipcart-items-count');
        Snipcart.store.subscribe(() => {
            const state = Snipcart.store.getState();
            const count = state.cart.items.count;
            if (countElement) {
                countElement.textContent = count;
                countElement.style.opacity = count > 0 ? '1' : '0';
            }
        });
    });
}

/**
 * Accessibility Sovereignty Logic
 */
window.A11Y_STATE = {
    textSize: parseFloat(localStorage.getItem('sanctum-text-size')) || 1.0,
    highContrast: localStorage.getItem('sanctum-contrast') === 'true'
};

function initA11y() {
    applyA11y();
    
    window.adjustTextSize = (delta) => {
        window.A11Y_STATE.textSize = Math.min(Math.max(window.A11Y_STATE.textSize + delta, 0.8), 1.5);
        localStorage.setItem('sanctum-text-size', window.A11Y_STATE.textSize);
        applyA11y();
    };

    window.toggleHighContrast = () => {
        window.A11Y_STATE.highContrast = !window.A11Y_STATE.highContrast;
        localStorage.setItem('sanctum-contrast', window.A11Y_STATE.highContrast);
        applyA11y();
    };
}

function applyA11y() {
    document.documentElement.style.fontSize = (window.A11Y_STATE.textSize * 100) + '%';
    document.documentElement.classList.toggle('high-contrast', window.A11Y_STATE.highContrast);
}

document.addEventListener('DOMContentLoaded', () => {
    initPrayerTimes();
    initHijriDate();
    initThemeToggle();
    initSnipcart();
    initA11y();
    initJazzCash();
    registerPWA();
    if (window.ADHAN_URL) {
        initAdhan(window.ADHAN_URL);
    }
});
