const CACHE_NAME = 'kristen-tech-v1';
const OFFLINE_URL = 'offline.php';

const STATIC_ASSETS = [
    OFFLINE_URL,
    'images/kristen_logo.png',
    'images/favicon.ico'
];

// Install event: cache static assets
self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => {
            return cache.addAll(STATIC_ASSETS);
        })
    );
    self.skipWaiting();
});

// Activate event: clean up old caches
self.addEventListener('activate', (event) => {
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames
                    .filter((name) => name !== CACHE_NAME)
                    .map((name) => caches.delete(name))
            );
        })
    );
    self.clients.claim();
});

// Fetch event: network first, then cache, then offline.php fallback for HTML
self.addEventListener('fetch', (event) => {
    // We only care about navigation requests for the offline fallback
    if (event.request.mode === 'navigate') {
        event.respondWith(
            fetch(event.request).catch(() => {
                // If network fails, return the offline page
                return caches.match(OFFLINE_URL);
            })
        );
    } else {
        // For other requests (images, css), try cache first, then network
        event.respondWith(
            caches.match(event.request).then((response) => {
                return response || fetch(event.request);
            })
        );
    }
});
