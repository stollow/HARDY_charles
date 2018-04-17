if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('sw.js').then(function(registration) {
      // Registration was successful
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
      var CACHE_NAME = 'my-site-cache-v1';
		var urlsToCache = [
  		'/',
  		'/css/style.css',
  		'/css/max-768pxLandScape.css',
  		'/css/max-576pxLandScape.css',
  		'/css/max-768px.css',
  		'/css/max-576px.css',
  		'/css/mention.css',
 		'/script/Jquery.js',
 		'/odometer/odometer.js',
 		'/images/car1.jpg',
 		'/images/car2.jpg',
 		'/images/car3.jpg',
 		'/images/fondWork.jpeg'
		];

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});
    }, function(err) {
      // registration failed :(
      console.log('ServiceWorker registration failed: ', err);
    });
  });
}