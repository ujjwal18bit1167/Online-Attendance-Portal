<?php
session_start();
if(!isset($_SESSION['e']))
    header("location:home.php");



include("dbconnection.php");

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$rollno=$_POST['roll'];
$adno=$_POST['admission'];
$branch=$_POST['branch'];
$class=$_POST['class'];
$year=$_POST['year'];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
$sub4=$_POST['sub4'];
$sub5=$_POST['sub5'];
$sub6=$_POST['sub6'];

$gen=$_POST['gender'];
$dob=$_POST['dob'];


$role="student";

$sq="insert into student_info values('$name', '$email','$phone','$rollno' ,'$adno','$branch', '$class',$year,'$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$gen','$dob')";
$enc_pass=md5($phone);
$sq1="insert into login (email,password,enc_password,role)values('$email','$phone','$enc_pass','$role')";

if($con->query($sq))
    {  if($con->query($sq1))
        {
              $_SESSION['studentadded']='true';
           header("location:addstudent.php");
        }  
    }




?>