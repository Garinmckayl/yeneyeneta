    <script>   
    if('serviceWorker' in navigator){
      window.addEventListener('load', function(){
        navigator.serviceWorker
          .register('sw_cached_site.js')
          .then(function(reg){
            console.log('service worker : registered');
          })
          .catch(function(err){
            console.log('service worker error'+err)
          });
      });
    }
  </script>