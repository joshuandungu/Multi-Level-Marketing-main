<?php

include("include/dbcon.php");
include("include/login_check.php");

$sql="SELECT *FROM user";
$run=mysqli_query($db,$sql);
$data=mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>

   
    <div class="contact-section">
      <div class="contact-info">
        <!--<div><i class="fas fa-map-marker-alt"></i>Dharjori more, Bhuli, Dhanbad, JH-828105</div>-->
        <!--<div><i class="fas fa-envelope"></i>info@siddharthagro.in</div>-->
        <!--<div><i class="fas fa-phone"></i>1234567890</div>-->
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="contactsucess.php" method="post">
          <input type="text" name="userid" class="text-box" placeholder="Your Name" value="<?php echo $_SESSION['userid']; ?>" readonly>
          <input type="text" name="name" class="text-box" placeholder="Your Email" value="<?php
                    $username="SELECT * FROM user where userid='$_SESSION[userid]'";
                    $run=mysqli_query($db,$username);
                    $add=mysqli_fetch_array($run);
                    $USER_NAME=$add['name'];
                    echo $USER_NAME;
                   ?>"readonly>
          <input type="email" name="email" class="text-box" placeholder="Your Email" value="<?php
                    $username="SELECT * FROM user where userid='$_SESSION[userid]'";
                    $run=mysqli_query($db,$username);
                    $add=mysqli_fetch_array($run);
                    $USER_NAME=$add['email'];
                    echo $USER_NAME;
                   ?>"readonly>         
          <textarea name="msg" rows="5" placeholder="Your Message (word limit 100!)............" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    

  </body>
</html>