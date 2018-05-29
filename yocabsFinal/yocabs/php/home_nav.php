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

      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-home"></i><strong> HOME <span class="sr-only">(current)</span></strong></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="profile.php"><i class="fas fa-user"></i><strong> PROFILE</strong></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="booking.php"><i class="fas fa-car"></i><strong> BOOK CAB</strong></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="aboutUs.php"><i class="fas fa-globe"></i><strong> ABOUT US</strong></a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="review.php"><i class="fas fa-globe"></i><strong> REVIEW </strong><span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <? session_start();?>
    <span class="text-primary " style="font-size:25px;"><i>hello <?php echo $_SESSION['name'];?>!</i></span>
    <a href="<?php echo $_SESSION['img'];?>" target="_blank"><img src="<?php echo $_SESSION['img'];?>" style="height:75px;width:75px;" class="rounded-circle"/></a>
    <a href="logout.php"><button class="btn btn-outline">Logout</button></a>
    
  </div>
</nav>



