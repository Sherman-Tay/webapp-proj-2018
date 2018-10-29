<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <meta charset="utf-8">
    <title>Movie Catalog</title>
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
              <h2>Movie Catalog</h2>
            </div>
            <div class=page-content>
              <table class="movies-table">
                <?php
                  ini_set("display_errors", TRUE);
                  include "dbconnect.php";
                  $movies = $dbcnx->query("SELECT * FROM movie");

              // Check query
                  if (!$movies) {
                    trigger_error('Invalid query: ' . $conn->error);
                    }

                  // create headers
                  echo'
                    <tr class = "movie-head">
                      <td width=200px>
                        <h3> Movie titles </h3>
                      </td>
                      <td>
                        <h3>Movie Description</h3>
                      </td>
                        ';
                  while ($movies_row = $movies->fetch_assoc()) {
									  echo '
										  <tr class="movieList">
											  <td>
												  <a href="'.$movies_row["webpage"].'"><h3>'.$movies_row["Title"].'</h3> </a>
											  </td>
											  <td>
												  <p>'.$movies_row["Description"].'</p>
                        </td>
                      </tr>';
                    };
                  ?>
              </table>
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
