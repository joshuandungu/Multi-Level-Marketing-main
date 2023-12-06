<?php
include_once("include/dbcon.php");
error_reporting(0);
$userid= $_GET['userid'];



?>
<?php
        if(isset($_GET['sub']))
                    {
                      $userid=$_GET['userid'];
                      $msg=$_GET['msg'];
                      $lastid=mt_rand(10000,99999);
                      $msgid="RPL".$lastid; 
                   
                    $sql="INSERT INTO reply(userid, msgid, msg) VALUES ('$userid','$msgid','$msg')";
                    $data=mysqli_query($db,$sql);
                    if($data)
                    {
                      echo "<script>alert('Reply Sent Sucessfully')</script>";
                    }
                     else{
                        echo "<font color='red'>failed to update record";
                    }
                  }
              ?>