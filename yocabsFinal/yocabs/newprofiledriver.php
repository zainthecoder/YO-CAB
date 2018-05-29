


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
.myscroll {
    width: 100%;
    height:620px;
    border: 1px dotted black;
    overflow: scroll;
}

      
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

.img_container {
    position: relative;
    text-align: center;
    
}
img{

   opacity: 0.5;
   transition: opacity 1s;

}
img:hover{
  opacity: 1;
}

.img_centered {
    position: absolute;
    color: black;
    top: 80%;
    left: 50%;
    transform: translate(-50%, -50%);
    
.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}
    </style>

  </head>
  <body>

<?php
// session_start();
include 'php/dbhd.inc.php';

?>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="landing.php">
    <img src="logo3.png" width="30" height="30" class="d-inline-block align-top" ><strong> YO CABS</strong></a>
</nav>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item ">
        <a class="nav-link" href="home1.php"><i class="fas fa-home"></i><strong> HOME <span class="sr-only">(current)</span></strong></a>
      </li>


       <li class="nav-item active">
        <a class="nav-link" href="profile.php"><i class="fas fa-user"></i><strong> PROFILE</strong></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="aboutUs.php"><i class="fas fa-globe"></i><strong> ABOUT US</strong></a>
      </li>
      
    </ul>

    <a href="logout.php"><button class="btn btn-outline">Logout</button></a>
    
  </div>
</nav>




<div class="row"  >
  <div class="col-md-5 ">
     <div class="img_container">
     <img src="anas1.jpg" style="width: 100%; height:100%" >
     
      
     
     <div class="img_centered">
       <h2 style=" font-family: sans-serif ;color: white"><?php echo $name;?></h2>
       
     </div> 
     </div>
     <section style="background-color: black">
     <h2 style="text-align: center; color:white; ">Driver</h2>
     </section>
  </div>
  <div class="col-7">
      <div class="myscroll">
       
       <div class="container">
        <h3 style="text-align: center; margin-top: 10px;"><i>Personal Information</i></h3><hr><br><br>
        <ul style="font-style: sans-serif ;">
          
          <li><h4>Name: <?php echo $name;?></h4></li><br>
          <li><h4>Driver ID: <?php echo $driverid;?></h4></li><br>
          <li><h4>Contact No: <?php echo $contact_number;?></h4></li><br>
          <li><h4>Email: <?php echo $email;?></h4></li><br>
          <li><h4>Address: <?php echo $address;?></h4></li><br>
          <li><h4>Balance: <?php echo $balance;?> INR</h4></li><br>
          </ul>
         
          <hr>
       

       </div>
       


      </div>
  </div>
</div>


</body>
</html>