<?php
include("include/dbcon.php");
include("include/menu.php");


?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">


<!--************************* Total Sub Admins *************************************-->
         
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Sub Admin</div>
                      <div class="h5 mb-0 font-weight-bold text-dark-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM subadmin";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-user-circle fa-2x text-dark"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



<!--************************* Total Stockist *************************************-->
         
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Stockist</div>
                      <div class="h5 mb-0 font-weight-bold text-dark-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM agency";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <img class="img-sync-1" src="pros.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>






 <!--******************************** Total Users *********************************-->
            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Users</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM user";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                                                         
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          



 <!--************************************* Total Day Joining **************************************-->
          
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Yesterday Total Joining</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                    <?php
                    $username="SELECT * FROM joining ";
                    $run=mysqli_query($db,$username);
                    $add=mysqli_fetch_array($run);
                    $USER_NAME=$add['joined'];
                    echo $USER_NAME;
                   ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-user-secret fa-2x text-dark"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
             <!--************************************* Total  Withdrawal **************************************-->
          
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Daily Withdrawal</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                     <?php
                    $username="SELECT * FROM joining";
                    $run=mysqli_query($db,$username);
                    $add=mysqli_fetch_array($run);
                    $USER_NAME=$add['day_bal'];
                    echo $USER_NAME;
                   ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                     <img class="img-sync-1" src="rupeem.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
              <!--************************************* Last BV Pair **************************************-->
          
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Last BV Pair </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                     <?php
                    $username="SELECT * FROM joining";
                    $run=mysqli_query($db,$username);
                    $add=mysqli_fetch_array($run);
                    $USER_NAME=$add['day_bal'];
                    echo $USER_NAME;
                   ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                     <i class="fa fa-people-arrows fa-2x text-dark"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
              <!--************************************* Last  CTO **************************************-->
          
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Last CTO</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                     <?php
                    $username="SELECT * FROM joining";
                    $run=mysqli_query($db,$username);
                    $add=mysqli_fetch_array($run);
                    $USER_NAME=$add['day_bal'];
                    echo $USER_NAME;
                   ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                     <i class="fa fa-money-bill-alt fa-2x text-dark"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
 <!--************************************* Total Active Users **************************************-->
          
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Active User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM user where left_side!='' and right_side!=''";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-plus fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
<!--**************************************** Total Not Active Users ********************************************-->
          
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Not Active User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM user where left_side='' or right_side=''";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-times fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>





           


 <!--********************************** Franchise Management *******************************************-->
         
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Franchise Members</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM user where franchise='1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-certificate fa-spin fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



<!--************************************ Not Franchise Management *****************************************8-->
            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Not Franchise Members</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM user where franchise='0'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-times-circle fa-spin fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


<!--####################################-----pin(1000)----######################################
 #################################################################################################
 #################################################################################################-->


  <!-- Total Pin Generated -->
  <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Advance e-Pins(1000)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM pinadv";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                     <img class="img-sync-1" src="keyy.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>




            <!-- Total Active Pin -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> New Advance e-Pins(1000)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM pinadv where status='1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                    <img class="img-sync-1" src="keyblu.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>




             <!-- Total Used Pin -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Used Advance e-Pins(1000)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM pinadv where status='0'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                    <img class="img-sync-1" src="keyr.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
      <!--####################################-----pin(1250)----######################################
 #################################################################################################
 #################################################################################################-->      
            
            
            
            
            
            <!-- Total Pin Generated -->
  <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total e-Pins(1250)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM pinlist";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <img class="img-sync-1" src="keyy.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>




            <!-- Total Active Pin -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> New e-Pins(1250)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM pinlist where status='1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                     <img class="img-sync-1" src="keyblu.png" width="50px">
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
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Used e-Pins(1250)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM pinlist where status='0'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                     <img class="img-sync-1" src="keyr.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
 <!--####################################-----pin(2000)----######################################
 #################################################################################################
 #################################################################################################-->
            
            
            
            
            

