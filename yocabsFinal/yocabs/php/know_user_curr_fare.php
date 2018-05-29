<?php
// session_start();
// $var=$_SESSION['userid'];
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "yocab";
// $card_number=$_POST['cdnum'];
// $card_holder_name=$_POST['cname'];
// $cvv=$_POST['cvv'];
// $flag=0;
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

$sql = "SELECT * FROM customer where userid='$var' ";
$result = mysqli_query($conn, $sql);
$bookingid=-1;
if (mysqli_num_rows($result) > 0) {
    if($row = mysqli_fetch_assoc($result)) {
    	$bookingid=$row['bookingid'];
    }
} 
$fare=0;
$sql = "SELECT * FROM trip where bookingid='$bookingid' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    if($row = mysqli_fetch_assoc($result)) {
    	$fare=$row['fare'];
    }
} 
$sql = "SELECT * FROM driver where bookingid='$bookingid' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    if($row = mysqli_fetch_assoc($result)) {
    	$driver_bal=$row['balance'];
    }
} 
?>