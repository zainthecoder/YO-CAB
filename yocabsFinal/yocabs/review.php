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

     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Reviews</title>


    <style type="text/css">
    	
    /* body{
     	background-image: url("reviewimg.png");
     	background-size: cover;
     	opacity: 0.9;
     }*/


     @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
/*
fieldset, label { margin: 0; padding: 0; }*/
/*body{ margin: 20px; }*/


/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: right;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 


    


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

      <li class="nav-item ">
        <a class="nav-link" id="pass" href="home1.php "><i class="fas fa-home"></i><strong> HOME <span class="sr-only">(current)</span></strong></a>
      </li>

     <!--  <li class="nav-item">
        <a class="nav-link" href="profile.php"><i class="fas fa-user"></i><strong> PROFILE</strong></a>
      </li> -->
       <li class="nav-item">
        <a class="nav-link" href="aboutUs.php"><i class="fas fa-globe"></i><strong> ABOUT</strong></a>
      </li>

       <<li class="nav-item active">
        <a class="nav-link" href="review.php"><i class="fas fa-comments"></i><strong> REVIEW </strong></a>
      </li> 
      
    </ul>
   

  </div>
</nav>
<div class="jumbotron ">
  <div class="container"
<div class="row">
  <div class="col-sm-2">
    
  </div>
  <div class="col-sm-12">
    <div class="card" >
      <div class="card-body">
        <h4 class="card-title">We are Happy to have you</h4>
        <p class="card-text">With your constant suppost and feedbacks we grow each time and become better for you<br>Its you and ypur best wishes which drives us way closer to our journey and we hope your every journey with us become exciting and relaxing as ours with you.</p>
        <h5 class="card-title">Help us with your Feed back</h5>
        <hr>
        <form action="php/submit_reviews.php" method="post">
         <fieldset class="rating">
             <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
             <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
             <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
             <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
             <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
             <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
             <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
             <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
             <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
             <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
           </fieldset>

       
           <div class="form-group">
          <label for="exampleFormControlTextarea1"><b>FeedBack:</b></label>
         <input class="form-control" id="text" rows="3" name="comments"></input>
        </div>
        <button id="submit" name="submit" value="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>

        
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    
  </div>
</div>
</div>
</div>

<!-- <div class="alert alert-success" role="alert" id="alert" style="margin-top: 30px; display: none;">
  <p><b>Thank You for Your Feedback..!!</b><br>Happy Riding</p> 
</div> -->
<div class="container" style="height:25px;"></div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yocab";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM reviews";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

?>
<div class="container">
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong><?php echo $row['email']."</strong> on ".$row['curr_time']." with rating <b><i>".$row['rate']."</i></b>";?> <p><?php echo "<b>Says:</b>".$row['comments']; ?></p>
</div>
</div>
<?php
    }
} else {
    ?>
    <div class="alert alert-primary alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      No comments exists in database!
    </div>
    <?php
}

mysqli_close($conn);
?>








  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">

    	var click = false;
    	

    	
    	
    	document.getElementById("submit").onclick=function(){




    		
             
             if(click==false  )
             {
             	document.getElementById("submit").innerHTML="Submitted";
             	document.getElementById("submit").style.background ="green";
             	click=true;
             }

            if(click==true){

               document.getElementById("alert").style.display="block";

            }



    	}


    </script>

   

  </body>
</html>