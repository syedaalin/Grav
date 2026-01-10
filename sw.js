const CACHE_NAME = 'sanctum-v1';
const ASSETS = [
  '/',
  '/user/themes/nur-e-hidayat/css/theme.css',
  '/user/themes/nur-e-hidayat/js/main.js'
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => cache.addAll(ASSETS))
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(response => {
      return response || fetch(event.request);
    })
  );
});
