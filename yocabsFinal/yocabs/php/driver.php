<html>
<head>
<script type="text/javascript">
           function f(){
            
            
            location.replace("home1.php");
         
           }
          </script>
</head>
<body onmouseover="f()">

      
      <?php
if (isset($_POST['submit1'])) {
      $name= $_POST['name'];
      $email=$_POST['email'];
      $pas=$_POST['password'];
      $pno=$_POST['phone'];

      $state=$_POST['state'];
      $add2=$_POST['add2'];
      $city=$_POST['city'];
      $zip=$_POST['zip'];
      $add=$add2." ".$city." ".$state." ".$zip;
      include 'amg.php';
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

// sql to create table
$sql = "insert into driver(email,name,password,contact_number,address,image)
    values('$email','$name','$pas','$pno','$add','$image_khalid')";

if (mysqli_query($conn, $sql)) {
    echo "data insert successfully";
} else {
    echo "Error insertin data: " . mysqli_error($conn);
}

mysqli_close($conn);
header("location: ../home1.php");
    exit();
    }




          ?>



          
</body>
</html>