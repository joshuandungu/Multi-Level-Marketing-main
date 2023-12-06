<?php
include("include/dbcon.php");

if(isset($_POST['login'])){
  $userid=$_POST['userid'];
  $password=$_POST['password'];
  
$sql="SELECT * FROM admin Where userid='$userid' and password='$password'";
$run=mysqli_query($db,$sql);
$num=mysqli_num_rows($run);

if($num==1){

    $data=mysqli_fetch_assoc($run);
    $userid=$data['userid'];
    session_start();

    $_SESSION['userid']=$userid;
    $_SESSION['password']=$password;


    header('location:index.php');

}

else{

    header('location:login.php');
}
}

?>