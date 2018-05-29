
<div class="head">
   
   <h1 class="fadeInUp animated">Reliable. Safe. Transparent.</h1>
     <div class="card  float-right location fadeIn animated" style="width: 25rem;">
    <div class="card-header">
      <h5> TAKE RIDE </h5>
    </div>
      <div class="card-body">
    
        <form>
  <div class="form-group">
    
    <input  class="form-control"  aria-describedby="emailHelp" placeholder="Enter Pick Location">
    
  </div>
  <div class="form-group">

    <input  class="form-control" id="exampleInputPassword1" placeholder="Enter Drop Location">
  </div>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2"> NOW</label>
  </div>

   <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2"> LATER</label>
  </div>
  
 
  <button type="submit" class="btn btn-primary float-right" style="margin-bottom: 10px; font-size: 15px;">Book Ride</button>
</form>
   
  </div>
</div> -->

<p class="fadeInUp animated">Your Trusted Ride for Every Occasion</p>

 </div> 


<!-- 
 <img src="logo.jpg" class="img-fluid " >

 <img src="cars.jpg" class="img-fluid logo" > -->

 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img5.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img4.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img6.jpg" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="img7.jpg" alt="Third slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="img8.jpg" alt="Third slide">
    </div>
  </div>
  <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span> </a> -->
</div>

 <div class="jumbotron jumbotron-fluid">
  <div class="container">
   <div class="row">
  <div class="col-sm-6">


    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-thumbs-up"></i>   BE A COSTUMER</h5>
        <p class="card-text">Yo Cabs gives you best service with best hands on the wheels.<br>Ride with us and Enjoy the best cab service in the town</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Sign Up</button>   
<!-- Modal 1-->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div>
          


          </div>
        <!-- Sign up page-->

        <form action="php/customer.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4"  reuired name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" requied name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">FULL NAME</label>
    <input type="text" class="form-control" id="inputAddress"  requied placeholder="Bucky Roberts" name="name"/>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" requied  placeholder="Apartment, studio, or floor" name="add2">
  </div>

  <div class="form-group">
    <label for="inputAddress">Phone Number</label>
    <input type="text" class="form-control" id="inputAddress" requied  name="phone">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity"  requied name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" requied  name="state">
        <option selected>Choose...</option>
        <option>up</option>
          <option>mp</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" name="zip">
    </div>
    <div class="form-group col-md-12">
      <label for="inputZip">image</label>
      <input type="file" class="form-control" id="inputZip" name="image">
    </div>
  </div>
        <!--
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">Remember me </label>
    </div>
  </div>-->

  <!-- Sign up page end -->


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" type="submit"  name="submit1">Sign Up</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!--Modal 1 End-->
      </div>
    </div>
  </div>


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i style="font-size:24px" class="fa">&#xf1ba;</i>   BE A DRIVER</h5>
        <p class="card-text">We give our best to costumers so we want the best.<br>Join us and be a part of most trusted and relaible cab service</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">Sign Up</button>

        <!-- Modal 2 -->
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Sign up page-->

        <form action="php/driver.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4"  name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">FULL NAME</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Bucky Roberts" name="name"/>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="add2">
  </div>

  <div class="form-group">
    <label for="inputAddress">Phone Number</label>
    <input type="text" class="form-control" id="inputAddress" name="phone">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
        <option selected>Choose...</option>
        <option>up</option>
          <option>mp</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" name="zip">
    </div>
    <div class="form-group col-md-12">
      <label for="inputZip">image</label>
      <input type="file" class="form-control" id="inputZip" name="image">
    </div>
  </div>
        <!--
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">Remember me </label>
    </div>
  </div>-->

  <!-- Sign up page end -->


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" type="submit"  name="submit1">Sign Up</button>
      </div>
    </form>
      </div>
    </div>
  </div>
</div>
<!--Modal 2 End-->

      </div>
    </div>
  </div>
</div>

  </div>
</div>
