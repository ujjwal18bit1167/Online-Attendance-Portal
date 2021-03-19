<?php
session_start();
if((!isset($_SESSION['e'])) )
{
  header("location:home.php");
  
}
$email=$_SESSION['e'];
$sql="select * from login where email='$email'";
include("dbconnection.php");

  $rs=$con->query($sql);
  $row=$rs->fetch_array();
  $regis=true;
  $c=true;
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $op=$_POST['b'];
    $p=$_POST['pass'];
    $cp=$_POST['pass1'];
    if(( $op==$row[2]) && $p==$cp)
    {
      $regis=true;
      $c=true;
      $pas=md5($p);
      $sq1="update login SET enc_password = '$pas' WHERE email = '$email'";
      $sq2="update login SET password = '$p' WHERE email = '$email'";
      if($con->query($sq1))
              echo "password set";
      if($con->query($sq2))
          echo "pass has been set";

    }
    elseif( $op!=$row[2] && $p==$cp)
    {
      $regis=false;
      $c=true;
    }
    elseif($op==$row[2] && $p!=$cp)
    {
      $regis=true;
      $c=false;
    }
    else {
      $regis=false;
        $c=false;
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<link rel="stylesheet" href="styles2.css">
<script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Change Password</title>
  </head>
  <body>
    <section id="title" class="colored-section">
        <nav class="navbar  navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand" href="">Attendance Portal</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="edit_admin.php">Edit Profile</a>
                </li>

                <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Manage HODs
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="add_hod.php">Add HOD</a>
              <a class="dropdown-item" href="update_hod.php">Update HOD</a>
              <a class="dropdown-item" href="del_hod.php">Delete HOD</a>
              <a class="dropdown-item" href="show_hod.php">Show HOD</a>
            </div>
            <li class="nav-item">
                <a class="nav-link" href="cng_pass.php">Change Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="home.php">Log Out</a>
            </li>
            </ul>
         </div>
        </nav>
</section>
<?php if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if($regis==true && $c==true)
      {
      echo  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Password Changed!</strong>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span></button></div>";
      }
      elseif($regis==false && $c==true)
      {
        echo  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Invalid Old Password!</strong>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span></button></div>";
      }
      elseif($regis==true && $c==false)
      {
        echo  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Passwords Don't Match!</strong>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span></button></div>";
      }
      else {
        echo  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Invalid Old Password and Passwords Don't Match!</strong>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span></button></div>";
      }}
      ?>
      <section id="form">
        <div class="container-fluid colored-section" >

              <form class="f form-group" action="cng_pass.php" method="post">
                <h2 class="in">Change your Password</h2>
                <hr>
                <div class="row">
               <div class="col-lg-12">
                 <label for="">Enter Old Password</label>
                  <input type="password" class="form-control form-group" name="b" value="" placeholder="Enter Old Password">
              </div>
                  <div class="col-lg-12">
                    <label for="">New Password</label>
                 <input type="password" class="form-control form-group" name="pass" value="" placeholder="New Password">
                 </div>
                 <div class="col-lg-12">
                   <label for="">Confirm New Password</label>
                 <input type="password" class="form-control form-group" name="pass1" value="" placeholder="Confirm New Password">
                 </div>
                 <br>


                   <br>
                   <br>
                 <button type="submit" class="btn btn-primary btn-lg btn-block">Set New Password</button>
                 <br>
            </form>
            <!-- </div> -->
          </div>

            </div>
      </div>
      </section>
        <footer id="footer" class="white-section">
          <div class="container-fluid">
            <i class="ficon fab fa-twitter "></i>
            <i class="ficon fab fa-facebook-f "></i>
            <i class="ficon fab fa-instagram  "></i>
            <i class="ficon fas fa-envelope "></i>
            <p>© Copyright 2020 Team</p>
          </div>
        </footer>


   <script type="text/javascript">

   </script>
  </body>
</html>
