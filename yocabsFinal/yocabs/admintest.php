<?php
session_start();
  // User name and password for authentication
 $username = 'admin';
  $password = 'admin';

  if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password)) {
    
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Yo Cabs"');
    exit('<h2>Yo Cabs</h2>Sorry, you must enter a valid user name and password to access this page');
  }

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   
 

    <title>Yo Cabs</title>

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

   
<!--Animate.css-->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
 <link rel="stylesheet" type="text/css" href="zaincss.css">

 <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">
  <!-- or -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">


    <style type="text/css">
      
      .head{
        height: 500px;
        background-image: url("img1.jpg");
        background-size: cover;
        box-sizing: border-box;
        background-repeat: no-repeat;
        background-position: center center;
        margin-bottom: 30px;
        

      }

      .head h1{
        padding-top: 30px;
        padding-left: 10px;
        display: inline-block;
        color: white;
      }

      .head p{
        font-size: 28px;
        padding-left: 13px;
        color: white;
        
      }

      .location{
        margin-right: 30px;
        margin-top: 30px;
        display: inline-block;

      }

      .logo{
        margin-top: 15px;
        margin-bottom: 15px;

      }


     .footicon{
      float: right;
      display: inline-block;
      size: 20px;
      padding-right: 20px;
     }

   .transition{
       -webkit-transition: width 5s,height 5s;
       transition: width 5s,height 5s;

   }
 
     .transition:hover{
        width:60px;
        height:60px;
     }

     /* Grow */
.hvr-grow {
    display: inline-block;
    vertical-align: middle;
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    backface-visibility: hidden;
    -moz-osx-font-smoothing: grayscale;
    transition-duration: 0.3s;
    transition-property: transform;
}

.hvr-grow:hover,
.hvr-grow:focus,
.hvr-grow:active {
    transform: scale(1.1);
}

    </style>

  </head>
  <body >

 <?php

   include 'php/home_nav_admin.php';
   
   ?>


   <?php

  
    $dbc= mysqli_connect('localhost','root','','yocab')
or die('error connecting to the server');


$query="select * from customer";

 $result= mysqli_query($dbc,$query)
 or die('error querying database');

echo '<div class="container" style=" margin-top:10px; margin-left:12%">';
echo '<h2 style="text-align:center;">Customer Info</h2><br><hr>';
echo ' <div class="row">';

while($row=mysqli_fetch_array($result))
{
       ?> 

 <div class="col-4" style="margin-top:25px;">
<div class="card hvr-grow " style="width: 18rem; background-color: #e3e0e0">
  <img class="card-img-top" src="<?php echo $row['image'] ?>" alt="Card image cap" style="width: 150px; height: 150px; border-radius:40% ; margin-top: 10px; margin-left: 70px" >
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name']  ?></h5>
    <p class="card-text"><b>UserId: </b><?php echo $row['userid'] ?></p>
    <p class="card-text"><b>Email: </b><?php echo $row['email'] ?></p>
    <p class="card-text"><b>Contact: </b><?php echo $row['contact_number'] ?></p>
    
 </div> 
</div>
</div>

<?php 
    
    }
?>



</div>
<div>

<?php
$query="select * from driver";

 $result= mysqli_query($dbc,$query)
 or die('error querying database');

echo '<div class="container" style=" margin-top:10px; ">';
echo '<h2 style="text-align:center;">Driver Info</h2><br><hr>';
echo ' <div class="row">';

while($row=mysqli_fetch_array($result))
{
       ?> 

 <div class="col-4" style="margin-top:25px;">
<div class="card hvr-grow " style="width: 18rem; background-color: #e3e0e0">
  <img class="card-img-top" src="<?php echo $row['image'] ?>" alt="Card image cap" style="width: 150px; height: 150px; border-radius:40% ; margin-top: 10px; margin-left: 70px" >
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name']  ?></h5>
    <p class="card-text"><b>UserId: </b><?php echo $row['driverid'] ?></p>
    <p class="card-text"><b>Email: </b><?php echo $row['email'] ?></p>
    <p class="card-text"><b>Contact: </b><?php echo $row['contact_number'] ?></p>
    
 </div> 
</div>
</div>

<?php 
    }
?>



</div>


<div>

<?php
$query="select * from car";

 $result= mysqli_query($dbc,$query)
 or die('error querying database');

echo '<div class="container" style=" margin-top:10px; ">';
echo '<h2 style="text-align:center;">Car Info</h2><br><hr>';
echo ' <div class="row">';

while($row=mysqli_fetch_array($result))
{
       ?> 

 <div class="col-4" style="margin-top:25px;">
<div class="card hvr-grow " style="width: 18rem; background-color: #e3e0e0">
  <!-- <img class="card-img-top" src="<?php echo $row['image'] ?>" alt="Card image cap" style="width: 150px; height: 150px; border-radius:40% ; margin-top: 10px; margin-left: 70px" > -->
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['car_number']  ?></h5>
    <p class="card-text"><b>Car Type: </b><?php echo $row['type'] ?></p>
    <p class="card-text"><b>Fuel Type: </b><?php echo $row['fuel'] ?></p>
    <?php
    if($row['bookingid']>0){
      ?>
       <p class="card-text"><b>Status: </b>Booked</p>


      <?php
  }else{
       ?>
       <p class="card-text"><b>Status: </b>Free</p>


      <?php
  }

  ?>
    
 </div> 
</div>
</div>

<?php 
    }
?>



</div>

<div>

<?php
$query="select * from payment_card";

 $result= mysqli_query($dbc,$query)
 or die('error querying database');

echo '<div class="container" style=" margin-top:10px; ">';
echo '<h2 style="text-align:center;">All payment info</h2><br><hr>';
echo ' <div class="row">';

while($row=mysqli_fetch_array($result))
{
       ?> 

 <div class="col-4" style="margin-top:25px;">
<div class="card hvr-grow " style="width: 18rem; background-color: #e3e0e0">
  <!-- <img class="card-img-top" src="<?php echo $row['image'] ?>" alt="Card image cap" style="width: 150px; height: 150px; border-radius:40% ; margin-top: 10px; margin-left: 70px" > -->
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['card_number']  ?></h5>
    <p class="card-text"><b>CVV: </b><?php echo $row['paymentid'] ?></p>
    <p class="card-text"><b>Expiry Date: </b><?php echo $row['exp_date'] ?></p>
    <p class="card-text"><b>Balance: </b><?php echo $row['balance'] ?></p>
    
    
 </div> 
</div>
</div>

<?php 
    }
?>



</div>
<div>









<!--Footer Ends-->

   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   

  </body>
</html>