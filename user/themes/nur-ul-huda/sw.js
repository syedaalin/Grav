const CACHE_NAME = 'hidayat-cache-v1';
const urlsToCache = [
  '/',
  '/user/themes/nur-ul-huda/css/custom.css',
  '/user/themes/nur-ul-huda/js/site.js'
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return cache.addAll(urlsToCache).catch(err => {
          console.warn('Service Worker: Cache addAll failed', err);
          // Continue installation even if caching fails
          return Promise.resolve();
        });
      })
  );
});

self.addEventListener('fetch', event => {
  // Only cache same-origin requests
  if (event.request.url.startsWith(self.location.origin)) {
    event.respondWith(
      caches.match(event.request)
        .then(response => {
          if (response) {
            return response;
          }
          return fetch(event.request).then(fetchResponse => {
            // Cache successful responses
            if (fetchResponse && fetchResponse.status === 200) {
              const responseToCache = fetchResponse.clone();
              caches.open(CACHE_NAME)
                .then(cache => cache.put(event.request, responseToCache))
                .catch(err => console.warn('Cache put failed', err));
            }
            return fetchResponse;
          });
        })
        .catch(err => {
          console.warn('Fetch failed', err);
          return fetch(event.request);
        })
    );
  }
});
