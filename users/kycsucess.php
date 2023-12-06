<?php

include("include/dbcon.php");

if(isset($_POST['submit'])){
  $userid=$_POST['user_id'];
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $age=$_POST['age'];
  $account=$_POST['account'];
  $ifsc=$_POST['ifsc'];
  $branch=$_POST['branch'];
  $pan=$_POST['pan'];
  $addhar=$_POST['addhar'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $pincode=$_POST['pincode'];
 
  
  

 $sql="INSERT INTO kyc(userid, name, account, ifsc, branch,  pan, addhar, age, gender, address, city, state, pincode) VALUES ('$userid', '$name', '$account', '$ifsc', '$branch',  '$pan', '$addhar', '$age', '$gender', '$address', '$city', '$state', '$pincode')";
 $run=mysqli_query($db,$sql);

 
 

 header('location:index.php');
 
}
?>





