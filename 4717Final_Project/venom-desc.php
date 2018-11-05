<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <meta charset="utf-8">
    <title>Aquaman</title>
	<style>
	#prc{
		text-align: center;
		width: 20px;
	}
	</style>
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
                <a id="contact" href="contact.html">contact us</a>
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
              <h2>Venom</h2>
            </div>
            <div class=page-content>
              <div class="movie-img">
                <img src="img/venom-slide.jpg" >
              </div>
              <div class="movie-description">
                <?php
                  ini_set("display_errors", TRUE);
                  include "dbconnect.php";
                  $pagemovie = 'Venom'; //define page title
                  $sql = "SELECT * FROM `movie` WHERE `Title` = 'Venom'";
                  $movies = mysqli_fetch_assoc(mysqli_query($dbcnx,$sql));
                  $timing = $dbcnx->query("SELECT * FROM seatavailability WHERE `Title` = 'Venom'");
                  $query = "select * from seatavailability where Title='Venom'";
                  $seatinfo = mysqli_fetch_assoc(mysqli_query($dbcnx,$query));

              // Check query
                  if (!$movies) {
                    trigger_error('Invalid query: ' . $dbcnx->error);
                    }
                  if (!$timing) {
                    trigger_error('Invalid query: ' . $dbcnx->error);
                    }

                  // create headers
                  echo'
                  <table class="movie_info_description">
                    <tr>
                      <td>
                        <h3>Movie Description</h3>

                      </td>
                      <tr>
                        <td>
                          <p>'.$movies['Description'].'</p>

                        </td>
                      </tr>
                    </table>
                    <table class = "timing_description">
                      <tr>
                        <td>
                          <h3> Movie Timings:<h3></br>
						  <form id="tb" action="venomproc.php" method="POST">
						  <label>Price: $10</label><input type="hidden" id="prc" name="price" value="10"><br>
						  <label>Seat</label>
						  <select name="seat">';
						  if ($seatinfo['A1']==1) { echo '<option value="A1">A1</option>';}
						  if ($seatinfo['A2']==1) { echo '<option value="A2">A2</option>';}
						  if ($seatinfo['A3']==1) { echo '<option value="A3">A3</option>';}
						  if ($seatinfo['A4']==1) { echo '<option value="A4">A4</option>';}
						  if ($seatinfo['A5']==1) { echo '<option value="A5">A5</option>';}
						  if ($seatinfo['B1']==1) { echo '<option value="B1">B1</option>';}
						  if ($seatinfo['B2']==1) { echo '<option value="B2">B2</option>';}
						  if ($seatinfo['B3']==1) { echo '<option value="B3">B3</option>';}
						  if ($seatinfo['B4']==1) { echo '<option value="B4">B4</option>';}
						  if ($seatinfo['B5']==1) { echo '<option value="B5">B5</option>';}
						  echo '</select>
						  <input type="hidden" name="movie" value="Venom"><br>';
                      while ($timing_row = $timing->fetch_assoc())
                          {
							//$_session['movie']=$movies['Title'];
							//echo $_session['movie'];
							//$_session['price']="$10";
							//$_session['seat']="A1";
							//$_session['time']=$timing_row['timing'];
                            echo'
                            <input type="submit" name="time" value="'.$timing_row['timing'].'">
                            ';
                          };
						  echo '</form>';
                            echo'
                        </td>
                      </tr>
                    </table>';
                  ?>
              </div>
              <div class="seating-plan">
                <img src="img/seat-plan.png" width = 500px float='left' height = 150px><br>
                <br>
                <p>The available Seats are:</p>
                <?php

                  ?>
              </div>
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
