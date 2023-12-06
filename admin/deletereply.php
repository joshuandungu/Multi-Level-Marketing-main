<?php

include("include/dbcon.php");
//error_reporting(0);

$msgid=$_GET['msgid'];
$query="DELETE FROM reply WHERE msgid='$msgid'";
$data=mysqli_query($db,$query);


if($data){
    echo "<script>alert('Record Deleted from Database')</script>";

}

else


{
    echo "<font color='red'>Failed to Delete Record from Database";
}

?>



