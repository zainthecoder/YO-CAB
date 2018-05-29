  <?php

  // session_start();
if (isset($_SESSION['username'])) {
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
      

    	$name=$row["name"];
    	$email=$row["email"];
    	$address=$row["address"];
    	$userid=$row["userid"];
    	$contact_number=$row["contact_number"];
      $bookingid=$row["bookingid"];
      $my_image=$row['image'];
    	 // echo $address;
      $pdone=$row['payment_done'];
    }
} 
$use1=$userid;
$sql = "SELECT * FROM trip where bookingid='$bookingid'";
$result1 = mysqli_query($conn, $sql);
$car_number="";$userid="";$trip_time="";$client_destination="";$driverid="-1";
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result1)) {
      $trip_time=$row["trip_time"];
      $driverid=$row["driverid"];
      $car_number=$row['car_number'];
      $client_destination=$row['destination'];
      $fare1=$row["fare"];

    }
    
  }
$y= $trip_time;
$x=$car_number;
  $sql = "SELECT * from driver where driverid='$driverid'";
$result1 = mysqli_query($conn, $sql);
 $driver_email="";$driver_contact_number="";$driver_address="";$driver_name="";$driver_image="khalid.jpg";
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result1)) {
      $driver_email=$row["email"];
      $driver_contact_number=$row["contact_number"];
      $driver_address=$row["address"];
      $driver_image=$row["image"];
      $driver_name=$row["name"];
      
    }
    // $fare1=10;
    
  }
  else{
    $client_email="NO driver";
  }

// $sql = "SELECT * FROM trip where userid='$userid'";
// $result1 = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     if($row = mysqli_fetch_assoc($result1)) {
//       echo $row["trip_time"];
//     }
//   }
  $sql = "SELECT * FROM payment_card where paymentid='$use1'";
$result1 = mysqli_query($conn, $sql);
$car_number="";$userid="";$trip_time="";$client_destination="";$driverid="-1";
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result1)) {
      // $trip_time=$row["trip_time"];
      // $driverid=$row["driverid"];
      // $car_number=$row['car_number'];
      // $client_destination=$row['destination'];
      // $fare1=$row["fare"];
      $card_number=$row['card_number'];
      $balance=$row['balance'];

    }
    
  }

$bal=$balance;
mysqli_close($conn);
    }