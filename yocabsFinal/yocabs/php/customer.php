<html>
<head>
<!--
<script type="text/javascript">
           function f(){
            
            
            location.replace("home1.php");
         
           }onmouseover="f()"
          </script>-->
</head>
<body >


      
      <?php

if (isset($_POST['submit1'])) {
  $image_khalid="khalid1.jpg";
      include 'amg.php';
      $name= $_POST['name'];
      $email=$_POST['email'];
      $pas=$_POST['password'];
      $pno=$_POST['phone'];

      
      $add2=$_POST['add2'];
      $city=$_POST['city'];
      $zip=$_POST['zip'];
      $add=$add2." ".$city." ".$zip;
     
      $servername = "localhost";
$username = "root";
$password = "";
$dbname = "yocab";

// Create connection
 if(empty($name)||empty($email)||empty($pas)||empty($pno)||empty($add2)||empty($city)||empty($zip))
 {
     ?>
     <script type="text/javascript">
        alert("please fill all the enteries properly.");
        window.open("../home1.php");
     </script>

     <?php
 }
 else{
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "insert into customer(email,name,password,contact_number,address,image)
    values('$email','$name','$pas','$pno','$add','$image_khalid')";

if (mysqli_query($conn, $sql)) {
    echo "data insert successfully";
     session_start();
    $_SESSION['email']=$email;
    header("location:transaction_helper.php");






} else {
    echo "Error insertin data: " . mysqli_error($conn);
}

mysqli_close($conn);
    
   header("location: ../home1.php");
    exit();
    }
  }
 ?>



          
</body>
</html>