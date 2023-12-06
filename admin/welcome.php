<?php

include("include/dbcon.php");
include("include/login_check.php");

$sql="SELECT *FROM user";
$run=mysqli_query($db,$sql);
$data=mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <title>Welcome !</title>
</head>
<body>
    <header>
    <div class="text">
            <h1>
   Welcome !<br>
   <d>
   <?php
   $username="SELECT * FROM user where userid='$_SESSION[userid]'";
                    $run=mysqli_query($db,$username);
                    $add=mysqli_fetch_array($run);
                    $USER_NAME=$add['name'];
                    echo $USER_NAME; ?></d></h1><br>
<h2>You are successfully registered with us. Your userid is "<?php echo $_SESSION['userid']; ?>" and password is "<?php echo $_SESSION['password']; ?>" 
  </h2>
  <p class="text-red">( Kindly remember your credentials for future use ! )</p>
    <a href="login.php">Login Now!</a>
        </div>
    </header>  
</body>
</html>

