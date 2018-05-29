<?php
session_start();
unset($_SESSION["username"]) ;
unset($_SESSION["flag"]);
unset($_SESSION['name']);
unset($_SESSION['img']);
header("location: home1.php");
?>