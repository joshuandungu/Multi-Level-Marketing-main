<?php
session_start();
include("include/dbcon.php");

if(isset($_POST['register'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];

  
  $lastid=mt_rand(1111,9999);
  $userid="SNA".$lastid;


  //user details insert
  

 $sql="INSERT INTO subadmin(userid, name, email, phone, password) VALUES ('$userid','$name','$email','$phone','$password')";
 $run=mysqli_query($db,$sql);

 
 $_SESSION['userid']=$userid;
 $_SESSION['name']=$name;
 $_SESSION['phone']=$phone;
 $_SESSION['email']=$email;
 $_SESSION['password']=$password;


 header('location:index.php');
}

?>





