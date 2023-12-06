<?php

include("include/dbcon.php");
include("include/login_check.php");


?>

<?php
include("include/dbcon.php");

if(isset($_POST['change'])){
  $userid=$_SESSION[userid];
  $tpin=$_POST['tpin'];
  $ntpin=$_POST['ntpin'];
  $rntpin=$_POST['rntpin'];
  
  $sqlcp="SELECT *FROM user where userid='$userid' and tpin='$tpin'";
  $runcp=mysqli_query($db,$sqlcp);
  $num=mysqli_num_rows($runcp);

if($num==1){
if( $ntpin== $rntpin){     
   
    $activatuser="UPDATE `user` SET tpin='$ntpin' where userid='$userid'";
    $run=mysqli_query($db,$activatuser);
    ?>
    <script>
              alert('T-pin changed sucessfully');
    </script>
    <?php
}
else{
  ?>
    <script>
    alert('T-pin Not Matched.....');
    </script>
 <?php  
}
}
else{
    ?>
    <script>
    alert('Plesae enter correct Current T-pin');
    </script>
 <?php
}
}
?>
<h2>Your Userid is <?php echo "$userid"?> and T-pin is <?php
                     $add="SELECT * FROM user where userid='$_SESSION[userid]'";
                     $run=mysqli_query($db,$add);
                     $addr=mysqli_fetch_array($run);
                     $ADDRESS=$addr['tpin'];
                    echo $ADDRESS;
                  ?> !</h2>