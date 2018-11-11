<?php
include "dbconnect.php";
session_start();
if (isset($_POST['payment'])) {

	$_SESSION['OrderID'] = $_SESSION['OrderID'] + 1;
	header("Location:http://192.168.56.2/f35ee/4717Final_Project/myorder.php");
}


?>
