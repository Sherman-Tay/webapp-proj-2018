<?php
session_start();
include "dbconnect.php";

if (isset($_POST['shopping'])) {
	header("Location:http://192.168.56.2/f35ee/4717Final_Project/movie-catalog.php");
	exit();
}

if (isset($_POST['empty'])) {
	$o_id = $_SESSION['orderid'];
	$sql = "DELETE FROM cart WHERE orderid='".$o_id."'";
	mysqli_query($dbcnx,$sql);
	$sql = "SELECT seat FROM cart WHERE orderid='".$o_id."'";
	$seattoremove = mysqli_fetch_assoc(mysqli_query($dbcnx,$sql));
	$sql = "SELECT movie FROM cart WHERE orderid='".$o_id."' LIMIT 1";
	$movieofseat =  mysqli_fetch_assoc(mysqli_query($dbcnx,$sql));
	$sql = "SELECT timing FROM cart WHERE orderid='".$o_id."' LIMIT 1";
	$timingofseat =  mysqli_fetch_assoc(mysqli_query($dbcnx,$sql));
	// $movietitle = mysqli_fetch_assoc(mysqli_query($dbcnx,$sql));
	// $sql = "UPDATE seatavailability SET `$seattoremove` == 1 WHERE Title = $movieofseat AND timing = $timingofseat";
	mysqli_query($dbcnx,$sql);
	header("Location:http://192.168.56.2/f35ee/4717Final_Project/cart.php");
	exit();

}
?>
