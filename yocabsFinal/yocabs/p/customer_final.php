<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="logo3.png" type="image/gif" sizes="16x16">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Yo cabs-Customer</title>

   <style type="text/css">

    body{

      background-image: url("img1.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      opacity: 0.85;
    }
        #map {
        height:600px;
        width: 550px;
      }
      /* Optional: Makes the sample page fill the window. */
      .gps {
        height: 100%;
        margin: 0;
        padding: 0;
      }
     .maincard{
      margin: 50px;

     }

     .card-title{
      font-style: italic;
      text-decoration: underline;
     }

     p{
      font-weight: bold;
      font-size: 20px;
      font-family: lato;
     }

     .mybtn{
      border-radius: 0;
     }



   </style>

  </head>
  <body>
<?php
session_start();
include 'php/dbh.inc.php';

?>
    <div class="card maincard">
  <div class="card-body">
    



   <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Driver's Details</h5>
        <br>
        <?php echo $trip_time;
        ?>
        <p><img src="<?php echo $driver_image;?>" width="100" height="100" class="d-block " style="margin: auto;" ></p>
        <p>Driver Name : <?php echo $driver_name;?></p>
        <p>Time : <?php echo $y;?></p>
        <p>Fare : <?php echo $fare1;?></p>
        <p>Car number : <?php echo $x;?></p>
        <br>
        <button type="button" class="btn btn-primary btn-lg btn-block mybtn">Contact Driver(<?php echo $driver_contact_number;?>)</button>
        <a href="php/idid.php" type="button" class="btn btn-danger btn-lg btn-block mybtn">Cancel Ride</a>
      </div>
    </div>
  </div>


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
       <!-- Maps Goes Here-->
     <div id="map" class="gps"></div>

      </div>
    </div>
  </div>
</div>

 <div class="card" style="margin-top: 20px; font-style: italic;">
      <div class="card-body">
        
        <p style="font-size: 24px;"><img src="logo3.png" width="90" height="90" class="d-inline-block "><u class="float-right" >Welcome .. <?php echo $name;?></u></p><br>
        <p>We Hope You will get your ride Fast.</p>

        <p>We Welcome all of your Feedbacks which help us to become better..</p>

        <a href="home1.php" type="button" class="btn btn-primary float-right"  data-toggle="tooltip" data-placement="bottom" title="This will not Cancel your Ride">Back to Home</a>

        <p>Thank You</p>

       
      </div>



  </div>
</div>

<script type="text/javascript">
  
$("#backhome").hover(function(){

alert("This will not Cancel Your Ride");

});


</script>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  
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
     <script>
        var timer = setTimeout(function() {
            window.location='customer_final.php'
        }, 15000);
    </script> 

  </body>
</html>