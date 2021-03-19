<?php
  session_start();
  
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="styles.css">
<script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Attendance homepage</title>
    </head>
<body>

<section id="title" class="colored-section">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"  >
        <a class="navbar-brand" href="">Attendance Portal</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="reg.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#footer">Contact Us</a>
            </li>

     </div>
    </nav>
   
    <div class="container-fluid">
    <div class="row">


        <div class="col-lg-6">
          <h1>Manage Attendance with ease.</h1>
          <button type="button" class="btn btn-dark btn-lg"><a href="reg.php" class="link1">Register</a></button>
          <img src="" alt="">
        </div>
        <div class="col-lg-6">
          <!---form starts here -->
          <form class="f form-group" action="loginsave.php" method="post">
                  <h2 class="in">Login</h2>
                  <hr>
                  <div>
                     <label>Email</label>
                      <input type="email" class="form-control form-group" name="email"  placeholder="Email">
                  </div>
                  <div>
                    <label>Password</label>
                  <input type="Password" class="form-control form-group" name="pas"  placeholder="Password">
                  </div>
                  
                  <hr>

                 <button type="submit" class="btn btn-primary btn-block btno" name="s" value="Submit">Login</button>
                 <p style="color:red;"> <?php if(isset($_SESSION['err'])) echo $_SESSION['err'];
                //  session_destroy(); we can also use session_destroy() here as other pages are not dependent till now. But after login, if we destroy the sesssion it will logout so in order to remove an effect of a specific session, we need to unset a session.
                unset($_SESSION['err']); ?>   </p>
                 <br>
                 <p class="left"> <a href="forgot_pass.php">Forgot Password?</a> </p>
                 </form>
        </div>
    </div>
  </div>
</section>
  <section id="features" class="white-section">
  <div class="container-fluid">


    <div class="row">
      <div class="fb col-lg-4 ml-auto">
        <i class="fas fa-check-circle icon fa-4x"></i>
        <h3 class="feature-heading">Easy to use.</h3>
        <p class="pa">User friendly and accessible anywhere.</p>
      </div>
      <div class="fb col-lg-4 ml-auto">
        <i class="fas fa-bullseye icon fa-4x"></i>
        <h3 class="feature-heading">Guarenteed to work.</h3>
        <p class="pa">Our Attendance System is Guarenteed to work.</p>
      </div>
      <div class="fb col-lg-4 ml-auto">
        <i class="fas fa-heart icon fa-4x"></i>
        <h3 class="feature-heading">Excellent Support</h3>
        <p class="pa">We prioritize the experience of our users.</p>
      </div>
    </div>
</div>
  </section>
  <section id="advertisement" class="colored-section">
    <div id="testimonial-carousal" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="advertisement-heading">Over 10,000 certified institutions are using our Attendance System.</h2>
           <button type="button" class="btn btn-dark btn-lg"><a href="reg.php" class="link1">Register Now</a></button>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="advertisement-heading">Join our class leading Attendance portal.</h2>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousal" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>

      </a>
      <a class="carousel-control-next" href="#testimonial-carousal" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>

      </a></div>
  </section>

  <div class="container-fluid">
        <footer id="footer">


            <a href="https://twitter.com/avi_nigam1"> <i> <img
                        src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-logo-vector-png-clipart-1.png"
                        height="27px" width="30px"></img></i></a> &nbsp;
            <a href="https://www.facebook.com/ujjwal.gupta.5621"> <i> <img
                        src="https://cdn3.iconfinder.com/data/icons/facebook-ui-flat/48/Facebook_UI-03-512.png"
                        height="35px" width="35px"></img></i></a> &nbsp;
            <a href="https://www.instagram.com/_ankitbhardwaj_/"> <i> <img src="https://image.flaticon.com/icons/svg/174/174855.svg" height="27px"
                        width="27px"></img></i></a>
            &nbsp;
            <a href="mailto:avinigamsz@gmail.com"> <i> <img
                        src="https://www.freepngimg.com/download/gmail/66398-vector-network-icons-computer-graphics-gmail-portable.png"
                        height="27px" width="27px"></img></i></a>
            <br>
            <br>
            <p>© Copyright 2020 <a href="about.php">Team</p>


        </footer>
    </div>


</body>
</html>
