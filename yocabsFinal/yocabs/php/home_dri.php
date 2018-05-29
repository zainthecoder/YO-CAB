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

   
<!--Animate.css-->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 

    <title>Yo Cabs-driver</title>

    <style type="text/css">
      
      .head{
        height: 550px;
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

      .head_p{
        font-size: 28px;
        padding-left: 13px;
        color: white;
        
      }

      .location{
        margin-left: 450px;
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

     .nav_p{

     
      font-size: 25px;
      color: white;
      margin-top: 5px;
      font-style: italic;
     }

     .nav_p span{
           text-decoration: underline;
     }

     .mybtn{
      
      margin-left: 15px;
      height: 40px;
      font-weight: bold;

     }

     .detail{
      font-weight: bold;
      border-radius: 0;
     }



     

     

    </style>

  </head>
  <body >
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="landing.php" >
    <img src="logo3.png" width="30" height="30" class="d-inline-block align-top" ><strong> YO CABS</strong></a>
</nav>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" id="pass" href="home1.php "><i class="fas fa-home"></i><strong> HOME <span class="sr-only">(current)</span></strong></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="profile.php"><i class="fas fa-user"></i><strong> PROFILE</strong></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="aboutUs.php"><i class="fas fa-globe"></i><strong> ABOUT</strong></a>
      </li>

       <!-- <li class="nav-item ">
        <a class="nav-link" href="review.php"><i class="fas fa-comments"></i><strong> REVIEW </strong></a>
      </li> -->
      
    </ul>
    <p class="nav_p"> <a href="<?php echo $_SESSION['img'];?>" target="_blank"><img src="<?php echo $_SESSION['img'];?>" style="height:75px;width:75px;" class="rounded-circle"/></a><strong style=" font-family: lato;">  Hello..  </strong><span><?php echo $_SESSION['name'];?></span>
     <a href="logout.php"><button type="button" class="btn btn-danger mybtn">Log Out</button></a></p>
  
   

  </div>
</nav>

<?php

 include 'dbhd.inc.php';

?>

 <div class="head">
   
   <h1 class="fadeInUp animated d-md-none d-lg-block d-sm-none d-none">Reliable. Safe. Transparent.</h1>
   <p class="fadeInUp head_p animated d-md-none d-lg-block d-sm-none d-none">Your Trusted Ride for Every Occasion</p>
   <?php
   if($book==null){

?>
    <figure class="figure location fadeIn animated  ">

   <div class="card " style="width: 25rem;">
    <div class="card-header">
      <h5>No Job</h5>
    </div>
      <div class="card-body">
  
    <div>We are serching Job for You</div>

 
  
   
  </div>
</div>
</figure>
<?php
 }else{

?>
  <figure class="figure location fadeIn animated  ">

   <div class="card " style="width: 25rem;">
    <div class="card-header">
      <h5> Your Current Customer </h5>
    </div>
      <div class="card-body">
  
    <p ><img class="rounded-circle" src="<?php echo $client_image;?>" style="height:75px;width:75px;" class="d-inline-block align-top" ><strong style="color: black; font-size: 22px;"> <?php echo $client_name;?></strong></p>
    
    <div class="detail">
    <p style ="color: black;font-size:15px;">Time And Date: <?php echo $trip_time?></p>
    <p style ="color: black;font-size:15px;">Contact Number:  <?php echo $client_contact_number;?> </p>
    <a href="driver_final.php"><button type="button" class="btn btn-primary btn-lg btn-block">Start Ride</button></a>
  </div>

 
  
   
  </div>
</div>
</figure>
<?php
}

?>

 </div>



<!-- Footer starts-->

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
    <a href="https://www.facebook.com/profile.php?id=100012159498460" target="_blank"><i style="font-size:28px; margin-right: 10px; " class="fa">&#xf082;</i></a>
    <a href=""><i style="font-size:28px; margin-right: 10px;" class="fa">&#xf099;</i></a>
    <a href=""><i style="font-size:28px;" class="fa">&#xf16d;</i></a>
 </div>

</div>

 

<!--Footer Ends-->

   <script type="text/javascript">
    
     $("#pass").fadeIn();
   

   </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



   

  </body>
</html>