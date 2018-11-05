<?php
include "dbconnect.php";
session_start();

if (isset($_POST['time'])) {
    $time = $_POST['time'];
	$title= $_POST['movie'];
	$prc=$_POST['price'];
	$seat=$_POST['seat'];
	$orderid = $_SESSION['orderid'];
	$sql = "insert into cart (movie, price, seat, time, orderid) values ('$title','$prc','$seat','$time', '$orderid')";
	mysqli_query($dbcnx, $sql);

	$sql = "update seatavailability SET ".$seat."='0' WHERE Title='".$title."' AND timing='".$time."'";
	$result=mysqli_query($dbcnx, $sql);
	header("Location:http://192.168.56.2/f35ee/4717Final_Project/cart.php");
}

?>
