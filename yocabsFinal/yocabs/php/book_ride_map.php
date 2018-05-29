

<div class="container" style="margin-bottom:25px;">
 <div class="row  ">
  <?php
  if(isset($_SESSION['y'])){?>
  <div class="container">
      <h1>Your Last estimated fare is :<?php echo $_SESSION['y'];?> INR @ <?php echo $_SESSION['IestimatedFarePer'];?> per Kilometer</h1>
      
  </div>
  <?php
}
  ?>
  <div class="col sm-6 ">
   <div class="card " style="margin-top: 30px;">

    <div class="card-header"><h4><i class="fas fa-percent"></i>  Fare Estimater</h4> </div>
  
      <div class="card-body">
   
    <form action="ccc.php" method="post">
   <div class="form-row">
    <div class="form-group col-md-12">
      <label ><i class="fas fa-circle" style="color: green;"></i>  Enter Pickup</label>
      <input type="text" class="form-control" id="origin-input" placeholder="Pickup" name="khalid">
    </div>
    <div class="form-group col-md-12">
      <label ><i class="fas fa-circle" style="color: red;"></i>  Enter Destination</label>
      <input type="text" class="form-control" id="destination-input" placeholder="Destination" name="khalid2">
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

  <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" style="border-radius: 0;">Calculate</button>
 
 
     </form>
    </div>
   </div>
  </div>
   
   <div class="col-sm-6">
     <div class="card" style="margin-top: 30px;">
      <div class="card-body" style="margin: 0;">
         
        <div id="map" style="width: 480px; height: 550px;"> </div>
 
         
      </div>
    </div>
   </div>

 </div>
</div>

 <!-- Fare Estimater Ends Here -->

  </div>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- MAPS-->
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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1R5QWrqEMfU9qPpah3ufkQmeSWBEVtRo&libraries=places&callback=initMap"
        async defer></script>


    <script type="text/javascript">
      
       function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          mapTypeControl: false,
          center: {lat: 28.5621, lng: 77.2841},
          zoom: 13
        });

        new AutocompleteDirectionsHandler(map);
      }

      function AutocompleteDirectionsHandler(map) {
        this.map = map;
        this.originPlaceId = null;
        this.destinationPlaceId = null;
        this.travelMode = 'TRANSIT';
        var originInput = document.getElementById('origin-input');
        var destinationInput = document.getElementById('destination-input');
        var modeSelector = document.getElementById('mode-selector');
        this.directionsService = new google.maps.DirectionsService;
        this.directionsDisplay = new google.maps.DirectionsRenderer;
        this.directionsDisplay.setMap(map);

        var originAutocomplete = new google.maps.places.Autocomplete(
            originInput, {placeIdOnly: true});
        var destinationAutocomplete = new google.maps.places.Autocomplete(
            destinationInput, {placeIdOnly: true});

        this.setupClickListener('changemode-walking', 'WALKING');
        this.setupClickListener('changemode-transit', 'TRANSIT');
        this.setupClickListener('changemode-driving', 'DRIVING');

        this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
        this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

     /* this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);*/
      }

      // Sets a listener on a radio button to change the filter type on Places
      // Autocomplete.
      AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
        var radioButton = document.getElementById(id);
        var me = this;
        radioButton.addEventListener('click', function() {
          me.travelMode = mode;
          me.route();
        });
      };

      AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
        var me = this;
        autocomplete.bindTo('bounds', this.map);
        autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          if (!place.place_id) {
            window.alert("Please select an option from the dropdown list.");
            return;
          }

          if (mode === 'ORIG') {
            me.originPlaceId = place.place_id;
          } else {
            me.destinationPlaceId = place.place_id;
          }
          me.route();
        });

      };

      AutocompleteDirectionsHandler.prototype.route = function() {
        if (!this.originPlaceId || !this.destinationPlaceId) {
          return;
        }
        var me = this;

        this.directionsService.route({
          origin: {'placeId': this.originPlaceId},
          destination: {'placeId': this.destinationPlaceId},
          travelMode: this.travelMode
        }, function(response, status) {
          if (status === 'OK') {
            me.directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };



    </script>

   

    
    

  </body>
</html>