
<?php
include("include/dbcon.php");

if(isset($_POST['submit'])){
  $userid=$_POST['userid'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $msg=$_POST['msg'];
  


 
//user details insert
  
 $sql="INSERT INTO msg_to_admin(userid, name, email, msg) VALUES ('$userid','$name','$email','$msg')";
 $run=mysqli_query($db,$sql);
?>
 <script>alert("Message Sent Successfully")</script>
<?php 
 
}
else{
?>
 <script>alert("Message Sent Successfully")</script>
<?php 
    }
?>
