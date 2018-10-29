<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <meta charset="utf-8">
    <title>Registration Page</title>
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
                <a id="cart" href="cart.html">cart</a>
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
              <h2>Registration</h2>
            </div>
            <div class=page-content>
							<?php // register.php
							include "dbconnect.php";
							if (isset($_POST['submit'])) {
								if (empty($_POST['username']) || empty ($_POST['password'])
									|| empty ($_POST['password2']) || empty ($_POST['email'])) {
								echo "All records to be filled in";
								exit;}
								}
							$username = $_POST['username'];
							$password = $_POST['password'];
							$password2 = $_POST['password2'];
							$email = $_POST['email'];
							$contact = $_POST['contact'];
              $queryuser = 'select * from registeredusers'."where userID='$username'";

              //check if username already exists !!! somehow doesnt work!
              $checkuser = $dbcnx->query($queryuser);
              if ($checkuser->num_rows > 0) {
                echo " Username Already Exists! <br> Please Select Another One";
                exit;
              }

							// echo ("$username" . "<br />". "$password2" . "<br />");
							if ($password != $password2) {
								echo "Sorry! The passwords do not match";
								echo "<br>";
								echo 'click <a href="register.html">here</a> to retry';

								exit;
								}

							$password = md5($password);

							// echo $password;
							$sql = "INSERT INTO  `registeredusers` (`userID`,`Password`,`Emailaddress`,`Contact`)
							    VALUES ('$username','$password','$email','$contact')";
							//	echo "<br>". $sql. "<br>";

							$result = $dbcnx->query($sql);

							if (!$result)
								echo "Your query failed.";
							else
								echo "Welcome ". $username . ". You are now registered with us!";
								echo "<br>";
								echo 'click <a href="register.html">here</a> to return to Log in page!';
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
