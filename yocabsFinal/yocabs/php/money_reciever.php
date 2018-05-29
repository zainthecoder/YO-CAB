<?php
session_start();
include 'dbh.inc.php';
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

$sql = "UPDATE payment_card set balance=500 WHERE paymentid='$use1'";
$result = mysqli_query($conn, $sql);

// sql to create table
echo $bal;

?>