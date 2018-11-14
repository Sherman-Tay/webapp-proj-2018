<?php
include "dbconnect.php";
session_start();

if (isset($_POST['time'])) {
    $time = $_POST['time'];
	$title= $_POST['movie'];
	$prc=$_POST['price'];
	$seat=$_POST['seat'];
	$orderid = $_SESSION['OrderID'];
	$sql = "insert into cart (Title, SeatPrice, SeatIndex, Time, OrderID) values ('$title','$prc','$seat','$time', '$orderid')";
	mysqli_query($dbcnx, $sql);

	$sql = "UPDATE movieSeats SET `SeatAvail` = '0' WHERE `SeatIndex`='".$seat."' AND `Time` = '".$time."' AND `Title` ='".$title."' ";
	$result=mysqli_query($dbcnx, $sql);
	header("Location:http://192.168.56.2/f35ee/4717Final_Project/cart.php");
}

?>
