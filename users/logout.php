<?php
  
 session_start();
 unset($_SESSION['last_active_time']);
 unset($_SESSION['login']);
 unset($_SESSION['userid']);
 header("location:login.php");


?>