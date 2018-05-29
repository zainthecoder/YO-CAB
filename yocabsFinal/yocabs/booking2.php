<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


     <link rel="icon" href="logo3.png" type="image/gif" sizes="16x16">

      <!--font awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Animate.css-->

     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">


    <title>Book Cab</title>

    <style type="text/css">
     

     .footicon{
      float: right;
      display: inline-block;
      size: 20px;
      padding-right: 20px;
     }

     .fare{
      width: 50%;
     }

     .form-check{
          margin: 20px;
     }
     .controls{
      display: none;
     }

     #map{
      height: 100%;
      width: 100%;
     }

     


    </style>

  </head>
  <body>

  <!-- NAVBAR STARTS-->

  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="landing.html">
    <img src="logo3.png" width="30" height="30" class="d-inline-block align-top" ><strong> YO CABS</strong></a>
</nav>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item ">
        <a class="nav-link" href="home1.html"><i class="fas fa-home"></i><strong> HOME </strong></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user"></i><strong> PROFILE</strong></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="booking.html"><i class="fas fa-car"></i><strong> BOOK CAB <span class="sr-only">(current)</span></strong></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="aboutUs.html"><i class="fas fa-globe"></i><strong> ABOUT</strong></a>
      </li>

       <li class="nav-item ">
        <a class="nav-link" href="review.html"><i class="fas fa-comments"></i></i><strong> REVIEW </strong></a>
      </li>
      
    </ul>

  
    
  </div>
</nav>

<!-- Navbar Ends -->
    
<?php
  
  include 'php/dbh.inc.php';
  ?>
<!-- <div class="container-fluid" style="background-image:url('back.jpg');height:400px;"> -->


<!--  <form action="php/book_ride.php" method="post"> -->
    <?php
    
      if($bookingid==5400 || $bookingid==null){
        ?>

           <div  id="booking" class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Book Your Ride <img src="logo3.png" class="rounded float-right fadeInDown animated" style="width: 100px; height: 100px;"></h1><br>
   
    <hr>

    <div class="card" style="margin-top: 30px;">
  
  <div class="card-body">
   
   <form action="php/book_ride.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Enter Pickup</label>
      <input type="text" class="form-control" id="pickup" placeholder="Pickup" required name="pickup">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Enter Destination</label>
      <input type="text" class="form-control" id="Destination" placeholder="Destination" required name="destination">
    </div>
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" required name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Pin</label>
      <input type="text" class="form-control" required name="zip" id="inputZip">
    </div>
 
  <!-- <p>Choose Your Ride : </p> -->
  <div class="form-group col-md-4">
      <label for="inputState">Choose Your Ride : </label>
      <select id="inputState" class="form-control" name="type">
        <!-- <option >Choose...</option> -->
        <option selected>Radio Texi</option>
        <option>Sedan</option>
        <option>Hachback</option>
        <option>SUV</option>
        <option>Outstation</option>
      </select>
    </div>
     </div>
    <input type="submit" name="submit" value="submit" class="btn-outline btn-outline-danger"/>
</form>
            


 <!-- <div class="rides">
  <a href=""><img src="cab1.jpg"  class="rounded float-left"></a>
  <a href=""><img src="cab2.jpg"  class="rounded float-left"></a>
  <a href=""><img src="cab3.jpg"  class="rounded float-left"></a>
  <a href=""><img src="cab4.jpg"  class="rounded "></a>
   
 </div> -->

 <!-- <a href="php/book_ride.php"><button type="but ton" class="btn btn-primary" style="margin-top: 50px;">Book Ride</button></a> -->

 </div>
</div>


  </div>
</div>
        <?php
        include 'php/book_ride_map.php';
}
else if($pdone==0){
  // echo "khalid";
  ?>
    <div class="container " style="margin-bottom:30px;">
      <div class="row ">
        <div class="col-md-8 bg-secondary">
          <!-- <div class="label"> -->
            <h4>your payment of <span class="badge badge-warning"><?php echo $fare1;  ?> INR </span>is pending</h4>
          <!-- </div> -->
        </div>
        <a class="col-md-4 border btn bg-success" href="payment.php" style="text-dacoration:none;color:red;">
          <!-- <div class="label"> -->
          
         <span style="margin-top:7px;">Make payment Now!</span> 
            
          <!-- </div> -->
        </a>
      </div>
    </div>


  <?php

}else{

  // header("location customer_final.php");
  ?>
    <script type="text/javascript">

      window.open("customer_final.php","_self");
    </script>

  <?php

}


?>

<!-- Fare Estimater -->

<div class="container">
 <div class="row  ">
  <div class="col sm-6 ">
   <div class="card " style="margin-top: 30px;">

    <div class="card-header"><h4><i class="fas fa-percent"></i>  Fare Estimater</h4> </div>
  
      <div class="card-body">
   
    <form>
   <div class="form-row">
    <div class="form-group col-md-12">
      <label ><i class="fas fa-circle" style="color: green;"></i>  Enter Pickup</label>
      <input type="text" class="form-control" id="txtSource" placeholder="Pickup">
    </div>
    <div class="form-group col-md-12">
      <label ><i class="fas fa-circle" style="color: red;"></i>  Enter Destination</label>
      <input type="text" class="form-control" id="txtDestination" placeholder="Destination">
    </div>

    <div id="mode-selector" class="controls">
      <input type="radio" name="type" id="changemode-walking" checked="checked">
      <label for="changemode-walking">Walking</label>

      <input type="radio" name="type" id="changemode-transit">
      <label for="changemode-transit">Transit</label>

      <input type="radio" name="type" id="changemode-driving">
      <label for="changemode-driving">Driving</label>
    </div>
  </div>
 
  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" checked>
  <label class="form-check-label" for="exampleRadios1"> Radio Cab</label>
