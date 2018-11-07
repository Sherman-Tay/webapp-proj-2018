<?php
ini_set('display_errors', 1);
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
	$seattoremove = $dbcnx->query("SELECT * FROM cart WHERE orderid='".$o_id."'");
	$sql = "SELECT movie FROM cart WHERE orderid='".$o_id."' LIMIT 1";
	$movieofseat =  mysqli_fetch_assoc(mysqli_query($dbcnx,$sql));
	$sql = "SELECT timing FROM cart WHERE orderid='".$o_id."' LIMIT 1";
	$timingofseat =  mysqli_fetch_assoc(mysqli_query($dbcnx,$sql));
	// 
	// while ($row = fetch_assoc->($seattoremove)) {
	//  	$seat = $row["seat"];
	// 	// $seat = 	mysql_real_escape_string($seat);
	//  	$title = $row["movie"];
	// 	// $title = 	mysql_real_escape_string($title);
	//  	$time = $row["time"];
	// 	// $time = 	mysql_real_escape_string($time);
	//  	$sql = "UPDATE `seatavailability` SET `$seat` = '1' WHERE `Title` = '$title' AND `timing` =  '$time'";
	//  	mysqli_query($sql,$dbcnx);
	// }
	 // $seattoremove = free();

	header("Location:http://192.168.56.2/f35ee/4717Final_Project/cart.php");
	exit();

}
?>
