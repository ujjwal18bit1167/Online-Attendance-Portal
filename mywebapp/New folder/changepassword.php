<?php
session_start();
if(!isset($_SESSION['e']) )
      header("location:home.php");

$email=$_SESSION['e'];
$_SESSION['e']=$email;

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="styles3.css">
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js"
        integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <title> Update a faculty</title>
</head>

<body>
    <!-- Navigation bar start-->
    <section id="title" class=" ">

        <nav class="navbar bg-dark navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand" href="">Attendance Portal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Edit Profile</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Students
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Add Student</a>
                            <a class="dropdown-item" href="#">Remove Student</a>
                            <a class="dropdown-item" href="#">Update Student</a>
                        </div>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Faculties
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Add Faculty</a>
                            <a class="dropdown-item" href="#">Remove Faculty</a>
                            <a class="dropdown-item" href="#">Update Faculty</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Attendance</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- Navigation bar end-->

    <!--page's middle content -->


    <!--1st col -->


    <div class="row text-left">

        <div class="col-12">
            <div class=" a container ">
                <br>


                <div class="row">
                    <div class="col-md-3"> </div>
                    <div class="col-md-6">
                        <div class="row">

                            <div class="col-sm-12 col-md-12 col-lg-12">

                                <div class="card card-body  ">
                                    <div class="card-body  " style='background-color:#ffdead !important'>
                                        <h3 style=" text-align: center; color:brown;">Change password</h3>

                                        <!--form start  -->

                                        <form action="savechangepass.php"      method="post">
                                            <div class="form-group">
                                                <label>Enter old password</label>
                                                <input name="pass" class="form-control" placeholder="Enter old password"
                                                    type="text">
                                            </div> <!-- form-group// -->

                                            <div class="form-group">
                                                <label>Enter new password</label>
                                                <input type="password" name="pass2" class="form-control"
                                                    placeholder="Enter new password">
                                            </div>

                                            <div class="form-group">
                                                <label>Confirm new password </label>
                                                <input type="text" name="pass3" id="pass3" placeholder="Confirm your new password"
                                                    class="form-control">
                                            </div>

                                           


                                            <br>
                                            <button type="submit" class="btn btn-primary btn-block" name="s"> Save
                                            </buttom>

                                         <p style="color:red;"> <?php 
                                         if(isset($_SESSION['oldpassdonotmatch']))
                                            {
                                                 echo "Please enter your correct old password";
                                                  session_destroy();
                                            }   
                                          if(isset($_SESSION['passdonotmatch']))
                                              echo "Passwords do not match";
                                              session_destroy();    
                                                            ?>  
                                          </p>
                                    </div> <!-- form-group// -->



                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-3"> </div>
        </div>
    </div>
    </div>

    </div>


    <div class="container-fluid">
        <footer id="footer">


            <a href="#"> <i> <img
                        src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-logo-vector-png-clipart-1.png"
                        height="27px" width="30px"></img></i></a> &nbsp;
            <a href="#"> <i> <img
                        src="https://cdn3.iconfinder.com/data/icons/facebook-ui-flat/48/Facebook_UI-03-512.png"
                        height="35px" width="35px"></img></i></a> &nbsp;
            <a href="#"> <i> <img src="https://image.flaticon.com/icons/svg/174/174855.svg" height="27px"
                        width="27px"></img></i></a>
            &nbsp;
            <a href="#"> <i> <img
                        src="https://www.freepngimg.com/download/gmail/66398-vector-network-icons-computer-graphics-gmail-portable.png"
                        height="27px" width="27px"></img></i></a>
            <br>
            <br>
            <p>© Copyright 2020 Team</p>


        </footer>
    </div>

    <script type="text/javascript">

    </script>
</body>

</html>