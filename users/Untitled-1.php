<?php
session_start();
include("include/dbcon.php");
global $db;
$querymy = "SELECT * FROM `income` WHERE id!=''";
$result = mysqli_query($db, $querymy);





while ($row = mysqli_fetch_assoc($result)) {

mysqli_query($db,"insert into monthly_user (userid) values('$row[userid]')");

}

?>