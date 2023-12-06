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
          $pinsql="INSERT INTO `pinlist`(`userid`, `pin`, `pinno`, `status`) VALUES ('$userid','$pint','$pinno','1')";
          $run=mysqli_query($db,$pinsql);
         
         
          $x++;
          ?> 

          <script>
              alert('e-pin generate sucessfully');
          </script>

    <?php
    
    

    }

    }
    //function for pin genrate
    function pin_generate()  {

        global $db;
        $lastid=mt_rand(100001,9999999);
        $pint="MP".$lastid;
     
        $sql="SELECT * FROM `pinlist` WHERE pin='$pint'";
        $run= mysqli_query($db,$sql);
        if(mysqli_num_rows($run)>0){
            pin_generate();
        }
        else{
            return $pint;
        }
        }
   ?>

