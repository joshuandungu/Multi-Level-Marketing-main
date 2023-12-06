<?php

include("include/dbcon.php");
include("include/login_check.php");


if(isset($_POST['close'])) {
  
  
    

  

    //activate user using pin
    $activateuser="UPDATE `admin` SET status='0' where userid='Admin2020'";
    $run=mysqli_query($db,$activateuser);
     echo "<h2 color:red>Site closed Successfully !</h3>";

   
    
}elseif(isset($_POST['open'])) {
  
  
    

  

    //activate user using pin
    $activateuser="UPDATE `admin` SET status='1' where userid='Admin2020'";
    $run=mysqli_query($db,$activateuser);
     echo "<h2 color:red>Site Open Successfully !</h3>";

   
    
} 
?>