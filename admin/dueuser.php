<?php

include("include/dbcon.php");
include("include/login_check.php");
date_default_timezone_set("Asia/Kolkata");
//error_reporting(0);

$userid=$_GET['userid'];
$amt=$_GET['amt'];
$query="UPDATE `income` SET paid_status='1' where userid='$userid'";
$data=mysqli_query($db,$query);


if( $data){
   $date= date("Y-m-d H:i:sa");
    $payment = "INSERT INTO `payment_history` (userid,amount,date,remark) VALUES ('$userid','$amt','$date','MLM')";
    $run_payment = mysqli_query($db, $payment);
    $msg="Record updated successfully";
    
       header("location:dueincome.php?msg=$msg");
}

else


{
  $msgf="Record not updated";
  header("location:dueincome.php?msgf=$msgf");
}

?>



