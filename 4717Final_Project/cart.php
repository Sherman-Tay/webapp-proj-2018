<?php  //cart.php
session_start();
include "dbconnect.php";

if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['empty'])) {
	unset($_SESSION['cart']);
	header("Location:http://192.168.56.2/f35ee/4717Final_Project/cart.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <meta charset="utf-8">
    <title>Cart Page</title>
  </head>
  <body>
    <div id=wrapper>
      <header class ="main-nav">
        <div class = container-head>
          <div class = header-logo>
            <a href="index.html">
              <img src="img/logo-amigo.png" height = 100px width=160px>
            </a>
          </div>
          <div class = motto>
            <p> Your Friendly Movie Booking Platform <br> That's what Amigos are for</p>
          </div>
          <div class = nav-wrap>
            <ul class = menu-primary underline>
              <li class = menu-item-primary>
                <a id="home" href="index.html">home</a>
              </li>
              <li class =  menu-item-primary>
                <a id="movies" href="movie-catalog.php">movies</a>
              </li>
              <li class = " menu-item-primary">
                <a id="contact" href="contact.php">contact us</a>
              </li>
              <li class = " menu-item-primary">
                <a id="cart" href="cart.php">cart</a>
              </li>
              <li class = " menu-item-primary header-menu-account">
                <a id="header-menu-account" href="sign-in.php">
                  sign in
                </a>
              </li>
          </ul>
          </div>
        </div>
      </header>
      <main class = container-body>
        <div class= bottom-content>
          <div class = "content-left">
          </div>
          <div class = "content-right">
            <div class= page-heading></div>
              <h2>Cart</h2>
            </div>
            <div class=page-content>
			<div id="checkout">
			<body>
<h2> Your Shopping Cart </h2>
<?php
$t_price = "";
$o_id=$_SESSION['OrderID'];
$sql = "select SeatIndex from cart where OrderID='$o_id'";
$result = mysqli_query($dbcnx,$sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck >0) {
	echo '<table class= "cart-table" border="1">
	<tr>
		<th>Movie Title</th>
		<th>Seat</th>
		<th>Time</th>
		<th>Price</th>
	</tr>';
	while ($row = mysqli_fetch_assoc($result)) {
		$query = "SELECT * from cart where SeatIndex='".$row['SeatIndex']."' and OrderID='".$o_id."'";
		$data = mysqli_fetch_assoc(mysqli_query($dbcnx,$query));
		echo '<tr>';
		echo '<td>'.$data['Title'].'</td>';
		echo '<td>'.$data['SeatIndex'].'</td>';
		echo '<td>'.$data['Time'].'</td>';
		echo '<td>'.$data['SeatPrice'].'</td>';
		echo '</tr>';
		$t_price=$t_price + $data['SeatPrice'];
	}
	echo '<tr><td colspan="2"><b>Total Price: </b></td><td colspan="2">$'.$t_price.'</td><tr></table>';
} else {
	echo '&nbsp &nbsp &nbsp Your Shopping Cart Is Empty!';
}
if ($resultCheck > 0){
	echo '<p>&nbsp &nbsp &nbsp  Click <a href="myorder.php">here</a> to view your orders </p>';
}
?>
<br><br><br>
<form action="emptycart.php" method="post">
	<button class ="cart-btn-submit"type="submit" name="shopping">Continue Shopping</button>
	<button class="cart-btn-empty" type ="submit" name="empty">Empty Cart</button>
</form>


			</div>
			<br>
			<?php
				if ($resultCheck > 0) {
				echo '<form method="POST" action="checkout.inc.php" class="checkout">';
				echo '<button  class="cart-btn-pay" type="submit" name="payment">Payment</button>';
				echo '</form>';
				}

			?>
			</div>
</body>

        </div>
      </main>
      <footer class=footer>
        Copyright &copy; 2018 MovieAmigo Corporation <br>
        <a href="mailto:thebestmovies@amigo.com">thebestmovies@amigo.com</a>
      </footer>
    </div>
  </body>
</html>
