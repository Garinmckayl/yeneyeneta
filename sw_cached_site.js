var cacheName = 'YeneYeneta_v1';
self.addEventListener('install', function(e){
   console.log('service worker : installed');
});

self.addEventListener('activate', function(e){
	console.log('service worker : activated');
	e.waitUntil(
      caches.keys().then(function(cacheName){
      	return Promise.all(
           cacheName.map(function(cache){
           	if(cache !== cacheName)
           	{
               console.log('service worker : clearing old cache');
               return caches.delete(cache);
           	}
           })
      	);
      })

	);
});


self.addEventListener('fetch', function(e){
	console.log('service worker : fetching');
	e.respondWith(
       fetch(e.request)
         .then(function(res){
         	var resClone = res.clone();
         	 caches
         	   .open(cacheName)
         	   .then(function(cache){
                 cache.put(e.request, resClone);
         	   });
         	  return res;
         }).catch(function(err){
         	caches.match(e.request).then(function(res){
         		return res;
         	})
         })
		);
});