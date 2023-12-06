<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ngo";


//connection
$db= new mysqli($servername, $username, $password, $dbname);

//check conn
if($db==false){
    echo "connection failed";
}
if(isset($_SESSION['userid']) && isset($_SESSION['userid'])){
    $my_id=$_SESSION['userid'];
}
else {
    // echo "done";
}
error_reporting(0);

?>