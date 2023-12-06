<?php
include("include/dbcon.php");
date_default_timezone_set("Asia/Kolkata");



?>

 <?php
                $sql="SELECT * FROM admin where userid='Admin2020' ";
                $run=mysqli_query($db,$sql);
                $row=mysqli_fetch_array($run);
                if($row['status']!='0'){
             ?>
 <?php
include("include/dbcon.php");
include("include/menu.php");


?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

<!--####-- CountDown Timer --####-->



   
  

<!-- <div class="qwerty">-->
  
<!--  <div class="qser" >-->
<!--    <h4>Diwali Dhamaka! </h4><br><h3>This Diwali Bring A New Bike To Your Home  <i class="fa fa-motorcycle fa-2x text-warning"></i>.....<br>-->
<!--    <a class="qser" href="offer/index.html">Get Info..  </a></h3>-->
<!--    </div>-->
<!--    <d id="demo"></d>-->
<!--</div>-->





<script>
    // var dest = new Date("dec31, 2020 23:59:59").getTime();

    // var x = setInterval(function(){

    // var now = new Date().getTime();

    // var diff = dest-now;

    // var days = Math.floor(diff/(1000 * 60 * 60 * 24));
    // console.log(days);

    // var hours = Math.floor(( diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60 ));
    // console.log(hours);

    // var minutes = Math.floor(( diff % (1000 * 60 * 60)) / (1000 * 60));
    //  console.log(minutes);

    // var seconds= Math.floor(( diff % (1000 * 60)) / 1000);
    // console.log(seconds);

    // document.getElementById("demo").innerHTML = days +"d," + hours +"Hrs:" + minutes +"min:" + seconds +"sec"}, 1000 );

</script>


<!--####-- CountDown Timer Ends --####-->
          <!-- Content Row -->
          <div class="row">





            <!-- Total Downline -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">My Downline</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $useradd="SELECT * FROM tree where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                      $TOTAL_LEFT_COUNT=$add['leftcount'];
                      $TOTAL_RIGHT_COUNT=$add['rightcount'];
                      $total_count= $TOTAL_LEFT_COUNT +  $TOTAL_RIGHT_COUNT;
                      echo $total_count;
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users  fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>






<!-- Today Left Downline -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Today Left Downline</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $useradd="SELECT * FROM tree where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                      $TOTAL_LEFT_COUNT=$add['tl_count'];
                      echo  $TOTAL_LEFT_COUNT;
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-indent  fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
    <!-- Today Right Downline -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Today Right Downline</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $useradd="SELECT * FROM tree where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                      $TOTAL_LEFT_COUNT=$add['tr_count'];
                      echo  $TOTAL_LEFT_COUNT;
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-outdent  fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          <!-- Total Direct -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Direct</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM user where sponcerid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-tag  fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
          
            
<!-- Total Active Direct -->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Active Directs</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                        $usercount="SELECT COUNT(*) FROM tree where sponcerid='$_SESSION[userid]' and sponcer_count > 2";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                                                         
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-user-plus fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
             <!-- Total Not Active Direct -->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Not Active Directs</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                       <?php
                       
                      $usercount="SELECT COUNT(*) FROM tree where sponcerid='$_SESSION[userid]' and sponcer_count < 2";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>

                                                         
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-user-times fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             


           



        

             <!-- today Balance -->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Today Balance</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      
                      
                      <?php
                       
                        $sql="SELECT * FROM income where userid='$_SESSION[userid]' ";
                        $run=mysqli_query($db,$sql);
                       $rowcount=mysqli_num_rows($run);
                      ?>
                      <?php
                      for($i=1;$i<=$rowcount;$i++)
                      {
                      $row=mysqli_fetch_assoc($run);
                      ?>

                      <?php echo $row["day_bal"]?>
                      <?php
                      }
                      ?>


                      </div>
                    </div>
                    <div class="col-auto">
                    <img class="img-sync-1" src="rupeeblue.png" width="30px">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
             

            <!--Wallet Balance -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Wallet Balance</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      
                      
                      <?php
                       
                        $sql="SELECT * FROM income where userid='$_SESSION[userid]' ";
                        $run=mysqli_query($db,$sql);
                       $rowcount=mysqli_num_rows($run);
                      ?>
                      <?php
                      for($i=1;$i<=$rowcount;$i++)
                      {
                      $row=mysqli_fetch_assoc($run);
                      ?>

                      <?php echo $row["current_bal"]?>
                      <?php
                      }
                      ?>


                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-wallet fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>




 <!-- Total Balance -->
 <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Balance</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      
                      
                      <?php
                       
                        $sql="SELECT * FROM income where userid='$_SESSION[userid]' ";
                        $run=mysqli_query($db,$sql);
                       $rowcount=mysqli_num_rows($run);
                      ?>
                      <?php
                      for($i=1;$i<=$rowcount;$i++)
                      {
                      $row=mysqli_fetch_assoc($run);
                      ?>

                      <?php echo $row["total_balance"]?>
                      <?php
                      }
                      ?>


                      </div>
                    </div>
                    <div class="col-auto">
                    <img class="img-sync-1" src="rupeeg.png" width="30px">
                    </div>
                  </div>
                </div>
              </div>
            </div>






 <!-- Last Month Balance -->
 <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Last Month Balance</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      
                      
                      <?php
                       
                        $sql="SELECT * FROM income where userid='$_SESSION[userid]' ";
                        $run=mysqli_query($db,$sql);
                       $rowcount=mysqli_num_rows($run);
                      ?>
                      <?php
                      for($i=1;$i<=$rowcount;$i++)
                      {
                      $row=mysqli_fetch_assoc($run);
                      ?>

                      <?php echo $row["last_month_income"]?>
                      <?php
                      }
                      ?>


                      </div>
                    </div>
                    <div class="col-auto">
                    <img class="img-sync-1" src="rupeegold.png" width="30px">
                    </div>
                  </div>
                </div>
              </div>
            </div>






 <!--####################################-----pin(1000)----######################################
 #################################################################################################
 #################################################################################################-->
            
          

<!-- E-Pin Management -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center ">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Available e-Pins(1000)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                      $usercount="SELECT COUNT(*) FROM pinadv where userid='$_SESSION[userid]' AND status='1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                                                         
                      </div>
                    </div>
                    <div class="col-auto">
                      <img class="img-sync-1" src="keyblue.png" width="50px">
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>








   <!-- Total Used Pin -->
   <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Used Pins(1000)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM pinadv where userid='$_SESSION[userid]' AND status='0'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <img class="img-sync-1" src="keyred.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>







 <!--####################################-----pin(1250)----######################################
 #################################################################################################
 #################################################################################################-->
            
          

<!-- E-Pin Management -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center ">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Available e-Pins(1250)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                      $usercount="SELECT COUNT(*) FROM pinlist where userid='$_SESSION[userid]' AND status='1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                                                         
                      </div>
                    </div>
                    <div class="col-auto">
                       <img class="img-sync-1" src="keyblue.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>








   <!-- Total Used Pin -->
   <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Used Pins(1250)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM pinlist where userid='$_SESSION[userid]' AND status='0'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <img class="img-sync-1" src="keyred.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>








 <!--####################################-----pin(2000)----######################################
 #################################################################################################
 #################################################################################################-->
            
          

<!-- E-Pin Management -->
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center ">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Available e-Pins(2000)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                      $usercount="SELECT COUNT(*) FROM pintwo where userid='$_SESSION[userid]' AND status='1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                                                         
                      </div>
                    </div>
                    <div class="col-auto">
                        <img class="img-sync-1" src="keyblue.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>








   <!-- Total Used Pin -->
   <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Used Pins(2000)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM pintwo where userid='$_SESSION[userid]' AND status='0'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                    <img class="img-sync-1" src="keyred.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            



  <!--####################################-----Franchise Status----######################################
 #################################################################################################
 #################################################################################################-->
 
 
<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Franchise Status</div>
                     
                      <?php

                      $sql="SELECT * FROM user where userid='$_SESSION[userid]' ";
                      $run=mysqli_query($db,$sql);
                      $row=mysqli_fetch_array($run);


                    if($row['franchise']!='0'){
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-success">
                      <?php
                    echo "Active";
                    ?> 
                    </div> 
                    <?php
                  }
                    else{
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-danger">
                      <?php
                    echo "Not Active";
                    ?>
                    </div>
                    <?php
                  }
              
                      ?>
                                                         
                      
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-certificate fa-spin fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            
            
<!--####################################-----Rewards----######################################
 #################################################################################################
 #################################################################################################-->            


<!-- Silver achivement -->
 <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Silver achivement</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      
                      
                      <?php
                       
                        $sql="SELECT * FROM income where userid='$_SESSION[userid]' ";
                        $run=mysqli_query($db,$sql);
                       $rowcount=mysqli_num_rows($run);
                      ?>
                      <?php
                      for($i=1;$i<=$rowcount;$i++)
                      {
                      $row=mysqli_fetch_assoc($run);
                      ?>

                      <?php echo $row["silver_rewards"]?>
                      <?php
                      }
                      ?>


                      </div>
                    </div>
                    <div class="col-auto">
                    <img class="img-sync-1" src="silver.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>


<!-- Gold achivement -->
 <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Gold achivement</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      
                      
                      <?php
                       
                        $sql="SELECT * FROM income where userid='$_SESSION[userid]' ";
                        $run=mysqli_query($db,$sql);
                       $rowcount=mysqli_num_rows($run);
                      ?>
                      <?php
                      for($i=1;$i<=$rowcount;$i++)
                      {
                      $row=mysqli_fetch_assoc($run);
                      ?>

                      <?php echo $row["gold_rewards"]?>
                      <?php
                      }
                      ?>


                      </div>
                    </div>
                    <div class="col-auto">
                    <img class="img-sync-1" src="gold.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
    <!--##############----Franchise Rewards----################## -->
            
             <?php
                // $sql="SELECT * FROM user where userid='$_SESSION[userid]' ";
                // $run=mysqli_query($db,$sql);
                // $row=mysqli_fetch_array($run);
                // if($row['franchise']!='0'){
              ?>  
            
             
           <!--<div class="col-xl-3 col-md-6 mb-4">-->
           <!--   <div class="card border-left-warning shadow h-100 py-2">-->
           <!--     <div class="card-body">-->
           <!--       <div class="row no-gutters align-items-center">-->
           <!--         <div class="col mr-2">-->
           <!--           <div class="text-xs font-weight-bold text-gray text-uppercase mb-1">Franchise Rewards (Lv. 1)</div>-->
                     
                     
                      <?php
                       
                    //     $sql="SELECT * FROM income where userid='$_SESSION[userid]' ";
                    //     $run=mysqli_query($db,$sql);
                    //   $rowcount=mysqli_num_rows($run);
                      ?>
                      <?php
                    //   for($i=1;$i<=$rowcount;$i++)
                    //   {
                    //   $row=mysqli_fetch_assoc($run);
                      ?>

                      <?php?>
                      <?php
                    //   }
                      ?>

                                                         
                      
            <!--        </div>-->
            <!--        <div class="col-auto">-->
            <!--            <img src="star_red.png" width="50px">-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
           
             
             
             <!--<div class="col-xl-3 col-md-6 mb-4">-->
             <!-- <div class="card border-left-info shadow h-100 py-2">-->
             <!--   <div class="card-body">-->
             <!--     <div class="row no-gutters align-items-center">-->
             <!--       <div class="col mr-2">-->
             <!--         <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Franchise Rewards (Lv. 2)</div>-->
                     
                     
                      <?php
                       
                    //     $sql="SELECT * FROM income where userid='$_SESSION[userid]' ";
                    //     $run=mysqli_query($db,$sql);
                    //   $rowcount=mysqli_num_rows($run);
                      ?>
                      <?php
                    //   for($i=1;$i<=$rowcount;$i++)
                    //   {
                    //   $row=mysqli_fetch_assoc($run);
                      ?>

                      <?php ?>
                      <?php
                    //   }
                      ?>

                                                         
                      
            <!--        </div>-->
            <!--        <div class="col-auto">-->
            <!--            <img src="rewardss.png" width="50px">-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            
            
            
            
             
           <!--<div class="col-xl-3 col-md-6 mb-4">-->
           <!--   <div class="card border-left-warning shadow h-100 py-2">-->
           <!--     <div class="card-body">-->
           <!--       <div class="row no-gutters align-items-center">-->
           <!--         <div class="col mr-2">-->
           <!--           <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Franchise Rewards (Lv. 3)</div>-->
                     
                     
                      <?php
                       
                    //     $sql="SELECT * FROM income where userid='$_SESSION[userid]' ";
                    //     $run=mysqli_query($db,$sql);
                    //   $rowcount=mysqli_num_rows($run);
                      ?>
                      <?php
                    //   for($i=1;$i<=$rowcount;$i++)
                    //   {
                    //   $row=mysqli_fetch_assoc($run);
                      ?>

                      <?php ?>
                      <?php
                    //   }
                      ?>

                                                         
                      
                <!--    </div>-->
                <!--    <div class="col-auto">-->
                <!--        <img src="wreath_green.png" width="50px">-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
              
            
            <?php
                    //   }
                      ?>
 <!--           </div>-->
 <!--</div>-->

<!--************************* Product status *************************************-->
           

           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center ">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Product Status</div>
                     
                      <?php

                      $sql="SELECT * FROM user where userid='$_SESSION[userid]' ";
                      $run=mysqli_query($db,$sql);
                      $row=mysqli_fetch_array($run);


                    if($row['product_status']!='0'){
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-success">
                      <?php
                    echo "Dlivered";
                    ?> 
                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-gift fa-2x text-success"></i>
                    </div>
                    <?php
                  }
                    else{
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-danger">
                      <?php
                    echo "Pending";
                    ?>
                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-gift fa-2x text-danger"></i>
                    </div>
                    <?php
                  }
              
                      ?>
                                                         
                
                   </div>
                  </div>  
                </div>
              </div>
            </div>
            
          <!-- Content Row -->

          <div class="row"> 
          
          
            <!-- ############----Income chart------############ -->
                    
            <div class="col-xl-4 col-lg-5">
              <div style="background-color: orange" class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header bg-dark py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-info">INCOME DETAILS</h6>
                  <div class="dropdown no-arrow">
                     
                   
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                  
                
             <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
              
                    
                    <th class="m-0 font-weight-bold text-primary">INCOME</th>
                    <th class="m-0 font-weight-bold text-primary">Amount</th>
                    </tr>
                  </thead>

                 <tbody>
                 <tr>
                 
                 <?php
                 $sql="SELECT * FROM income where userid='$_SESSION[userid]' ";
                 $run=mysqli_query($db,$sql);
                 $row=mysqli_fetch_array($run);
                 ?>


                 <td class="m-0 font-weight-bold text-white">DIRECT INCOME</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['direct_bal']; ?></td>
                 </tr> 
                 <tr>
                 <td class="m-0 font-weight-bold text-white">MATCHING INCOME</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['matching_bal']; ?></td>
                 </tr> 
                 <tr>
                 <td class="m-0 font-weight-bold text-white">SPONCERING BONUS</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['sponcering_bal']; ?></td>
                 </tr> 
                 </tbody>
                  
                      
                </table>
              </div>
            </div>
          </div>

     
          </div></div>
          
          
          
          
          
          

            <!--##########----DOWNLINE Chart----###########-->
            <div class="col-xl-8 col-lg-7 ">
              <div style="background-color: orange" class="card shadow mb-4 ">
                <!-- Card Header - Dropdown -->
                <div class="card-header  bg-dark py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-info">MY direct</h6>
                 
                 
               </div>
                <!-- Card Body -->
                <div class="card-body ">
                  
                  <div class="table-responsive">
                  <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    
                    <th class="m-0 font-weight-bold text-primary">Directs</th>
                    <th class="m-0 font-weight-bold text-primary">Left</th>
                    <th class="m-0 font-weight-bold text-primary">Right</th>
                  
                    </tr>
                  </thead>
                  <?php
                  
                   $sql="SELECT * FROM tree where sponcerid='$_SESSION[userid]' ";
                   $run=mysqli_query($db,$sql);
                  $rowcount=mysqli_num_rows($run);
                  ?>
                  <?php
                  for($i=1; $i<=$rowcount; $i++)
                {
                   $row=mysqli_fetch_array($run);

                  
                   ?>
                    
                 <tbody>
                
                
                
                 
                
               
                
                 <tr>
                 
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['userid']; ?></td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['leftcount']; ?></td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['rightcount']; ?></td>
               

 
                 
                   <?php
                }
                ?>
                 </tr> 
                 
                 </tbody>
                  
                      
                </table>
                </div> 
                  </div>
                </div>
             
            </div>


        <!-- /.container-fluid -->

      </div>
      
      
      
      
      
      
    <!--############-----messeges----##############--!>  
      <div class="row"> 
      <!-- Pie Chart -->
            <div class="col-xl-6 col-lg-5" id="notify">
              <div style="background-color: #f3e6ff" class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header bg-dark py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-info">Latest News</h6>
                  <div class="dropdown no-arrow">
                     
                   
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                 
                
             <div class="card-body">
              <div class="table-responsive">
                   <?php
               $sql="SELECT *FROM notification";
               $run=mysqli_query($db,$sql);
               $rowcount=mysqli_num_rows($run);
               
                 ?> 
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
              
                  
                  
                    </tr>
                  </thead>

                  <?php
                
                for($i=1; $i<=$rowcount; $i++)
                {
                   $row=mysqli_fetch_array($run);

                ?>


                  <tbody>
                    <tr>
                      <td class="m-0 font-weight-bold text-danger text-center"><?php echo $row['date']; ?></td>  
                      <td class="m-0 font-weight-bold text-danger text-center"><?php echo $row['msg']; ?></td>  
                 <?php
                    }
                    ?>
                 </tr> 
                
                 </tbody>
                  
                      
                </table>
              </div>
            </div>
          </div>
        </div>
     
          </div>


   
               <!-- Pie Chart -->
            <div class="col-xl-6 col-lg-5" id="msg">
              <div style="background-color:#f3e6ff" class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header bg-dark py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-info">Message From Company</h6>
                  <div class="dropdown no-arrow">
                     
                   
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  
                 
                
             <div class="card-body">
              <div class="table-responsive">
                   <?php
                $username="SELECT * FROM reply where userid='$_SESSION[userid]'";
               $run=mysqli_query($db,$username);
               $rowcount=mysqli_num_rows($run);
               
                 ?> 
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
              
                  
                  
                    </tr>
                  </thead>

                  <?php
                
                for($i=1; $i<=$rowcount; $i++)
                {
                   $row=mysqli_fetch_array($run);

                ?>


                  <tbody>
                    <tr>
                      <td class="m-0 font-weight-bold text-dark text-center"><?php echo $row['date']; ?></td>  
                     <td class="m-0 font-weight-bold text-dark text-center"><?php echo $row['msg']; ?></td>  
                 <?php
                    }
                    ?>
                 </tr> 
                
                 </tbody>
                  
                      
                </table>
              </div>
            </div>
          </div>
        </div>
     
          </div></div>

      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Siddhartha Agro 2020</span>
          </div>
        </div>
      </footer>
     

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
           $sql="SELECT * FROM kyc where userid='$_SESSION[userid]'";
           
           $run=mysqli_query($db,$sql);
           $num=mysqli_num_rows($run);
           if($num==1){
          
                      }
                      else{
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
    
          ?>
</body>


</html>
        <?php
             }
             else{
      
         header('location:maintanance/maintenance.html');
        
                }
        ?>