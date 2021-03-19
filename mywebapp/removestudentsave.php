<?php

session_start();
if(!isset($_POST['s']))
    header("location:home.php");
include("dbconnection.php");
$email=$_POST['email'];


$sq="delete from student_info where email='$email'";
$sq1="delete from login where email='$email'";
if($con->query($sq))
{
   if($con->query($sq1))
       {
           $_SESSION['removestudentsession']='true';
         header("location:removestudent.php");

       }
       

}
else
{
    $_SESSION['studentcouldnotberemoved']='true';
    header("location:removestudent.php");
}


    
?>