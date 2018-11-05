<?php
include "dbconnect.php";
session_start();
  
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
<h1>My order </h1>
<?php
$t_price = "";
$o_id=$_SESSION['orderid']-1;
$sql = "select seat from cart where orderid='$o_id'";
$result = mysqli_query($dbcnx,$sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck >0) {
	echo '<table border="1">
	<tr>
		<th>Movie Title</th>
		<th>Seat</th>
		<th>Time</th>
		<th>Price</th>
	</tr>';
	while ($row = mysqli_fetch_assoc($result)) {
		$query = "select * from cart where seat='".$row['seat']."' and orderid='".$o_id."'";
		$data = mysqli_fetch_assoc(mysqli_query($dbcnx,$query));
		echo '<tr>';
		echo '<td>'.$data['movie'].'</td>';
		echo '<td>'.$data['seat'].'</td>';
		echo '<td>'.$data['time'].'</td>';
		echo '<td>'.$data['price'].'</td>';
		echo '</tr>';
		$t_price=$t_price + $data['price'];
	}
	echo '<tr><td colspan="2"><b>Total Price: </b></td><td colspan="2">$'.$t_price.'</td><tr></table>';
} else {
	echo 'Your Shopping Cart Is Empty!';
}
?>
		<br><br><br><br>
		<table id="table2" border="1">
		<tr><th  colspan=4" >ORDER STATUS</th></tr>
		
		<tr id="tb2r2">
		<td><?php if ($myorder == "Order Received" || $myorder == "In Progress" || $myorder == "Delivery in Progress" || $myorder == "Delivered") { echo "<font color = 'green'>Order Received";} else { echo "<font color = 'grey'>Order Received";}?></td>
		</table>
	  </form>
	</div>
  </div>

<?php
  $result->free();
  $db->close();
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
