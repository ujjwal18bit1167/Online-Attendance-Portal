<?php
session_start();
$email=$_SESSION['e'];
// if(!isset($_POST['s']))
//     header("location:home.php");

include("dbconnection.php");
// if(!isset($_SESSION['e']))
//         { $email=$_SESSION['e'];
//          echo $email;
//            die;
//         }
$oldpass=$_POST['pass'];


$s1="select * from hod_info where email='$email' ";
$rs=$con->query($s1);
$row=$rs->fetch_array();

$newpass1=$_POST['pass2'];
$newpass2=$_POST['pass3'];
if($newpass1==$newpass2 && $row[2]==$oldpass)
{  
    $sq="update login set password='$newpass' where email='$email' " ;
      if($con->query($sq))
          header("location:HOD's dashboard.php");
}
 if( $row[2]!=$oldpass )
{
   $_SESSION['oldpassdonotmatch'];
   header("location:changepassword.php");

}
 if($newpass1!=$newpass2)
{
    $_SESSION['passdonotmatch'];
    header("location:changepassword.php");
}


?>