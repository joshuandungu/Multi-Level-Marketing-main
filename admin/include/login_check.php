<?php

session_start();
if($_SESSION['userid']){

  //  echo $_SESSION['userid'];

}
else{
    header('location:login.php');
}
?>