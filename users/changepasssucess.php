<?php

include("include/dbcon.php");
include("include/login_check.php");


?>

<?php
include("include/dbcon.php");

if(isset($_POST['change'])){
  $userid=$_SESSION[userid];
  $password=$_POST['password'];
  $npassword=$_POST['newpassword'];
  $rnpassword=$_POST['rnewpassword'];
  
  $sqlcp="SELECT *FROM user where userid='$userid' and password='$password'";
  $runcp=mysqli_query($db,$sqlcp);
  $num=mysqli_num_rows($runcp);
if($npassword==$rnpassword){ 
if($num==1){
    
   
    $activatuser="UPDATE `user` SET password='$npassword' where userid='$userid'";
    $run=mysqli_query($db,$activatuser);
    ?>
    <script>
              alert('Password changed sucessfully');
    </script>
    <?php
}

else{
    ?>
    <script>
    alert('Plesae enter correct Current Password');
    </script>
 <?php
}
}
else{
  ?>
    <script>
    alert('Password Not Matched.....');
    </script>
 <?php  
}
}
?>
<h2>Your Userid is <?php echo "$userid"?> and password is <?php
                     $add="SELECT * FROM user where userid='$_SESSION[userid]'";
                     $run=mysqli_query($db,$add);
                     $addr=mysqli_fetch_array($run);
                     $ADDRESS=$addr['password'];
                    echo $ADDRESS;
                  ?> !</h2>