<?php
session_start();
$email=$_POST['email'];
$name=$_POST['name'];
$newpass=$_POST['pass'];
$dob=$_POST['dob'];
$adno=$_POST['adno'];
$mob=$_POST['mob'];
include("dbconnection.php");


$sq="update student_info set name='$name',mobileno='$mob',admissionno='$adno',dob='$dob' where email='$email'" ;

$enc_pass=md5($newpass);

$sq1="update login set password='$newpass',enc_password='$enc_pass' where email='$email'";


if($con->query($sq))
{  echo "student_info table updated";
   if($con->query($sq1))
      {
          $_SESSION['updatestudentsession']='true';
          header("location:updatestudent.php");

      }


}
else
{   
   echo "Updation failed";

}







?>