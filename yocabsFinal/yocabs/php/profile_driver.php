
<?php
  
  include 'dbhd.inc.php';
  ?>
<div class="container-fluid" style="background-image:url('back.jpg');height:400px;">

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
          <img style="margin-top:25px;" src="<?php echo $my_image;?>" class="rounded-circle" alt="Cinque Terre" width="100%" height="300px"> 

      </div>
    </div>
  </div>
    <div class="jumbotron">
    <div class="row">
        <div class="col-md-4 border" style="margin-top:15px;">
          <h4>RECENT UPDATE</h4>

        </div>
        <div class="col-md-4 border" style="margin-top:15px;">
          <h4>ABOUT</h4>
          <h5><?php echo $name;?></h5>
          <p>Email : <b><?php echo " ".$email?></b></p>
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
  


</div>
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>