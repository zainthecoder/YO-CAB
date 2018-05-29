
<?php
  
  include 'php/dbh.inc.php';
  ?>
<div class="container-fluid" style="background-image:url('back.jpg');height:400px;">

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
          <img style="margin-top:25px;" src="<?php echo $my_image;?>" class="rounded-circle" alt="Cinque Terre" width="100%" height="300px"> 

      </div>
    </div>
  </div>
    <div class="jumbotron" >
    <div class="row">
        <div class="col-md-4 border" style="margin-top:15px;">
          <h4>TO DO</h4>
          <?php

          if($bookingid==5400 ){
            ?>
             <a href="php/transaction_helper.php"><button class="btn btn-warning">First recharge pack</button></a>
             <?php
          }
          else{
            ?>
             <a href="php/money_reciever.php"><button class="btn btn-warning">Earn Money</button></a>
             <?php
          }



          ?>
          <div class="container"style="height:25px;"></div>

          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Know card details</button>
                        <!-- Button to Open the Modal -->
              <!-- <button type="button" class="btn btn-primary" > -->
                <!-- Open modal -->
              </button>

              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Card Details</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                      <?php

                        echo "<h4>CVV:  ".$use1."</h4><hr><h2>CARD NUMBER : ".$card_number."</h2><hr><h2>current Balance : ".$balance." INR</h2>";


                      ?>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>

        </div>
        <div class="col-md-4 border" style="margin-top:15px;">
          <h4>ABOUT</h4>
          <h5><?php echo $name;?></h5>
          <p>Email : <b><?php echo " ".$email?></b></p>
          <p>User ID : <b><?php echo $use1; ?></b></p>
        </div>
        <div class="col-md-4 border" style="margin-top:15px;">
          <h4>Contact</h4>
          <p>Address: <b><?php echo $address;?></b></p>
          <hr>
          <p>call on :<b><?php echo $contact_number;?></b></p>
           <hr>
          <p>Email : <b style="text-dacoration:underline;"><?php echo $email;?></b></p>
        </div>

    </div>


</div>
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
}


?>
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>