<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <meta charset="utf-8">
    <title>Aquaman</title>
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
              <h2>Aquaman</h2>
            </div>
            <div class=page-content>
              <div class="movie-img">
                <img src="img/aquaman-slide.jpg" >
              </div>
              <div class="movie-description">
                <?php
                  ini_set("display_errors", TRUE);
                  include "dbconnect.php";
                  $pagemovie = 'Aquaman'; //define page title
                  $sql = "SELECT * FROM `movie` WHERE `Title` = 'Aquaman'";
                  $movies = mysqli_fetch_assoc(mysqli_query($dbcnx,$sql));
                  $timing = $dbcnx->query("SELECT * FROM seatavailability");
                  


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
                          <h3> Movie Timings:<h3></br>';
                          while ($timing_row = $timing->fetch_assoc())
                          {
                            echo'
                            <input type="submit" name=" '.$timing_row['timing'].'" value="'.$timing_row['timing'].'">
                          ';
                          };
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
