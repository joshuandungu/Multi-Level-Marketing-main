
<?php
session_start();
include("include/dbcon.php");
global $db;


$query = "SELECT * FROM `user` WHERE id!=''";
$result = mysqli_query($db,$query) ;



while($row = mysqli_fetch_assoc($result)){

    $name = $row['name'];
    mysqli_query($db,"update `income` set name = '$name' where userid = '$row[userid]'");
}
?>