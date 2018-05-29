  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Yo cab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
session_start();
if (isset($_SESSION['username'])) {
      
     
include 'php/header_profile_myall.php';
     $var=$_SESSION['username'];
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
$sql = "SELECT * FROM customer where email='$var'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result)) {
      

    	// $name=$row["name"];
    	// $email=$row["email"];
    	// $address=$row["address"];
    	$userid=$row["userid"];
    	// $contact_number=$row["contact_number"];
      // $bookingid=$row["bookingid"];
      // $my_image=$row['image'];
    	 // echo $address;
    }
} 
$use1=$userid;
$sql = "SELECT * FROM trip where userid='$use1'";
$result1 = mysqli_query($conn, $sql);

if (mysqli_num_rows($result1) > 0) {
    ?>
    <table class="table  table-bordered table-striped">
      <tr class="table-dark text-danger">
        <td>driverid</td>
        <td>car_number</td>
        <td>destination</td>
        <td>fare</td>
        <td>bookingid</td>
        <td>trip_time</td>

      </tr> 
      <?php
    while($row = mysqli_fetch_assoc($result1)) {
      ?>
      <tr>
        <td><?php echo $row['driverid'];?></td>
        <td><?php echo $row['car_number'];?></td>
        <td><?php echo $row['destination'];?></td>
        <td><?php echo $row['fare'];?></td>
        <td><?php echo $row['bookingid'];?></td>
        <td><?php echo $row['trip_time'];?></td>

      </tr> 
      <?php

    }?>
    </table>
    <?php
  }



mysqli_close($conn);
    }
    ?>
    </body>
</html>