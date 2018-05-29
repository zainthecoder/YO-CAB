
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
        <option>Delhi</option>
         <option>Uttar Pradesh</option>
          <option>Haryana</option>
           <option>Gujurat</option>
            <option>Kerela</option>
             <option>Tamil Nadu</option>
              <option>Bihar</option>
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

        <div id="fareEst">
        <?php


        include 'php/book_ride_map.php';
        ?>
        </div>
        <?php
}
else if($pdone==0){
  // echo "khalid";
  ?>
    <div class="container " style="margin-top:50px; margin-left:400px;">
      <div class="row " style="margin:50px; height:100px; width: 100%;" >
        <div class="col-md-4 bg-secondary ">
          <!-- <div class="label"> -->
            <h4 style="color:white;">your payment of <span class="badge badge-warning"><?php echo $fare1;  ?> INR </span> is pending</h4>
          <!-- </div> -->
        </div>
      </div>

      <div class="row" style="margin:50px;height:100px;">
        <a class="col-md-4 border btn " href="payment.php" style="text-dacoration:none;color:red;">
          <!-- <div class="label"> -->
          
         <h3><span style="margin-top:7px; ">Make payment 123Now!</span> </h3>
            
          <!-- </div> -->
        </a>
      </div>

      <div class="row" style="margin:50px; height:100px;">

         <a class="col-md-4 border btn " href="php/idid.php" style="text-dacoration:none;color:red;">
          <!-- <div class="label"> -->
          
         <h3><span style="margin-top:7px;">cancel ride</span> </h3>
            
          <!-- </div> -->
        </a>
      </div>
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
    

       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>