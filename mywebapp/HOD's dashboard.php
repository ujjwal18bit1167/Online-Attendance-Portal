<?php
session_start();

if(!isset($_SESSION['e']))
    {
          header("location:home.php");
    }

//-----In order to retrieve values from database we have to first make a connection to database 
//---------------Making Connection to database-------------------------------

include("dbconnection.php");


//----------------------------------
$email=$_SESSION['e'];
$_SESSION['e']=$email;
$s1="select * from hod_info where email='$email'";

$rs=$con->query($s1);
$row=$rs->fetch_array();




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
    <title> Hod's dashboard</title>
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
                        <a class="nav-link" href="HOD's dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editprofile.php">Edit Profile</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Students
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="addstudent.php?addstudentsession=true">Add Student</a>
                            <a class="dropdown-item" href="removestudent.php?removestudentsession=true">Remove Student</a>
                            <a class="dropdown-item" href="updatestudent.php">Update Student</a>
                        </div>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Faculties
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">


                        
                            <a class="dropdown-item" href="addfaculty.php">Add Faculty</a>
                            <a class="dropdown-item" href="removefaculty.php">Remove Faculty</a>
                            <a class="dropdown-item" href="updatefaculty.php">Update Faculty</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Attendance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                    <!---------------passing email to a session variable------------->
                   <?php
                       $_SESSION['e']=$email;
 
                       ?>
                    <li class="nav-item">
                        <a class="nav-link" href="cng_pass2.php">Change password</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- Navigation bar end-->

    <!--page's middle content -->


    <!--1st col -->
    

    <hr style="height:5px;background-color:brown;" />
    <h4 text-align="center" style="color:brown;">HOD of <?php  echo $row[8]     ?></h4>
    <hr style="height:5px;background-color:brown;" />
    <h2 style="color:white;">Welcome <?php echo $row[0]; ?></h2>
    <div class="container-fluid ">

        <div class="row jumbotron"  style="background-color:#ffdead !important" >

            <div class="col-lg-3 col-md-6 col-sm-12">
                <img src="0_IMG_20200714_180026.jpg"
                    alt=" " class="image" ></img>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card card-body  ">
                       <div class="card-body bg-dark">
                            <div class="row">
                                <div class="col-4">
                                    <p class="hodinfo text-left">Name</p>
                                </div>
                                <div class="col-8">
                                    <p class="hodinfo text-left">: <?php echo $row[0]; ?> </p>
                                </div>
                            
                                <div class="col-12">
                                    <p class="hodinfo text-left">Institution : ABES Engineering College</p>
                                </div>
                            
                            
                            
                                <div class="col-4">
                                    <p class="hodinfo text-left">Faculty Id &nbsp;:</p>
                                </div>
                                <div class="col-8">
                                    <p class="hodinfo text-left"> <?php echo $row[6]; ?> </p>
                                </div>
                            
                            
                            
                                
                                <div class="col-4">
                                    <p class="hodinfo text-left">Department</p>
                                </div>
                                <div class="col-8">
                                    <p class="hodinfo text-left">: <?php echo $row[8] ?> </p>
                                </div>
                            
                            
                            
                            </div>
                       </div>
                </div>
        
            
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/ABESEC_logo.png/220px-ABESEC_logo.png"  alt=""
                    class="">
           </div>
        </div>
    <br>
    <br>
    

        
    </div>

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

    <script type="text/javascript">

    </script>
</body>

</html>