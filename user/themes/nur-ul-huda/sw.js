/**
 * Service Worker for Nur-ul-Huda Theme
 * Provides offline functionality and caching strategies
 * 
 * @version 2.1.3
 * @updated 2026-01-16 - Enhanced with stale-while-revalidate and offline fallbacks
 */

const CACHE_VERSION = 'nur-ul-huda-v2.1.3';
const STATIC_CACHE = `${CACHE_VERSION}-static`;
const DYNAMIC_CACHE = `${CACHE_VERSION}-dynamic`;
const API_CACHE = `${CACHE_VERSION}-api`;
const OFFLINE_CACHE = `${CACHE_VERSION}-offline`;

// Cache expiration times (in milliseconds)
const CACHE_EXPIRATION = {
    static: 7 * 24 * 60 * 60 * 1000,  // 7 days
    dynamic: 24 * 60 * 60 * 1000,     // 1 day
    api: 60 * 60 * 1000                // 1 hour
};

// Static assets to cache on install
const STATIC_ASSETS = [
    '/',
    '/css/nur-ul-huda.css',
    '/css/line-awesome.min.css',
    '/js/modules/ui.js',
    '/js/modules/utils.js',
    '/js/modules/prayer-times.js',
    '/js/modules/hijri-date.js',
    '/fonts/line-awesome.woff2'
];

// Offline fallback pages
const OFFLINE_FALLBACKS = [
    '/offline.html',
    '/images/offline-mosque.svg'
];

// API endpoints to cache
const API_ENDPOINTS = [
    'https://api.aladhan.com/v1/timingsByAddress',
    'https://api.aladhan.com/v1/gToH'
];

/**
 * Install event - cache static assets
 */
self.addEventListener('install', (event) => {
    console.log('[SW] Installing service worker...');

    event.waitUntil(
        caches.open(STATIC_CACHE)
            .then((cache) => {
                console.log('[SW] Caching static assets');
                return cache.addAll(STATIC_ASSETS);
            })
            .then(() => self.skipWaiting())
            .catch((error) => {
                console.error('[SW] Failed to cache static assets:', error);
            })
    );
});

/**
 * Activate event - clean up old caches
 */
self.addEventListener('activate', (event) => {
    console.log('[SW] Activating service worker...');

    event.waitUntil(
        caches.keys()
            .then((cacheNames) => {
                return Promise.all(
                    cacheNames
                        .filter((name) => name.startsWith('nur-ul-huda-') && name !== STATIC_CACHE && name !== DYNAMIC_CACHE && name !== API_CACHE)
                        .map((name) => {
                            console.log('[SW] Deleting old cache:', name);
                            return caches.delete(name);
                        })
                );
            })
            .then(() => self.clients.claim())
    );
});

/**
 * Fetch event - implement caching strategies
 */
self.addEventListener('fetch', (event) => {
    const { request } = event;
    const url = new URL(request.url);

    // Skip non-GET requests
    if (request.method !== 'GET') {
        return;
    }

    // Skip external resources outside our domain (except API endpoints)
    if (!url.origin.includes(self.location.origin) && !API_ENDPOINTS.some(endpoint => url.href.includes(endpoint))) {
        return;
    }

    // API requests - Network First, fallback to cache
    if (API_ENDPOINTS.some(endpoint => url.href.includes(endpoint))) {
        event.respondWith(networkFirstStrategy(request, API_CACHE, CACHE_EXPIRATION.api));
        return;
    }

    // CSS/JS assets - Stale While Revalidate for best performance
    if (url.pathname.endsWith('.css') || url.pathname.endsWith('.js')) {
        event.respondWith(staleWhileRevalidateStrategy(request, STATIC_CACHE));
        return;
    }

    // Fonts and images - Cache First (long-lived)
    if (url.pathname.match(/\.(woff2?|ttf|eot|png|jpg|jpeg|gif|svg|webp|ico)$/)) {
        event.respondWith(cacheFirstStrategy(request, STATIC_CACHE, CACHE_EXPIRATION.static));
        return;
    }

    // HTML pages - Network First with offline fallback
    if (request.headers.get('Accept').includes('text/html')) {
        event.respondWith(networkFirstWithOfflineFallback(request, DYNAMIC_CACHE));
        return;
    }

    // Dynamic content - Network First
    event.respondWith(networkFirstStrategy(request, DYNAMIC_CACHE, CACHE_EXPIRATION.dynamic));
});

