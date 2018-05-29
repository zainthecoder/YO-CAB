<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "yocab";
$cd_num=mt_rand(100000,999999);
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
$email=$_SESSION['username'];
$sql = "SELECT * FROM customer where email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result)) {
      

      $userid1=$row["userid"];
      echo $userid1;
      // $bookingid=$row["bookingid"];
    }
}
$sql = "INSERT INTO payment_card(paymentid,card_number,exp_date) values('$userid1','$cd_num','2019-4-12 00:00:00')";
// $result = mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
    // echo "data insert successfully";
    //  session_start();
    // $_SESSION['email']=$email;
    // header("location:transaction_helper.php");
    header("location: ../profile.php");






} 
$sql = "UPDATE customer SET bookingid=null where email='$email'";
$result1 = mysqli_query($conn, $sql);
?>