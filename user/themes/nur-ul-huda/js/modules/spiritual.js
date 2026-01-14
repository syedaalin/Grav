/**
 * Spiritual Module Orchestrator - ES2025+
 * Blueprint: [frontend-logic.blueprint.md](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/blueprints/docs/frontend-logic.blueprint.md)
 * Orchestrates PrayerTimes, HijriDate, and AdhanPlayer modules with reactive state.
 */

import { themeUtils, Signal } from './utils.js';
import prayerTimes from './prayer-times.js';
import hijriDate from './hijri-date.js';
import adhanPlayer from './adhan-player.js';

// Reactive State (Signals)
const timingsSignal = new Signal(null);
const currentHijriDateSignal = new Signal('');
const nextPrayerSignal = new Signal(null);
const countdownSignal = new Signal('');

/**
 * Main Orchestrator Logic
 */
async function initSpiritual() {
  const utilityBar = document.getElementById('top-banner-utility-bar');
  if (!utilityBar) return;

  const config = themeUtils.getConfig();
  const hijriOffset = config.hijriOffset || 0;
  const location = config.location || 'Karachi';
  const method = config.prayerMethod || 'tehran';
  const adhanUrl = config.adhanMedia;

  // 1. Subscribe UI Updates to Signals
  setupReactivity();

  try {
    // 2. Fetch Prayers
    const timings = await prayerTimes.fetch({ location, method });
    
    if (timings) {
      timingsSignal.value = timings;

      // 3. Update Hijri Date (Maghrib Aware)
      hijriDate.setOffset(hijriOffset);
      const hijriData = await hijriDate.getCurrentDate(timings);
      currentHijriDateSignal.value = hijriDate.formatDate(hijriData);

      // 4. Initialize Adhan
      adhanPlayer.init(adhanUrl, timings);

      // 5. Update Next Prayer & Start Countdown Logic
      updateNextPrayer(timings);
      
      // 6. Start Real-time Date Watcher
      startDateWatcher();
      
      // Clear errors
      const errorMsg = document.getElementById('prayer-error');
      if (errorMsg) errorMsg.remove();
      
      // Clear retry count on success
      sessionStorage.removeItem('prayerRetryCount');
    }
  } catch (e) {
    handleError(e);
  }
}

/**
 * Bind Signal updates to DOM
 */
function setupReactivity() {
  // Update Hijri Date UI
  currentHijriDateSignal.subscribe((val) => {
    const el = document.getElementById('hijri-date');
    if (el) el.innerHTML = val;
  });

  // Update Next Prayer Name UI
  nextPrayerSignal.subscribe((val) => {
    const el = document.getElementById('next-prayer-name');
    if (el && val) el.textContent = val.name;
  });

  // Update Countdown UI
  countdownSignal.subscribe((val) => {
    const el = document.getElementById('prayer-countdown');
    if (el) el.textContent = val;
  });
}

/**
 * Handle Next Prayer and Countdown Logic
 */
function updateNextPrayer(timings) {
  const next = prayerTimes.getNextPrayer(timings);
  if (!next) return;

  nextPrayerSignal.value = next;

  const timer = setInterval(() => {
    const now = new Date();
    const nextPrayerTime = new Date(next.time);
    const remaining = nextPrayerTime - now;

    if (remaining <= 0) {
      clearInterval(timer);
      window.location.reload(); // Refresh for next prayer
      return;
    } 
    
    // Format time as HH:mm (24 hour format)
    const hours = nextPrayerTime.getHours();
    const minutes = nextPrayerTime.getMinutes();
    const formattedHours = hours.toString().padStart(2, '0');
    const formattedMinutes = minutes.toString().padStart(2, '0');
    
    countdownSignal.value = `${formattedHours}:${formattedMinutes}`;
  }, 1000);
}

/**
 * Gregorian Date Watcher
 */
function startDateWatcher() {
  const dateEl = document.getElementById('gregorian-date');
  if (!dateEl) return;

  const updateDate = () => {
    const now = new Date();
    const options = { weekday: 'short', month: 'short', day: 'numeric' };
    const dateStr = now.toLocaleDateString('en-US', options);
    const yearStr = now.getFullYear();
    
    dateEl.innerHTML = `${dateStr}<span class="year-responsive">, ${yearStr}</span>`;
    dateEl.setAttribute('datetime', now.toISOString().split('T')[0]);
  };

  updateDate(); // Initial call
  setInterval(updateDate, 60000); // Check every minute
}



/**
 * Global Error Handler
 */
function handleError(e) {
  console.error("Prayer Times Error:", e);
  const utilityBar = document.getElementById('top-banner-utility-bar');
  if (utilityBar && !document.getElementById('prayer-error')) {
    const errorDiv = document.createElement('div');
    errorDiv.id = 'prayer-error';
    errorDiv.className = 'bg-error/5 border border-error/20 text-error px-4 py-2 rounded-lg text-xs mb-2 flex items-center';
    
    const icon = document.createElement('i');
    icon.className = 'la la-exclamation-triangle mr-2';
    errorDiv.appendChild(icon);
    
    const text = document.createTextNode('Unable to load prayer times. ');
    errorDiv.appendChild(text);
    
    const retryLink = document.createElement('a');
    retryLink.href = '#';
    retryLink.className = 'underline font-bold';
    retryLink.textContent = 'Retry';
    retryLink.addEventListener('click', (e) => {
      e.preventDefault();
      location.reload();
    });
    errorDiv.appendChild(retryLink);
    
    utilityBar.prepend(errorDiv);
  }
  
  const retryCount = parseInt(sessionStorage.getItem('prayerRetryCount') || '0');
  const retryDelay = Math.min(30000 * Math.pow(2, retryCount), 120000);
  sessionStorage.setItem('prayerRetryCount', (retryCount + 1).toString());
  
  console.log(`Retrying in ${retryDelay/1000}s (Attempt ${retryCount + 1})`);
  setTimeout(() => window.location.reload(), retryDelay);
}

// Initial execution
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initSpiritual);
} else {
  initSpiritual();
}
