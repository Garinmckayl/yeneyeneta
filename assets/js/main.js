
// if('serviceWorker' in navigator){
//   window.addEventListener('load', function(){
//     navigator.serviceWorker
//       .register(<?php echo base_url() ?>'sw_cached_site.js')
//       .then(function(reg){
//         console.log('service worker : registered');
//       })
//       .catch(function(err){
//         console.log('service worker error'+err)
//       });
//   });
// }


        var browserWindow = $(window);

    // :: 1.0 Preloader Active Code
    browserWindow.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
            // to hide answer collapse first
            $("#fixed-bottom-answer").hide();
        });
    });
// toggle the answer when the btn clicked
$("#answer-btn").click(function (){
   $("#fixed-bottom-answer").fadeToggle(800);
});


        $('#search-nav').on("focus", function() {
            $('body').removeClass('bg-light');
            $('body').addClass('fadebody');
        });

      // simple client side validation
      
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
   

     //   smoth scrolling
     
    $(function() {
        // Smooth Scrolling
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });

        $('.links').click(function() {
            $('.navbar-collapse').collapse('hide');
        });

        $('body').scrollspy({
            target: '#main-nav',
            offset: 54
        });

    });



   //  for popover...
 

       (function($) {
  "use strict"; // Start of use strict

  // Scroll to top button appear
  $(document).scroll(function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
        
  });



 // Init popover
   $('[data-toggle="popover"]').popover();



})(jQuery); // End of use strict

 
function O(obj)
{
 if (typeof obj == 'object') return obj
 else return document.getElementById(obj)
}
function S(obj)
{
 return O(obj).style
}
function C(name)
{
 var elements = document.getElementsByTagName('*')
 var objects = []
 for (var i = 0 ; i < elements.length ; ++i)
 if (elements[i].className == name)
 objects.push(elements[i])
 return objects
}


//    ajax follow unfollow



function follow(userid)
 {
 if (userid.value == '')
 {
 O('info').innerHTML = ''
 return
 } O('info').innerHTML = 'unfollow';
 params = "userid=" + userid
 request = new ajaxRequest()
 request.open("POST", "follow", true)
 request.setRequestHeader("Content-type",
 "application/x-www-form-urlencoded")
 request.setRequestHeader("Content-length", params.length)
 request.setRequestHeader("Connection", "close")
 request.onreadystatechange = function()
 {
 if (this.readyState == 4)
 if (this.status == 200)
 if (this.responseText != null)
 O('info').innerHTML = this.responseText
 }
 request.send(params)
 }
 function ajaxRequest()
 {
 try { var request = new XMLHttpRequest() }
 catch(e1) {
 try { request = new ActiveXObject("Msxml2.XMLHTTP") }
 catch(e2) {
 try { request = new ActiveXObject("Microsoft.XMLHTTP") }
 catch(e3) {
 request = false
 } } }
  return request
 }




 
