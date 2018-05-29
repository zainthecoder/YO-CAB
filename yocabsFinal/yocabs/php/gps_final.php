



<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">


    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>

    
    <div id="map"></div>
    <script>
         
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        
        map = new google.maps.Map(document.getElementById('map'), {
          
          zoom: 10,
          center: {lat: -34.397, lng: 150.644}
        });
              
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
             
           
     
           // infoWindow.setPosition(pos);
           // infoWindow.setContent('Location found.');
            var marker = new google.maps.Marker({
             animation: google.maps.Animation.DROP,
             label: 'car',
              map: map,
              position: pos
            });
           
          
          
          new google.maps.Marker({
             animation: google.maps.Animation.DROP,
             label: 'destination',
              map: map,
              position:{ lat:28.535516, lng: 77.391026 }
            });

         

            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }
      
        


      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
   

      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD44GGodd6BMDkmbmPC4oX4A73JwAiaS1I&callback=initMap">
    </script>
 <!--    <script>
        var timer = setTimeout(function() {
            window.location='javascript.php'
        }, 40000);
    </script> -->


  </body>
</html>