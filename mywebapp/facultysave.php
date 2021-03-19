<?php
//---------bringing values to this intermediate php page


session_start();
if(!isset($_POST['s']))
    header("location:home.php");
$name=$_POST['name'];
$email=$_POST['e-mail'];
$mob=$_POST['pass'];
$g=$_POST['gen'];
$age=$_POST['age'];
$dob=$_POST['DOB'];
$facultyid=$_POST['fid'];
$subjects=$_POST['subjects'];

//-------------------------Database Connection----------------------------------//

include("dbconnection.php");
$imgname="";
$sq="insert into faculty_info values('$name','$email','$mob','$g','$age','$dob','$facultyid','$subjects','$imgname')";


if($con->query($sq))
    {

     $p=md5($mob);
     $s1="insert into login(email,password,enc_password) values('$email','$mob','$p')";
     $con->query($s1);
     
     $_SESSION['n']=$name;
     $_SESSION['e']=$email;
        $_SESSION['facultyaddedsession']='true';
      header("location:addfaculty.php");



    }
else
    echo "data not inserted";

?>