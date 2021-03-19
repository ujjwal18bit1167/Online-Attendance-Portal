<?php
if(!isset($_POST['s']))
   header("location:home.php");
session_start();

$e=$_POST['email'];
$pa=$_POST['pas'];
include("dbconnection.php");
//$_SESSION['e']=$e;
$sq="select * from hodlogin where email='$e' and password='$pa' ";


$rs=$con->query($sq);


if($rs->num_rows)
{
   $_SESSION['e']=$e;
   header("location:HOD's dashboard.php");

}
else
{
  $msg="Enter valid username and password";
  $_SESSION['err']=$msg;
  header("location:home.php");
  

}


?>
