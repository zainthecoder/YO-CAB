<?php
$session_var=$_SESSION["username"];
$sql = "SELECT * FROM customer where email='$session_var'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result)) {
      

    	$userid=$row["userid"];
    	$bookingid=$row["bookingid"];
    }
} ?>