  <?php

 session_start();
if (isset($_SESSION['username'])) {
      
     //echo "string";

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

$sql = "SELECT * FROM driver where email='$var'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result)) {
      

    	$name=$row["name"];
    	$email=$row["email"];
    	$address=$row["address"];
    	$driverid=$row["driverid"];
    	$contact_number=$row["contact_number"];
      $my_image=$row['image'];
      $book=$row['bookingid'];
    	// echo $address.$book;
    }
} 
$sql = "SELECT * FROM trip where bookingid='$book'";
$result1 = mysqli_query($conn, $sql);
$car_number="";$userid="";$trip_time="";$client_destination="";$userid_client="-1";
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result1)) {
      $trip_time=$row["trip_time"];
      $userid_client=$row["userid"];
      $car_number=$row['car_number'];
      $client_destination=$row['destination'];
      $fare=$row['fare'];

    }
    
  }
 

$sql = "SELECT * FROM customer where userid='$userid_client'";
$result1 = mysqli_query($conn, $sql);
 $client_email="";$client_contact_number="";$client_address="";$client_name="";$client_image="khalid.jpg";
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result1)) {
      $client_email=$row["email"];
      $client_contact_number=$row["contact_number"];
      $client_address=$row["address"];
      $client_image=$row["image"];
      $client_name=$row["name"];
      $pstatus=$row["payment_done"];
    }
    
  }
  else{
    $client_email="NO client";
  }

mysqli_close($conn);
    }