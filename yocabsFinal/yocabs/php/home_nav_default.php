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
<!-- 
      <li class="nav-item">
        <a class="nav-link" href="profile.php"><i class="fas fa-user"></i><strong> PROFILE</strong></a>
      </li> -->
<!-- 
       <li class="nav-item">
        <a class="nav-link" href="booking.php"><i class="fas fa-car"></i><strong> BOOK CAB</strong></a>
      </li> -->

       <li class="nav-item">
        <a class="nav-link" href="aboutUs.php"><i class="fas fa-globe"></i><strong> ABOUT US</strong></a>
      </li>
       <li class="nav-item ">
        <a class="nav-link " href="review.php"><i class="fas fa-globe"></i><strong> REVIEW </strong><span class="sr-only">(current)</span></a>
      </li>
      
    </ul>

    <form class="form-inline" action="login.php" method="post">

  <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fas fa-user"></i></div>
    </div>
    <input type="email" class="form-control" id="inlineFormInputGroupUsername2" name="email" placeholder="email" required>
  </div>

  <label class="sr-only" for="inlineFormInputName2">Password</label>
   <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fas fa-key"></i></div>
    </div>
  <input type="Password" class="form-control " name="password" id="inlineFormInputName2" placeholder="Password">
 </div>

 
<div class="row">
  <button type="submit" name="submit" class="btn btn-primary mb-2" style="margin-left:13px;">Login</button>
  </form>
  <button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="margin-left:8px; margin-right:5px;">Sign Up</button>

   </div> 
  </div>
</nav>