</div>
<hr>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" >
  <label class="form-check-label" for="exampleRadios2"> Sedan</label>
</div>
<hr>
<div class="form-check ">
  <input class="form-check-input" type="radio" name="exampleRadios" >
  <label class="form-check-label" for="exampleRadios3"> Hatchback</label>
</div>
<hr>
<div class="form-check ">
  <input class="form-check-input" type="radio" name="exampleRadios" >
  <label class="form-check-label" for="exampleRadios3"> SUV</label>
</div>

  <hr>

  <button type="button" class="btn btn-primary btn-lg btn-block" style="border-radius: 0;" id="calculate" onclick="GetRoute()">Calculate</button>

 
 
 
     </form>
    </div>
   </div>
  </div>
   
   <div class="col-sm-6">
     <div class="card" style="margin-top: 30px;">
      <div class="card-body" style="margin: 0;">
         
        <div id="dvMap" style="width: 480px; height: 550px;"> </div>
 
         
      </div>
    </div>
   </div>

 </div>
</div>

 <!-- Fare Estimater Ends Here -->

 <div class="card" style="margin-top: 30px;">
      <div class="card-body" style="margin: 0;">
         
 <div class="alert alert-success" role="alert" id="dvDistance" style=" margin-top: 10px; font-weight: bold; display: block; font-size: 20px;">Distance: <br>Duration: </div>
         
      </div>
    </div>


  </div>
</div>






    <!-- Footer Starts-->

    <div class="jumbotron jumbotron-fluid" style="background-color: #282C35; color: white;">
  <div class="container">
    <div class="row">
      <diV class="col-md-4">
        <h5>Popular Routes</h5>
      </diV>
        <diV class="col-md-4">
            <div class="list-group">
                <h5>Northern India</h5>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Chandigarh Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Agra Outstation Cabs</a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Jaipur Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Shimla Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Nainital Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Jaipur to Delhi Outstation Cabs </a></p>
            </div>
      </diV>
        <diV class="col-md-4">
            <div class="list-group">
                <h5>South India</h5>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Chandigarh Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Agra Outstation Cabs</a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Jaipur Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Shimla Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Delhi to Nainital Outstation Cabs </a></p>
                <p><a href="#" style="text-decoration: none;"class="text-light">Jaipur to Delhi Outstation Cabs </a></p>
            </div>
      </diV>
     </div>
      <hr>
  </div>
</div>



<div class="last">
 &copy; YO CABS 2018. All Rights Reserved.
  <div class="footicon" style="margin-bottom: 10px;">
    <a href="https://www.facebook.com/profile.php?id=100012159498460"><i style="font-size:28px; margin-right: 10px; " class="fa">&#xf082;</i></a>
    <a href=""><i style="font-size:28px; margin-right: 10px;" class="fa">&#xf099;</i></a>
    <a href=""><i style="font-size:28px;" class="fa">&#xf16d;</i></a>
 </div>

</div>


<!--Footer Ends-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- MAPS-->

  
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1R5QWrqEMfU9qPpah3ufkQmeSWBEVtRo&libraries=places&callback=initMap"
        async defer></script>-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript">



 function initMap() {
        var map = new google.maps.Map(document.getElementById('dvMap'), {
          mapTypeControl: false,
          center: {lat: 28.5621, lng: 77.2841},
          zoom: 13
        });

        new AutocompleteDirectionsHandler(map);
      }


var source, destination;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
google.maps.event.addDomListener(window, 'load', function () {
    new google.maps.places.SearchBox(document.getElementById('txtSource'));
    new google.maps.places.SearchBox(document.getElementById('txtDestination'));
    directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
});
 
function GetRoute() {
    var mumbai = new google.maps.LatLng(18.9750, 72.8258);
    var mapOptions = {
        zoom: 7,
        center: mumbai
    };
    map = new google.maps.Map(document.getElementById('dvMap'), mapOptions);
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('dvPanel'));
 
    //*********DIRECTIONS AND ROUTE**********************//
    source = document.getElementById("txtSource").value;
    destination = document.getElementById("txtDestination").value;
 
    var request = {
        origin: source,
        destination: destination,
        travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        }
    });
 
    //*********DISTANCE AND DURATION**********************//
    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix({
        origins: [source],
        destinations: [destination],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
    }, function (response, status) {
        if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
            var distance = response.rows[0].elements[0].distance.value;
            var duration = response.rows[0].elements[0].duration.value;
            var dvDistance = document.getElementById("dvDistance");
             var dis = distance/1000 ;
             var time = duration/60;

           

           dvDistance.innerHTML = "";
            dvDistance.innerHTML += "Distance: " + dis + " Km" +"<br />";
            dvDistance.innerHTML += "Duration:" + time + " min" + "<br />";

           
            var fare = dis * 6 ;
            

            dvDistance.innerHTML+= "Fare:  Rs " + fare + "/-" ;

            
            
 
        } else {
            alert("Unable to find the distance via road.");
        }
    });
}
</script>
    
    

  </body>
</html>