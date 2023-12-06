<?php

include("include/dbcon.php");
include("include/login_check.php");

//error_reporting(0);

$userid=$_GET['userid'];
$query="UPDATE `user` SET product_status='1' where userid='$userid'";
$data=mysqli_query($db,$query);


if( $data){
    
    header("location:userlist.php");
}

else


{
    echo "<font color='red'>Failed to update Record from Database";
}

?>



