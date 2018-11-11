<?php //sign-in.php
include "dbconnect.php";
session_start();

if (isset($_POST['userID']) && isset($_POST['Password']))
{
  // if the user has just tried to log in
  $userid = $_POST['userID'];
  $password = $_POST['Password'];

  $password = md5($password);
  $query = 'select * from registeredusers '
           ."where userID='$userid' "
           ." and Password='$password'";
// echo "<br>" .$query. "<br>";
  $result = $dbcnx->query($query);
  if ($result->num_rows >0 )
  {
    // if they are in the database register the user id
    $_SESSION['registeredusers'] = $userid;
  }

  //get new order id
  	$sql = "SELECT MAX( OrderID ) AS max FROM cart;";
	$result= mysqli_query($dbcnx, $sql );
    if ($row = mysqli_fetch_array($result)) {
		if ($row['max']==0){
			$_SESSION['OrderID']=1;
		} else {
			$_SESSION['OrderID']=$row['max']+1;
		}
	}
	header("Location:http://192.168.56.2/f35ee/4717Final_Project/aquaman-desc.php");
  //$dbcnx->close();
}
?>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <meta charset="utf-8">
    <title>Sign In Page</title>
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
              <h2>Sign In </h2>
            </div>
            <div class=page-content>
              <?php
                if (isset($_SESSION['registeredusers']))
                {
                  echo 'You are logged in as: '.$_SESSION['registeredusers'].' <br />';
                  echo 'Click <a href="logout.php">Log out</a> to log out.<br />';
                }
                else
                {
                  if (isset($userid))
                  {
                    // if they've tried and failed to log in
                    echo 'Could not log you in.<br />';
                    echo 'Username or Password is wrong. <br/>';
                  }
                  else
                  {
                    // they have not tried to log in yet or have logged out
                    echo 'You are not logged in.<br />';
                  }
                  ?>
                  <form class="signin-form" method="post" action="sign-in.php">
                    <label>Username:</label>
                    <input type="text" name="userID" required placeholder="Please Enter UserID">
                    <label>Password:</label>
                    <input type="password" name="Password" required placeholder="Please Enter Password">
                    <input class="btn-submit" type="submit" value="Log In">
                    <p>Do not have an account? Click <a href="register.html"> here </a> to register </p>
                  </form>

                  <?php
                    }
                  ?>
            </div>
        </div>
      </main>
      <footer class=footer>
        Copyright &copy; 2018 MovieAmigo Corporation <br>
        <a href="mailto:thebestmovies@amigo.com">thebestmovies@amigo.com</a>
      </footer>
    </div>
  </body>
</html>
