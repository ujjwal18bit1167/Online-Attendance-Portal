<?php
session_start();
if(!isset($_POST['s']))
    header("location:home.php");

$email=$_POST['email'];
$name=$_POST['name'];
$newpass=$_POST['pass'];
$newdob=$_POST['dob'];
$employeeid=$_POST['fid'];
$gender=$_POST['gen'];
$age=$_POST['age'];
$subject=$_POST['subject'];
$encryptedpass=md5($newpass);
include("dbconnection.php");

$sq="update faculty_info set name='$name',dob='$newdob',employeeid='$employeeid',gender='$gender',age='$age',subject='$subject' where email='$email'";


$sq1="update login set password='$newpass',enc_password='$encryptedpass' where email='$email'";
if($con->query($sq))
{   if($con->query($sq1))
        {
            $_SESSION['updatefacultysession']='true';
            header("location:updatefaculty.php");
        }

}

?>