<!-- Total Pin Generated -->
  <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total e-pin(2000)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM pintwo";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <img class="img-sync-1" src="keyy.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>




            <!-- Total Active Pin -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> New e-pin(2000)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM pintwo where status='1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <img class="img-sync-1" src="keyblu.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>




             <!-- Total Used Pin -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Used e-pin(2000)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM pintwo where status='0'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <img class="img-sync-1" src="keyr.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
            
 <!--####################################-----Free Pin----######################################
  #################################################################################################
 #################################################################################################-->
            
            


<!-- Total Free Pins Generated -->
<!--<div class="col-xl-3 col-md-6 mb-4">-->
<!--              <div class="card border-left-warning shadow h-100 py-2">-->
<!--                <div class="card-body">-->
<!--                  <div class="row no-gutters align-items-center">-->
<!--                    <div class="col mr-2">-->
<!--                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Free Pins</div>-->
<!--                      <div class="h5 mb-0 font-weight-bold text-gray-800">-->
                      
                      <?php
                    //   $usercount="SELECT COUNT(*) FROM freepin";
                    //   $run=mysqli_query($db,$usercount);
                    //   $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                    //   echo $count;
                      ?>
                      
            <!--          </div>-->
            <!--        </div>-->
            <!--        <div class="col-auto">-->
            <!--         <img class="img-sync-1" src="keyy.png" width="50px">-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->




            <!-- Total Active Free Pinsn -->
           <!--<div class="col-xl-3 col-md-6 mb-4">-->
           <!--   <div class="card border-left-info shadow h-100 py-2">-->
           <!--     <div class="card-body">-->
           <!--       <div class="row no-gutters align-items-center">-->
           <!--         <div class="col mr-2">-->
           <!--           <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Active Free Pins</div>-->
           <!--           <div class="h5 mb-0 font-weight-bold text-gray-800">-->
                      
                      <?php
                    //   $usercount="SELECT COUNT(*) FROM freepin where status='1'";
                    //   $run=mysqli_query($db,$usercount);
                    //   $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                    //   echo $count;
                      ?>
                      
            <!--          </div>-->
            <!--        </div>-->
            <!--        <div class="col-auto">-->
            <!--         <img class="img-sync-1" src="keyblu.png" width="50px">-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->




             <!-- Total Used free Pin -->
           <!--<div class="col-xl-3 col-md-6 mb-4">-->
           <!--   <div class="card border-left-warning shadow h-100 py-2">-->
           <!--     <div class="card-body">-->
           <!--       <div class="row no-gutters align-items-center">-->
           <!--         <div class="col mr-2">-->
           <!--           <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Used free Pins</div>-->
           <!--           <div class="h5 mb-0 font-weight-bold text-gray-800">-->
                      
                      <?php
                    //   $usercount="SELECT COUNT(*) FROM freepin where status='0'";
                    //   $run=mysqli_query($db,$usercount);
                    //   $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                    //   echo $count;
                      ?>
                      
            <!--          </div>-->
            <!--        </div>-->
            <!--        <div class="col-auto">-->
            <!--          <img class="img-sync-1" src="keyr.png" width="50px">-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            


 <!--####################################-----REWARDS----######################################
  #################################################################################################
 #################################################################################################-->
 
 
             <!-- Silver Reward -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-gray text-uppercase mb-1">Silv Reward Achiever</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                        $usercount="SELECT COUNT(*) FROM income where silver_status='1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                       <img src="silver.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
               <!-- Gold Reward -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Gold Reward Achiever</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                       $usercount="SELECT COUNT(*) FROM income where gold_status='1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                     <img src="gold.png" width="50px">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
    <!--####################################-----Repurchase----######################################
  #################################################################################################
 #################################################################################################-->
 
 
             <!--  Car Fund Achiever -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-gray text-uppercase mb-1">Car Fund Achiever</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                        $usercount="SELECT COUNT(*) FROM plan where carfund_status='1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                       <i class="fa fa-car fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
            
            
            
            
               <!--  House Fund Achiever -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-gray text-uppercase mb-1">House Fund Achiever</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM plan where homefund_status='1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                       <i class="fa fa-house-user fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
            
            
            
            
            
                
               <!--  Tour Fund Achiever -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-gray text-uppercase mb-1">Tour Fund Achiever</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM plan where tourfund_status='1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                       <i class="fa fa-route fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
            
            
            
            
            
               <!--  Royality Fund Achiever -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-gray text-uppercase mb-1">Royality Fund Achiever</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM plan where royalityfund_status='1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      </div>
                    </div>
                    <div class="col-auto">
                       <i class="fa fa-crown fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
            
               <!-- Franch_25 Reward -->
           <!--<div class="col-xl-3 col-md-6 mb-4">-->
           <!--   <div class="card border-left-warning shadow h-100 py-2">-->
           <!--     <div class="card-body">-->
           <!--       <div class="row no-gutters align-items-center">-->
           <!--         <div class="col mr-2">-->
           <!--           <div class="text-xs font-weight-bold text-gray text-uppercase mb-1">Franch_25 Achiever</div>-->
           <!--           <div class="h5 mb-0 font-weight-bold text-gray-800">-->
                      
                      <?php
                    //   $usercount="SELECT COUNT(*) FROM income where Franch25_status='1'";
                    //   $run=mysqli_query($db,$usercount);
                    //   $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                    //   echo $count;
                      ?>
                      
            <!--          </div>-->
            <!--        </div>-->
            <!--        <div class="col-auto">-->
            <!--         <img src="rewards.png" width="50px">-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            
            
            
                <!-- Franch_50 Reward -->
           <!--<div class="col-xl-3 col-md-6 mb-4">-->
           <!--   <div class="card border-left-warning shadow h-100 py-2">-->
           <!--     <div class="card-body">-->
           <!--       <div class="row no-gutters align-items-center">-->
           <!--         <div class="col mr-2">-->
           <!--           <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Franch_50 Achiever</div>-->
           <!--           <div class="h5 mb-0 font-weight-bold text-gray-800">-->
                      
                      <?php
                    //   $usercount="SELECT COUNT(*) FROM income where Franch50_status='1'";
                    //   $run=mysqli_query($db,$usercount);
                    //   $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                    //   echo $count;
                      ?>
                      
            <!--          </div>-->
            <!--        </div>-->
            <!--        <div class="col-auto">-->
            <!--          <img src="reward1.png" width="50px">-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            
            
            
            
                <!-- Franch_100 Reward -->
           <!--<div class="col-xl-3 col-md-6 mb-4">-->
           <!--   <div class="card border-left-warning shadow h-100 py-2">-->
           <!--     <div class="card-body">-->
           <!--       <div class="row no-gutters align-items-center">-->
           <!--         <div class="col mr-2">-->
           <!--           <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Franch_100 Achiever</div>-->
           <!--           <div class="h5 mb-0 font-weight-bold text-gray-800">-->
                      
                      <?php
                    //   $usercount="SELECT COUNT(*) FROM income where Franch100_status='1'";
                    //   $run=mysqli_query($db,$usercount);
                    //   $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                    //   echo $count;
                      ?>
                      
            <!--          </div>-->
            <!--        </div>-->
            <!--        <div class="col-auto">-->
            <!--         <img src="reward.png" width="50px">-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            
            
            
            
            
          <!--************************* Product Dilivered *************************************-->
         
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Product Dilivered</div>
                      <div class="h5 mb-0 font-weight-bold text-dark-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM user where product_status= '1'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-gift fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>






<!--************************* Product Pending *************************************-->
         
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Product Pending</div>
                      <div class="h5 mb-0 font-weight-bold text-dark-800">
                      
                      <?php
                      $usercount="SELECT COUNT(*) FROM user where product_status= '0'";
                      $run=mysqli_query($db,$usercount);
                      $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                      echo $count;
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-gift fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            
            
            
            
            
            
            
            
            
            
            
 

           </div> 
          <!-- Content Row -->

          <!-- <div class="row"> -->

            <!-- Area Chart -->
            <!-- <div class="col-xl-8 col-lg-7"> -->
              <!-- <div class="card shadow mb-4"> -->
                <!-- Card Header - Dropdown -->
                <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div> -->
                <!-- Card Body -->
                <!-- <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Pie Chart -->
            <!-- <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4"> -->
                <!-- Card Header - Dropdown -->
                <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div> -->
                <!-- Card Body -->
                <!-- <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referral
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Siddhartha Agro 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

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

</body>

</html>
