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
  <script type = "text/javascript"  src = "js/desc.js" ></script>
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
              <h2>Aquaman</h2>
            </div>
            <div class=page-content>
              <div class="movie-img">
                <img src="img/aquaman-slide.jpg" >
              </div>
              <div class="movie-description">
                <?php
                  // $variantID = "1";
                  ini_set("display_errors", TRUE);
                  include "dbconnect.php";
                  $pagemovie = 'Aquaman'; //define page title
                  $sql = "SELECT * FROM `movie` WHERE `Title` = 'Aquaman'";
                  $movies = mysqli_fetch_assoc(mysqli_query($dbcnx,$sql));
                  $timing = $dbcnx->query("SELECT * FROM seatavailability WHERE `Title` = 'Aquaman'");
                  $timing1 = $dbcnx->query("SELECT * FROM seatavailability WHERE `Title` = 'Aquaman'");
                  $query = "SELECT * FROM `movieSeats` WHERE `Title` = 'Aquaman'";
                  $seatinfo = mysqli_fetch_assoc(mysqli_query($dbcnx,$query));
                  $sql ="SELECT `SeatPrice` FROM `movie` WHERE `Title`='Aquaman'";
                  $price = mysqli_fetch_assoc(mysqli_query($dbcnx,$sql));


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
                          <br><br>
                          <img src="img/seat-plan.png" width = 350px height = 150px><br>

                        </td>
                      </tr>
                    </table>
                    <table class = "timing_description">
                      <tr>
                        <td>
                          <h3> Movie Timings:<h3></br>
						  <form id="tb" action="aquaproc.php" method="POST">
						  <label>Price:$'.$price['SeatPrice'].'</label><input type="hidden" id="prc" name="price" value="'.$price['SeatPrice'].'"><br>
						  <label>Available Timings:</label>';
              while ($timing1_row = $timing1->fetch_assoc())
                  { echo ''.$timing1_row['timing'].'&nbsp';
                  };
              //print timing
              while ($timing_row = $timing->fetch_assoc())
                  {
                    // $variantID = $dbcnx->query("SELECT  VariantID FROM movieSeats WHERE `Time` = '.$timing_row[timing].' AND `Title` ='.$movies[Title].' LIMIT 1 ");
                    $variantID = $timing_row["VariantID"];
                    $assocSeats1 = $dbcnx->query("SELECT SeatIndex FROM movieSeats WHERE `VariantID` = '".$variantID."'");
                    $assocSeats = $dbcnx->query("SELECT SeatIndex FROM movieSeats WHERE `VariantID` = '".$variantID."' AND `SeatAvail` = '1'");
                    echo'
                    <br>
                    <label>Available Seats('.$timing_row['timing'].') :<br></label>';
                    //print Seats available
                    while ($assocSeats_row = $assocSeats->fetch_assoc()){
                      echo ''.$assocSeats_row["SeatIndex"].'&nbsp';
                    };
                    echo'<button type = "submit" class = add_cart name = "time" value = '.$timing_row['timing'].'>Add To Cart</button>';
                    //Add to cart
                  };
                  echo' <br><select name = "seat">';
                  //select seats
                  while ($assocSeats1_row = $assocSeats1->fetch_assoc()){
                    echo '<option value="'.$assocSeats1_row["SeatIndex"].'">'.$assocSeats1_row["SeatIndex"].'</option>';
                  };
                  echo '</select>';

                  //input movie name
                  echo' <input type="hidden" name="movie" value="'.$movies["Title"].'">';
              echo '</form>
                  </td>
                </tr>
              </table>';
                  ?>
              </div>
                <br>
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
