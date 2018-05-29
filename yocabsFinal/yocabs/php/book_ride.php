<?php
session_start();
$bookinkg_id= mt_rand(10000,99999);
$distance= mt_rand(250,500);
if(isset($_SESSION['y'])){
	$distance=$_SESSION['y'];
}
$fare=$distance;
if (isset($_POST['submit'])) {
 

	
	
	$session_var=$_SESSION['username'];
      $curr_location=$_POST['pickup'];
      $destination=$_POST['destination'];
      $city=$_POST['city'];
      $state=$_POST['state'];
      $zip=$_POST['zip'];
      $type=$_POST['type'];
      $add=$destination." ".$city." ".$state." ".$zip;
      // $add=$destination;
      $type=$_POST['type'];
      if(empty($add) ||empty($curr_location)){
      	?>
      	<script type="text/javascript">
      		alert("please fill all entries");
      		window.open("../profile.php","_self");
      	</script>
      	<?php
      }
      else{
      // echo $curr_location." ".$destination." ".$city." ".$state." ".$zip;
        $d=strtotime("now");
		$dat=date("y-m-d h:i:s", $d) ;
      
      	$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "yocab";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
//      Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		include "get_car_number.php";
		include "check_is_car_booked.php";
		include "is_driver_free.php";
		if($flag==1 && $driverid!=-1){
			if($bookingid ==5400 || $bookingid==null){
		// sql to create table
		$sql = "insert into trip(bookingid,fare,trip_time,curr_location,destination,userid,car_number,driverid)
		    values('$bookinkg_id','$fare','$dat','$curr_location','$add','$userid','$car_number','$driverid')";




		if (mysqli_query($conn, $sql)) {
		    // echo "data insert successfully";
		} else {
		    echo "Error insertin data: " . mysqli_error($conn);
		}

		$sql="update customer set bookingid='$bookinkg_id' where email='$session_var'";

		if (mysqli_query($conn, $sql)) {
		    // echo "data insert successfully";
		} else {
		    echo "Error insertin data: " . mysqli_error($conn);
		}
		// include "get_car_number.php";

		$sql="update car set bookingid='$bookinkg_id' where car_number='$car_number' ";
		if (mysqli_query($conn, $sql)) {
		    // echo "data insert successfully";
		} else {
		    echo "Error insertin data: " . mysqli_error($conn);
		}
		$sql="update driver set bookingid='$bookinkg_id' where driverid='$driverid' ";
		if (mysqli_query($conn, $sql)) {
		    // echo "data insert successfully";
		} else {
		    echo "Error insertin data: " . mysqli_error($conn);
		}
		?>
		<script type="text/javascript">
			 var x=confirm("car booked successfully.Do you want payment Now ? or you can give you fare after your happy ride");
			 if(x){
			window.open('../payment.php','_self');
		}
		else{
			window.open('../booking.php','_self');
		}
			


		</script>
		<?php
	}
	else{
			?>
		<script type="text/javascript">
			alert("please complete you old trip first");
			window.open('../profile.php','_self');
			


		</script>
		<?php
		

	}


	}
	else{



		?>
		<script type="text/javascript">
			alert("Driver or car  are not avaible this time .Please try later");
			// window.open("../profile.php");
			window.open('../profile.php','_self');


		</script>
		<?php




	}
		// $sql="SELECT car_number FROM `car` WHERE bookingid is null and fuel='cng' LIMIT 1 ";
		// $result=mysqli_query($conn, $sql);
		// echo $result;
	
		mysqli_close($conn);
		    
		   // header("location: profile.php");
		    // exit();
		    }


		}
?>










