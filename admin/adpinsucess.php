<?php
include("include/dbcon.php");
?>


<?php
session_start();



if(isset($_POST['generate'])) {
  
    $userid=$_POST['userid'];
    $pinno=$_POST['pinno'];


    $x=1;

    while($x<=$pinno) {
            
          $pint=pin_generate();
          $pinsql="INSERT INTO `pinadv`(`userid`, `pin`, `pinno`, `status`) VALUES ('$userid','$pint','$pinno','1')";
          $run=mysqli_query($db,$pinsql);
         
         
          $x++;
          ?> 

         <script>
    swal({
  title: "KYC Incomplete!",
  text: "Please complete your Kyc!",
  icon: "warning",
  button: "Close!",
});
</script>
    <?php
    
    

    }

    }
    //function for pin genrate
    function pin_generate()  {

        global $db;
        $lastid=mt_rand(11111,99999);
        $pint="AD".$lastid;
     
        $sql="SELECT * FROM `pinadv` WHERE pin='$pint'";
        $run= mysqli_query($db,$sql);
        if(mysqli_num_rows($run)>0){
            pin_generate();
        }
        else{
            return $pint;
        }
        }
   ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

