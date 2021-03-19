<?php
session_start();
// if(!isset($_GET['addfacultysession']))
//      header("location:home.php");
// unset($_GET['addfacultysession']);

$email=$_SESSION['e'];
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
    <title> Add Faculty</title>
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


    
    
    <div class="container-fluid ">
                    <div class=" card card-body text-left " >
                        <div class="card-body  " style='background-color:#ffdead !important'>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <h3 style="color:brown;">Add Facuty</h3>

<!-------------------------------- creating form------------------------------------>
                                <form action="facultysave.php" method="post">
                                    <div class="form-group">
                                        <label style="color:brown;">Full Name </label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                                    </div>
                        
                                    <!-- creating form row -->
                                    <div class="form-row">
                                        <div class="form-group col-6">
                        
                                            <label style="color:brown;">E-Mail </label>
                                            <input type="email" class="form-control" name="e-mail" id="email" placeholder="E-Mail">
                                        </div>
                        
                                        <div class="form-group col-6">
                                            <label style="color:brown;">Mobile No.</label>
                                            <input type="text" class="form-control" name="pass" id="pass" placeholder="Mobile No.">
                                        </div>
                                    </div>
                        
            
                                          <div style="color:brown;">  Gender: &nbsp;
                                            <!-- radio Button-->
                                            <div class="form-check-inline">

                                                <input type="radio" name="gen" id="gen" class="form-check-input" value="male">
                                                <label class="form-check-label"> Male</label>
                                            </div>
                        
                                            <div class="form-check-inline">
                                                <input type="radio" class="form-check-input" name="gen" value="female">
                                                <label class="form-check-label">Female</label>
                                            </div>
                                          </div>
                                           <br>
                                            <div class="row">
                                                <div class="col-6">
                                                <label class="form-check-label" style="color:brown;"> Age</label>
                                                
                                                <input type="text" class="form-control" name="age" id="age" placeholder="Age">
                                                </div>
                                                <div class="col-6">
                                                <label style="color:brown;"class="form-check-label"> Date Of Birth</label>
                                                
                                                <input type="date" class="form-control" name="DOB" id="DOB" >
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <label style="color:brown;" class="form-check-label"> Employee Id</label>
                                            
                                            <input type="text" class="form-control" name="fid" id="fid" placeholder="Employee Id">
                                            <br>
                                            <label style="color:brown;"class="form-check-label"> Subject</label>
                                            
                                            <input type="text" class="form-control" name="subjects" id="subject" placeholder="Subject">

                                            <br>
                                            <button type="submit" class="btn bg-success btn-block" name='s'>Register</button>
                                        
                                      </div>
                             
                                    
                        
                                   
                        
                        
                                       
                                    
                                   
                                   
                                </form>
                                <br>
                            
                             
                             
                            </div>
                    </div> <!--card ends here-->

                    <p style="color:green;text-align='center';">
                               <?php
                                  if(isset($_SESSION['facultyaddedsession']))
                                    {

                                     echo "Faculty added successfully";
                                     unset($_SESSION['facultyaddedsession']);
                                    }
                                ?>
                             </p>
                            <div class="col-2"></div>
                        
                        
                    </div>
                </div>


            </div>
            
        
        <br>
        <br>



    </div>

   <div class="container-fluid">
        <footer id="footer">


            <a href="https://twitter.com/avi_nigam1">  <img
                        src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-logo-vector-png-clipart-1.png"
                        height="27px" width="30px"></img></a> &nbsp;
            <a href="https://www.facebook.com/ujjwal.gupta.5621">  <img
                        src="https://cdn3.iconfinder.com/data/icons/facebook-ui-flat/48/Facebook_UI-03-512.png"
                        height="35px" width="35px"></img></a> &nbsp;
            <a href="https://www.instagram.com/_ankitbhardwaj_/">  <img src="https://image.flaticon.com/icons/svg/174/174855.svg" height="27px"
                        width="27px"></img></a>
            &nbsp;
            <a href="mailto:avinigamsz@gmail.com">  <img
                        src="https://www.freepngimg.com/download/gmail/66398-vector-network-icons-computer-graphics-gmail-portable.png"
                        height="27px" width="27px"></img></a>
            <br>
            <br>
            <p>© Copyright 2020 <a href="about.php">Team</p>


        </footer>
    </div>


    <script type="text/javascript">

    </script>
</body>

</html>