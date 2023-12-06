<?php

include("include/dbcon.php");
//error_reporting(0);

$userid=$_GET['userid'];
$query="DELETE FROM msg_to_admin WHERE userid='$userid'";
$data=mysqli_query($db,$query);


if($data){
    echo "<script>alert('Record Deleted from Database')</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="5; URL= http://localhost/mlmsoft/admin/userlist.php">;    
<?php
}

else


{
    echo "<font color='red'>Failed to Delete Record from Database";
}

?>



