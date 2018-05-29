<?php
	session_start();
	$x=mt_rand(10,35);
	// if(isset($_SESSION['Iestimated'])){
	// 	$x=$_SESSION['x'];
	// }
	// header("location: booking.php");
	echo $_POST['type'];
	if(isset($_POST['submit'])){
		$y= $_POST['type'];
		if($y=='Hachback'){
			$_SESSION['Iestimated']=$x*10;
		}else if($y=='Sedan'){
			$_SESSION['Iestimated']=$x*12;
		}else if($y=='SUV'){
			$_SESSION['Iestimated']=$x*7;
		}else if($y=='Outstation'){
			$_SESSION['Iestimated']=$x*25;
		}else{
			$_SESSION['Iestimated']=$x*15;
		}
	}
	// echo $_SESSION['Iestimated'];

	$_SESSION['IestimatedFarePer']=$_SESSION['Iestimated']/$x;
	$_SESSION['x']=$x;
	$_SESSION['y']=$_SESSION['Iestimated'];
	header("location: booking.php#fareEst");


?>