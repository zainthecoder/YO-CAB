<?php
  
    session_start();
    if(isset($_SESSION["username"])){
      include 'php/header_booking_customer.php';
      include 'php/booking_customer.php';
      // include 'php/profile_customer_jquery_helper.php';
  }
else{
  include 'php/header_booking_default.php';
}
  ?>
  