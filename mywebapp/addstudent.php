<?php
session_start();
if(!isset($_SESSION['e']))
     header("location:home.php");







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
    <title> Add a student</title>
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
                            <a class="dropdown-item" href="addstudent.php">Add Student</a>
                            <a class="dropdown-item" href="removestudent.php">Remove Student</a>
                            <a class="dropdown-item" href="updatestudent.php">Update Student</a>
                        </div>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Faculties
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">


                        
                            <a class="dropdown-item" href="addfaculty.php?addfacultysession=true">Add Faculty</a>
                            <a class="dropdown-item" href="removefaculty.php?removefacultysession=true">Remove Faculty</a>
                            <a class="dropdown-item" href="updatefaculty.php?updatefacultysession=true">Update Faculty</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Attendance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                    <!---------------passing email to a session variable------------->
                   
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




    <div class="container-fluid ">






        <div class=" card card-body text-left ">
            <div class="card-body  " style='background-color:#ffdead !important'>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <h3 style="color:brown;">Add a student</h3>
                    <form action="addstudentsave.php"  method="post"   >
                      
                                <div class="row form-row">
                                    <div class="col-lg-12">    
                                        <label>Student Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"><br>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email-ID" required><br>
                                    </div>

                                    <div class="col-lg-6 ">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number"><br>
                                    </div>
        
                                    <div class="col-lg-6 ">
                                        <label>Roll No</label>
                                        <input type="text" class="form-control" name="roll" id="roll" placeholder="Roll Number"><br>
                                    </div>

                                    <div class="col-lg-6 ">
                                        <label>Admission No</label>
                                        <input type="text" class="form-control" name="admission" id="admission" placeholder="Admission Number"><br>
                                    </div>

                                    <div class="col-lg-5 ">
                                        <label>Branch</label>
                                        <input type="text" class="form-control" name="branch" id="branch" placeholder="Branch"><br>
                                    </div>

                                    <div class="col-lg-3 ">
                                        <label>Class</label>
                                        <input type="text" class="form-control" name="class" id="class" placeholder="Class"><br>
                                    </div>

                                    <div class="col-lg-4 ">
                                        <label>Year</label>
                                        <input type="number" class="form-control" name="year" id="year" placeholder="Year"><br>
                                    </div>

                                    <div class="col-lg-4 ">
                                        <label>Subject1</label>
                                        <input type="text" class="form-control" name="sub1"  placeholder="Subject"><br>
                                    </div>

                                    <div class="col-lg-4 ">
                                        <label>Subject2</label>
                                        <input type="text" class="form-control" name="sub2"  placeholder="Subject"><br>
                                    </div>

                                    <div class="col-lg-4 ">
                                        <label>Subject3</label>
                                        <input type="text" class="form-control" name="sub3"  placeholder="Subject"><br>
                                    </div>

                                    <div class="col-lg-4 ">
                                        <label>Subject4</label>
                                        <input type="text" class="form-control" name="sub4"  placeholder="Subject"><br>
                                    </div>

                                    <div class="col-lg-4 ">
                                        <label>Subject5</label>
                                        <input type="text" class="form-control" name="sub5"  placeholder="Subject"><br>
                                    </div>

                                    <div class="col-lg-4 ">
                                        <label>Subject6</label>
                                        <input type="text" class="form-control" name="sub6"  placeholder="Subject"><br>
                                    </div>
                    
                                    <div class="col-lg-6">
                                        <label >Gender</label><br>
                                        <input type="radio" class="form-group" value="Male" name="gender" > &nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                        <input type="radio" class="form-group" value="Female" name="gender" > &nbsp;Female
                                    </div>

                                    <div class="col-lg-6">
                                        <label >Date of Birth</label>
                                        <input type="date" class="form-control " name="dob" placeholder="Date of Birth"><br>
                                    </div>

                                    <div class="col-lg-12 "><br>
                                        <button  type="submit" class="btn btn-success btn-block " name="s" >Submit</button>
                                    </div>
                                    
                                    
                                </div>

                            </form>


                            <br>
                            <p style="color:green;">
                                    <?php
                                    
                                    if(isset($_SESSION['studentadded']))
                                         {
                                             echo "Student added successfully";
                                             unset($_SESSION['studentadded']);
                                         }
                                   ?>
                                   </p>
            </div>
            </div>  <!--card ends here-->
            <div class="col-2"></div>


        </div>
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