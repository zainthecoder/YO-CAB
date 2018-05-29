<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="refresh" content="60;profile.php" />
     <link rel="icon" href="logo3.png" type="image/gif" sizes="16x16">

     <!--font awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- jquery-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!-- Animate.css-->

     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">


    <title>Payment</title>

 <style type="text/css">

 
   
   .space{
    margin-top: 40px;
   }

   .jumbotron{
    border-radius: 0;
   }

   .card{
    border-radius: 0;
   }

   .card-body{
    padding:  10px;
   }

 .power img{
  
  width: 50%;
  height: 20%;


 }

 .power{

  margin-top: 50%;
  font-family: lato;
  font-size: 20px;
  margin-left: 10px;


 }

.card{
  cursor: pointer;
}

 

 </style>

  </head>
  <body>
   
    <div class="space"></div><hr>
      <div class="container">
        <h5 class=" text-muted" style="text-align:center;">Page will autoredirect in 60 Seconds...</h5>
      </div>

   <div class="jumbotron w-25 p-2 d-inline-block float-left" style="height: 520px; margin-right: 15px;">

    <div class="card" id="creditbox" style="background-color: white; color: blue;">
  <div class="card-body">
    <p><i class="fas fa-credit-card"></i> Credit Card</p>
  </div>
</div>

<div class="card" id="debitbox" style="background-color: #f7f8f9">
  <div class="card-body">
    <p><i class="fas fa-credit-card"></i> Debit Card</p>
  </div>
</div>

<div class="card" id="netbox" style="background-color: #f7f8f9">
  <div class="card-body">
    <p><i class="fas fa-home" ></i> Net Banking</p>
  </div>
</div>

 



<div class="power">
<p><strong>Powered By</strong></p> 

<img src="power.jpg"  class="img-thumbnail ">
  </div>
</div>


 
  
<div class="card w-50 p-3 float-left animated" id="creditform" style="width: 18rem; display: inline-block;">
  <div class="card-body">

<div style="margin-left: 150px;">
 <img src="visa.png"  class="img-thumbnail " style="width: 90px; height: 60px;" >
<img src="master.jpg"  class="img-thumbnail "  style="width: 90px; height: 60px; " >
</div>

   <form action="php/transaction.php" method="post">
  <div class="form-group" style="margin-top: 50px;">
    <div class="col-auto">
      <label  for="inlineFormInputGroup"><strong>Card Number</strong></label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-credit-card"></i></div>
        </div>
        <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="Enter Card Number" name="cdnum">
      </div>
    </div>
  </div>

  <div class="form-row" style="margin-left: 10px; margin-top: 35px;">
    <div class="col">
      <label><strong>Expiration Date</strong></label>
      <input type="text" class="form-control" placeholder="Month">
    </div>

    <div class="col">
      <label><strong></strong></label>
      <input type="text" class="form-control" style="margin-top: 8px;" placeholder="Year">
    </div>

    <div class="col">
      <label><strong>CVV/CVC</strong></label>
      <input type="password" class="form-control" name="cvv">
    </div>
  </div>

<div class="form-group" style="margin-top: 20px; margin-left: 12px;">
    <label ><strong>Card Holder Name</strong></label>
    <input type="text" class="form-control"  placeholder="Enter Card Holder Name" name="cname">
   
  </div>

  <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" style="margin-top: 45px; margin-left: 8px; border-radius: 0;">Make Payment</button>

</form>

</div>
</div>

<!-- net banking form-->

<div class="card w-50 p-3 float-left animated" id="netform" style="width: 18rem; display: none;">
  <div class="card-body">

<div style="margin-left: 150px;">
 <img src="visa.png"  class="img-thumbnail " style="width: 90px; height: 60px;" >
<img src="master.jpg"  class="img-thumbnail "  style="width: 90px; height: 60px; " >
</div>

   <form >
  <div class="form-group" style="margin-top: 50px;">
    <div class="col-auto">
      <label  for="inlineFormInputGroup"><strong>Username</strong></label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
        </div>
        <input type="text" class="form-control"  placeholder="Enter Username">
      </div>
    </div>
  </div>

   <div class="form-group" style="margin-top: 50px;">
    <div class="col-auto">
      <label  for="inlineFormInputGroup"><strong>Password</strong></label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-key"></i></div>
        </div>
        <input type="password
        " class="form-control"  placeholder="Enter Password">
      </div>
    </div>
  </div>
  <div style="margin-top: 100px;"></div>

  



  <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-top: 45px; margin-left: 8px; border-radius: 0;">Make Payment</button>

</form>

</div>
</div>

<div>
<img src="visa_every.png" style="width: 250px; height: 100px; margin-left: 20px; margin-top: 100px;"  class="img-thumbnail ">
<img src="master_pay.png" style="width: 250px; height: 100px; margin-left: 20px; margin-top: 10px;"  class="img-thumbnail ">
<img src="rupay.jpg" style="width: 250px; height: 100px; margin-left: 20px; margin-top: 10px;"  class="img-thumbnail ">
</div>



  
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
  


 $("#creditbox").click(function(){
    
    $("#creditbox").css("background-color", "white");
     $("#creditbox").css("color", "blue"); 

     $("#debitbox").css("background-color", "#f7f8f9");
     $("#debitbox").css("color", "black");

     $("#netbox").css("background-color", "#f7f8f9");
     $("#netbox").css("color", "black");

     $("#creditform").addClass("fadeIn");

     $("#creditform").css("display","inline-block");
      $("#netform").css("display","none");


   
  });

  $("#debitbox").click(function(){
       $("#debitbox").css("background-color", "white");
     $("#debitbox").css("color", "blue"); 

     $("#creditbox").css("background-color", "#f7f8f9");
     $("#creditbox").css("color", "black");

     $("#netbox").css("background-color", "#f7f8f9");
     $("#netbox").css("color", "black");
       
        $("#creditform").addClass("fadeIn");

     $("#creditform").css("display","inline-block");  
      $("#netform").css("display","none");
  });

  $("#netbox").click(function(){
   
   $("#netbox").css("background-color", "white");
     $("#netbox").css("color", "blue"); 

     $("#creditbox").css("background-color", "#f7f8f9");
     $("#creditbox").css("color", "black");

     $("#debitbox").css("background-color", "#f7f8f9");
     $("#debitbox").css("color", "black");

      $("#netform").addClass("fadeIn");

     $("#netform").css("display","inline-block");
     $("#creditform").css("display","none");
    
  });


  
  

 

 

 




</script>



  </body>
</html>