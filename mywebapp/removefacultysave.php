<?php

if(!isset($_POST['s']))
    header("location:home.php");

include("dbconnection.php");

$email=$_POST['email'];

$sq="delete from faculty_info where email='$email'";
$sq1="delete from login where email='$email'";
if($con->query($sq))
{    if($con->query($sq1))
         {
             $_SESSION['facultyremoved']='true';
             header("location:removefaculty.php");
         }
}
?>