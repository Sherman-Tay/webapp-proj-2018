<?php
ini_set('display_errors', 1);
session_start();
include "dbconnect.php";

if (isset($_POST['shopping'])) {
	header("Location:http://192.168.56.2/f35ee/4717Final_Project/movie-catalog.php");
	exit();
}

if (isset($_POST['empty'])) {
	$o_id = $_SESSION['OrderID'];
	$sql = "select * from cart where OrderID ='".$o_id."'";
	$result = mysqli_query($dbcnx,$sql);
	while ($row = mysqli_fetch_assoc($result)) {
	 	$sql = "UPDATE `movieSeats` SET `SeatAvail`='1' WHERE `SeatIndex`='".$row['SeatIndex']."' AND `Time` ='".$row['Time']."' AND `Title` ='".$row['Title']."' ";
		$result=mysqli_query($dbcnx, $sql);
	};

	$sql = "DELETE FROM cart WHERE OrderID='".$o_id."'";
	mysqli_query($dbcnx,$sql);

	header("Location:http://192.168.56.2/f35ee/4717Final_Project/cart.php");
	exit();

}
?>
<!-- $sql = "select SeatIndex from cart where OrderID='$o_id'";
$result = mysqli_query($dbcnx,$sql);
while ($row = mysqli_fetch_assoc($result)) {
	$query = "SELECT * from cart where SeatIndex='".$row['SeatIndex']."' and OrderID='".$o_id."'";
	$data = mysqli_fetch_assoc(mysqli_query($dbcnx,$query)); -->
