<?php
include("include/dbcon.php");
$msg="";
if(isset($_POST['login'])){
  $userid=$_POST['userid'];
  $password=$_POST['password'];
  
$sql="SELECT * FROM user Where userid='$userid' and password='$password'";
$run=mysqli_query($db,$sql);
$num=mysqli_num_rows($run);

if($num==1){


    $data=mysqli_fetch_assoc($run);
    $userid=$data['userid'];
    session_start();

    $_SESSION['userid']=$userid;
    $_SESSION['password']=$password;

 
                $sql="SELECT * FROM admin where userid='Admin2020' ";
                $run=mysqli_query($db,$sql);
                $row=mysqli_fetch_array($run);
                if($row['status']!='0'){
             $_SESSION['login']='yes';
             $_SESSION['last_active_time']=time();
               header('location:index.php');

                }
                else{
                   
                 header('location:maintanance/maintenance.html');
                }
             
   

}

else{

    header('location:login.php');
    $msg="Please enter valid Login Details";
}
}

?>