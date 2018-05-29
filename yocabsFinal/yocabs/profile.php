<?php

session_start();
if(isset($_SESSION['username'])){
	if($_SESSION['flag']==2){
		include 'newprofiledriver.php';
	}else{
		include 'newprofilecustomer.php';
	}
}



?>