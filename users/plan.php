<?php 

include("include/dbcon.php");

global $db;

$sql=mysqli_query($db,"select * from user where id !=''");
while($row = mysqli_fetch_assoc($sql)){

    $userid = $row['userid'];
    $sponcerid = $row['sponcerid'];
    $name = $row['name'];

mysqli_query($db,"insert into plan(userid,sponcerid,name) values ('$userid','$sponcerid','$name')");




}

?>