/**
 * Check if cached response has expired
 */
function isCacheExpired(cachedResponse, maxAge) {
    if (!cachedResponse) return true;

    const cachedDate = cachedResponse.headers.get('date');
    if (!cachedDate) return false;

    const age = Date.now() - new Date(cachedDate).getTime();
    return age > maxAge;
}

/**
 * Cache First Strategy with expiration
 * Try cache first, fallback to network
 */
async function cacheFirstStrategy(request, cacheName, maxAge = null) {
    try {
        const cachedResponse = await caches.match(request);

        // Return cache if valid and not expired
        if (cachedResponse && (!maxAge || !isCacheExpired(cachedResponse, maxAge))) {
            return cachedResponse;
        }

        // Fetch from network
        const networkResponse = await fetch(request);
        if (networkResponse.ok) {
            const cache = await caches.open(cacheName);
            cache.put(request, networkResponse.clone());
        }
        return networkResponse;
    } catch (error) {
        // Return stale cache if network fails
        const cachedResponse = await caches.match(request);
        if (cachedResponse) {
            console.log('[SW] Serving stale cache for:', request.url);
            return cachedResponse;
        }
        console.error('[SW] Cache first strategy failed:', error);
        return new Response('Offline', { status: 503, statusText: 'Service Unavailable' });
    }
}

/**
 * Network First Strategy with expiration
 * Try network first, fallback to cache
 */
async function networkFirstStrategy(request, cacheName, maxAge = null) {
    try {
        const networkResponse = await fetch(request);
        if (networkResponse.ok) {
            const cache = await caches.open(cacheName);
            // Clone response and add timestamp
            const responseToCache = networkResponse.clone();
            cache.put(request, responseToCache);
        }
        return networkResponse;
    } catch (error) {
        const cachedResponse = await caches.match(request);

        // Return cache even if expired when offline
        if (cachedResponse) {
            console.log('[SW] Network failed, serving cached response for:', request.url);
            return cachedResponse;
        }
        return new Response('Offline', { status: 503, statusText: 'Service Unavailable' });
    }
}

/**
 * Stale While Revalidate Strategy
 * Return cache immediately, update cache in background
 */
async function staleWhileRevalidateStrategy(request, cacheName) {
    const cache = await caches.open(cacheName);
    const cachedResponse = await cache.match(request);

    // Fetch from network and update cache in background
    const fetchPromise = fetch(request).then((networkResponse) => {
        if (networkResponse.ok) {
            cache.put(request, networkResponse.clone());
        }
        return networkResponse;
    }).catch(() => {
        // Silently fail background update
        return null;
    });

    // Return cached response immediately if available
    return cachedResponse || fetchPromise;
}

/**
 * Network First with Offline Fallback
 * Try network, fallback to cache, then offline page
 */
async function networkFirstWithOfflineFallback(request, cacheName) {
    try {
        const networkResponse = await fetch(request);
        if (networkResponse.ok) {
            const cache = await caches.open(cacheName);
            cache.put(request, networkResponse.clone());
        }
        return networkResponse;
    } catch (error) {
        const cachedResponse = await caches.match(request);
        if (cachedResponse) {
            return cachedResponse;
        }

        // Fallback to offline page
        const offlinePage = await caches.match('/offline.html');
        if (offlinePage) {
            return offlinePage;
        }

        return new Response('Offline - Please check your connection', {
            status: 503,
            statusText: 'Service Unavailable',
            headers: { 'Content-Type': 'text/plain' }
        });
    }
}

/**
 * Message event - handle cache updates
 */
self.addEventListener('message', (event) => {
    if (event.data && event.data.type === 'SKIP_WAITING') {
        self.skipWaiting();
    }

    if (event.data && event.data.type === 'CLEAR_CACHE') {
        event.waitUntil(
            caches.keys().then((cacheNames) => {
                return Promise.all(
                    cacheNames.map((name) => caches.delete(name))
                );
            })
        );
    }
});
