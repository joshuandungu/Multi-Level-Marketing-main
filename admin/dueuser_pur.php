<?php

include("include/dbcon.php");
include("include/login_check.php");
date_default_timezone_set("Asia/Kolkata");
//error_reporting(0);

$userid=$_GET['userid'];
$amt=$_GET['amt'];
$query="UPDATE `plan` SET paid_status='1' where userid='$userid'";
$data=mysqli_query($db,$query);


if( $data){
    $queryp="UPDATE `plan` SET pay='0' where userid='$userid'";
    $datap=mysqli_query($db,$queryp);
     $queryt="UPDATE `plan` SET tds='0' where userid='$userid'";
    $datat=mysqli_query($db,$queryt);
   $date= date("Y-m-d H:i:sa");
    $payment = "INSERT INTO `payment_history` (userid,amount,date,remark) VALUES ('$userid','$amt','$date','Repurchase')";
    $run_payment = mysqli_query($db, $payment);
    $msg="Record updated successfully";
    
       header("location:dueincome_pur.php?msg=$msg");
}

else


{
   $msgf="Record not updated";
  header("location:dueincome_pur.php?msgf=$msgf");}

?>



