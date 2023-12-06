<?php

include("include/dbcon.php");
include("include/login_check.php");


if(isset($_POST['activate'])) {
    global $db;
  
    $userid=$_POST['userid'];
    
    $query = mysqli_fetch_array(mysqli_query($db,"select * from `user` where userid = '$userid'"));
    
    if($query['franchise'] == '0'){
  

    //activate user using pin
    $activateuser="UPDATE `user` SET franchise='1' where userid='$userid'";
    $run=mysqli_query($db,$activateuser);
    mysqli_query($db,"insert into franch_user(userid) values ('$userid')");
     echo "<h2 style='color:green'>User Activated to Franchise</h2>";


    
 $placer = $query['placement_id'];
 $pos = $query['position'];
 
 

 function find_user_position($sponcer)
 {

   global $db;
   $query = mysqli_query($db, "select * from user where userid='$sponcer'");
   $data = mysqli_fetch_array($query);

   $pos = $data['position'];
   if ($pos == 'L') {
     $pos = "franch_left";
   } else {
     $pos = "franch_right";
   }
   return $pos;
 }
 
function find_placement_id($sponcerid)
{
 global $db;

 $query = mysqli_query($db, "select * from user where userid='$sponcerid'");
 $result = mysqli_fetch_array($query);
 return $result['placement_id'];
}

function binary_count($placer, $pos)
{
   echo "in binary  ";
 if ($pos == 'L') {
   $pos = "franch_left";
   
 } else {
   $pos = "franch_right";
   
 }

echo $placer;

 while ($placer != '') {
   global $db;
  
 echo "while";
   mysqli_query($db, "update `income` set `$pos` =`$pos` + '1' where userid='$placer'");
   
   echo $pos;
   echo "after  while  ";
   $pos = find_user_position($placer);
   $placer = find_placement_id($placer);
 }
}


binary_count($placer,$pos);   
}   
  else {
         echo "<h2 style='color:red'>User already have franchise, Please check again userid</h2>";
    }
   





    }
   
    

?>