 <?php
if (isset($_POST['submit'])) {
session_start();
$var=$_SESSION['userid'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yocab";
$card_number=$_POST['cdnum'];
$card_holder_name=$_POST['cname'];
$cvv=$_POST['cvv'];
$flag=0;
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM payment_card where card_number='$card_number' and paymentid='$cvv' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    if($row = mysqli_fetch_assoc($result)) {
    	// echo "eys1";
    	$curr_bal=$row['balance'];
    	$flag=1;
    }
} 
include "know_user_curr_fare.php";

if($flag==1 ){
	$final_bal=$curr_bal-$fare;
	if($final_bal>=0){
		$x=$driver_bal+$fare;
		$sql="UPDATE payment_card set balance='$final_bal' where paymentid='$cvv'";
		 mysqli_query($conn, $sql);
		 $sql="UPDATE customer set payment_done=1 where userid='$var'";
		 mysqli_query($conn, $sql);
		  $sql="UPDATE driver set balance='$x' where bookingid='$bookingid'";
		 mysqli_query($conn, $sql);
		 // echo "eys11";
		 ?>
		 <script type="text/javascript">
		 window.open("../booking.php" ,"_self");
		 </script>
		 <?php
	}else{
		?>
<script type="text/javascript">
	alert("you don't have sufficient balance");
	window.open("../profile.php" ,"_self");
</script>
	<?php
	}
}
else{
	?>
<script type="text/javascript">
	alert("please enter valid card number with valid cvv");
	window.open("../payment.php" ,"_self");
</script>
	<?php
}
// header("location:../profile.php");
}
?>