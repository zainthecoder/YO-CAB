<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="logo3.png" type="image/gif" sizes="16x16">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Yo cabs-Driver</title>

   <style type="text/css">

    body{

      background-image: url("img1.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      opacity: 0.85;
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

     .btn{
      border-radius: 0;
     }

     .mydiv {
    background-color: white;
    width: 700px;
    height: 300px;
    border: 1px dotted black;
    overflow: scroll;
    padding-left: 20px;
    margin-left: 60px;
    border-style: solid;
}



   </style>

  </head>
  <body>

    <div class="card maincard">
  <div class="card-body">
    



   <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Customer Details</h5>
        <br>
        <p><img src="logo3.png" width="100" height="100" class="d-block " style="margin: auto;" ></p>
        <p>Customer Name : </p>
        <p>Time : </p>
        <p>Date : </p>
        <p>Fare : </p>
        <br>
        <button type="button" class="btn btn-primary btn-lg btn-block">Contact Customer</button>
        <button type="button" class="btn btn-danger btn-lg btn-block">Cancel Ride</button>
      </div>
    </div>
  </div>


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
       <!-- Maps Goes Here-->
       <div id="dvMap" style="width: 480px; height: 490px;"> </div>
      </div>
    </div>
  </div>
</div>

 
    <div class="card" style="margin-top: 10px;">
      <div class="card-body">
       <!-- navigation Goes Here-->
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
  </form>

 <button type="button" class="btn btn-primary" value="Get Route" onclick="GetRoute()" id="calculate" style="height: 50px; width: 200px;">Check Navigation </button>

       <div class="mydiv">
       <div id="dvPanel" style="width: 500px; height: 500px; margin-top: 10px;"></div>
    </div>

    </div>
    
  </div>

</div>




  </div>
</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1R5QWrqEMfU9qPpah3ufkQmeSWBEVtRo&libraries=places&callback=initMap"
        async defer></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script> -->
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
            var distance = response.rows[0].elements[0].distance;
            var duration = response.rows[0].elements[0].duration;
            var dvDistance = document.getElementById("dvDistance");
           dvDistance.innerHTML = "";
            dvDistance.innerHTML += "Distance: " + distance + "<br />";
            dvDistance.innerHTML += "Duration:" + duration + "<br />";

             distance=to_float(distance);  
            var fare = distance*6; 
            

            dvDistance.innerHTML+= "Fare:  Rs " + fare + "/-" ;

            
            
 
        } else {
            alert("Unable to find the distance via road.");
        }
    });
}
</script>
  </body>
</html>