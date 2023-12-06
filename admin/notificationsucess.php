
<?php
include("include/dbcon.php");

if(isset($_POST['notify'])){
  $msg=$_POST['msg'];
  


  $lastid=mt_rand(10000,99999);
  $msgid="SAN".$lastid;

//user details insert
  
$sql="INSERT INTO notification(msg, msgid) VALUES ('$msg',' $msgid')";
$data=mysqli_query($db,$sql);
?>
 <script>alert("Notification Sent Successfully")</script>
<?php 
 
}
else{
?>
 <script>alert("Notification Sent Successfully")</script>
<?php 
    }
?>
