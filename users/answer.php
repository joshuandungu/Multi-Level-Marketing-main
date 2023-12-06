<?php
include_once("include/dbcon.php");
error_reporting(0);
$userid= $_GET['userid'];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply to User</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>

   
    <div class="contact-section">
   
      <div class="contact-form">
        <h2>Reply From Company</h2>
        <form class="contact" action="replysucess.php" method="GET">
         
       
          <textarea name="msg" rows="5" placeholder="No reply !" readonly></textarea>
          <input type="submit" name="reply" class="send-btn" value="Reply">
          <input type="submit" name="submit" class="send-btn" value="Delete">
        </form>
       
      
      </div>
    </div>
    
                   

  </body>
</html>