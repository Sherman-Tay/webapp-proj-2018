<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/stylesheet.css">
	<script type = "text/javascript"  src = "js/contactvalidator.js" ></script>
    <meta charset="utf-8">
    <title>Contact Page</title>
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
              <h2>Contact Us</h2>
            </div>
            <div class=page-content>
              <?php
              //if "email" variable is filled out, send email
                if (isset($_REQUEST['email']))  {

                //Email information
                $admin_email = "f35ee@localhost";
                $email = $_REQUEST['email'];
                $subject = 'Inquiry by'. $_REQUEST['name'];
                $message = $_REQUEST['inquiry'];
                $headers = 'From: f35ee@localhost'."r/n" . 'Reply-To:f35ee@localhost'."r/n"."X-Mailer:PHP/".phpversion();
                $contact =$_REQUEST['contact-number'];

                //send email
                mail($admin_email, $subject, $message,$headers, "From:" . $email , $contact);

                //Email response
                echo "Thank you for contacting us! Your response has been recorded";
                }

                //if "email" variable is not filled out, display the form
                else  {
                  ?>
                  <form class="contact-form" method="post">
                    <label>*Name:</label>
                    <input type="text" name="name" required id = "myName" placeholder="Enter Full Name">
                    <label>*E-Mail:</label>
                    <input type="email" name="email" required id = "myEmail" placeholder="Enter Valid E-mail Address">
                    <label>Contact Number:</label>
                    <input type="contact-number" name="number" id="myNumber" placeholder="Optional">
                    <label>*Your Inquiry:</label>
                    <textarea name="Inquiry" id="myInquiry" required></textarea>
                    <input class="btn-submit" type="submit" value="Submit">
                  </form>
				  <script type = "text/javascript"  src = "js/contactvalidatorr.js" ></script>
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
