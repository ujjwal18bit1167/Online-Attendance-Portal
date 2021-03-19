<?php
session_start();


$email=$_POST['email'];
$newname=$_POST['name'];
$dob=$_POST['dob'];
$mob=$_POST['mob'];

include("dbconnection.php");



$sq="update hod_info set name='$newname',dob='$dob',mobile='$mob' where email='$email' ";

if($con->query($sq))
{
   $_SESSION['editprofilesession']='true';
   header("location:editprofile.php");

}
else
{
      $_SESSION['incorrectemailsession']='true';
      header("location:editprofile.php");

}



?>