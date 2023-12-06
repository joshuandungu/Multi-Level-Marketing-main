<?php
include("include/login_check.php");
include("include/dbcon.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard | Sidhartha Nursery</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

<style>
        
       .qwerty{
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
           
        }

        d{
            height: 100px;
            width: 300px;
            background-image: linear-gradient(#16bffd, #cb3066);
         
            color: white;
            line-height: 100px;
            text-align: center;
            font-size: 20px;
            margin-top: 0px;
            box-shadow: 1px 1px 0px #000,
                        2px 2px 0px #000,
                        3px 3px 0px #000,
                        4px 4px 0px #000,
                        5px 5px 0px #000,
                        6px 6px 0px #000;
        }
        .qser{
          text-align: center;
            font-size: 15px;
            color: red;
            text-decoration: none;
        }
    </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul style="background-color: #000000" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-0">
          <?php
             $usercount="SELECT COUNT(*) FROM user where sponcerid='$_SESSION[userid]'";
             $run=mysqli_query($db,$usercount);
             $count=mysqli_fetch_assoc($run)['COUNT(*)'];

                     if($count>=25){
                    ?>
                    <img src="gold.png" width="100px">
                  
                    <?php
                      }
                     else if($count>=10){
                    ?>
                    <img src="silver.png" width="100px">
                    
                    <?php
                      }
                     else if($count<10){
                    ?>
                    <img src="basic.png" width="100px">
                  
                    <?php
                     } 
                    
                    ?>
        </div>
        <div class="sidebar-brand-text mx-3">Siddharth Agro</div>
        
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
      
      
 <!--#########----Account----############-->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseones" aria-expanded="true" aria-controls="collapseones">
        <i class="fa fa-link"></i>
          <span>Account </span>
        </a>
        <div id="collapseones" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">My Account:</h6>
             <a class="collapse-item" href="profile1.php">Profile</a>
            <?php
       
           $sql="SELECT * FROM kyc where userid='$_SESSION[userid]'";
           
           $run=mysqli_query($db,$sql);
           $num=mysqli_num_rows($run);
           if($num==1){
          
                      }
                      else{
          ?>

             <a class="collapse-item" href="kyc.php">KYC!</a>
          <?php 
                           }
    
          ?>
             <?php
       
       $username="SELECT * FROM user where userid='$_SESSION[userid]'";
       $run=mysqli_query($db,$username);
       $add=mysqli_fetch_array($run);
       $Tpin=$add['tpin'];
           if($Tpin!=""){
          ?>
          <a class="collapse-item" href="changetpin.php">Change T-pin</a>
 
          <?php
                      }
             else{
          ?>
 
          <a class="collapse-item" href="tpin.php">Create T-pin</a>
 
          <?php 
             }
    
          ?>
          <a class="collapse-item" href="changepass.php">Change Password</a>
         
          </div>
        </div>
      </li>  


  <!-- Teams -->
  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseasdf" aria-expanded="true" aria-controls="collapseasdf">
        <i class="fas fa-network-wired"></i>
          <span>Team Network</span>
        </a>
        <div id="collapseasdf" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">My Team:</h6>
            <a class="collapse-item" href="directteam.php">My Direct</a>
            <a class="collapse-item" href="fetch_left.php">Left Downline</a>
            <a class="collapse-item" href="fetch_right.php">Right Downline</a>
            <a class="collapse-item" href="tree.php">Team Tree View</a>
          </div>
        </div>
      </li>




   <!-- E-Pin Section -->
   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseshiva" aria-expanded="true" aria-controls="collapseshiva">
          <i class="fas fa-key"></i>
          <span>E-Pin</span>
        </a>
        <div id="collapseshiva" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">E-Pin Management:</h6>
            <a class="collapse-item" href="pinlistadv.php">E-Pin(1000) List</a>
              <a class="collapse-item" href="pinlist.php">E-Pin(1250) List</a>
                <a class="collapse-item" href="pinlisttwo.php">E-Pin(2000) List</a>
            
          </div>
        </div>
      </li>





 <!-- Income Report -->
 <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseshiv" aria-expanded="true" aria-controls="collapseshiv">
            
        <i class="fas fa-rupee-sign"></i>
          <span>Income Report</span>
        </a>
        <div id="collapseshiv" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Income Management:</h6>
            <a class="collapse-item" href="statement.php">Statement</a>
            <a class="collapse-item" href="income_his.php">Income History</a>
            <a class="collapse-item" href="payment_his.php">Withdrawal History</a>

           
          </div>
        </div>
      </li>


<?php
      $sql="SELECT * FROM user WHERE userid='$_SESSION[userid]'";
      $run=mysqli_query($db,$sql);
      $data=mysqli_fetch_assoc($run);
    ?>


      <!-- Refferal -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-share"></i>
          <span>Refer</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Refer:</h6>
           <a class="collapse-item" href="whatsapp://send?text=Join Now Click Here https://www.siddharthagro.in/users/refer.php?userid=<?php echo $data['userid'];?>">Refer to friends</a>
           
          </div
        </div>
      </li>


      




      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li> -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Addons -->
      <!-- </div> -->


<!-- Add New User-->
      <!--<li class="nav-item">-->
      <!--  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseonea" aria-expanded="true" aria-controls="collapseonea">-->
      <!--  <i class="fa fa-plus-square"></i>-->
      <!--    <span>Add Members</span>-->
      <!--  </a>-->
      <!--  <div id="collapseonea" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">-->
      <!--    <div class="bg-white py-2 collapse-inner rounded">-->
      <!--      <h6 class="collapse-header">Add Members:</h6>-->
      <!--      <a class="collapse-item" href="newregister.php">New Registration</a>-->
           
      <!--    </div>-->
      <!--  </div>-->
      <!--</li>-->



       
      






        <!-- Repurches -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fa fa-shopping-basket"></i>
          <span>repurchase</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">repurchase management:</h6>
            <a class="collapse-item" href="repurchase.php">repurchase</a>
         
          </div> 
        </div>
      </li> 







     
     <!--Contact-->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseoneaz" aria-expanded="true" aria-controls="collapseoneaz">
        <i class="fa fa-envelope"></i>
          <span>Help</span>
        </a>
        <div id="collapseoneaz" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Help:</h6>
            <a class="collapse-item" href="contact.php">Contact to Company</a>
           
          </div>
        </div>
      </li>
      
      
      
      
      
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      
      
      
       <!--Dwonload Pdf-->
     <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseoneazd" aria-expanded="true" aria-controls="collapseoneazd">
        <i class="fa fa-download"></i>
          <span>Dwonload PDF</span>
            </a>
         <div id="collapseoneazd" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Dwonload PDF:</h6>
            <a class="collapse-item" href="https://drive.google.com/file/d/11-BJe389H76BL0oLSVT4tJh8qPsyNetE/view?usp=sharing">Dwonload PDF</a>
           
          </div>
        </div>
      </li>
      
      
      

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav style="background-color: #000000" class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none " style="background-color: #000000">
            <i class="fa fa-bars text-light"></i>
          </button>

        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            
    <!--################################################################################################-->          

            <!-- Notification - Alerts -->
            <!--<li class="nav-item dropdown no-arrow mx-1">-->
            <!--  <a class="nav-link dropdown-toggle" href="#notify" id="alertsDropdown" >-->
            <!--    <i class="fas fa-bell fa-xs"></i>-->
                <!-- Counter - Alerts -->
                <!--<span class="badge badge-danger badge-counter">-->
                    <?php
                    //   $usercount="SELECT COUNT(*) FROM notification";
                    //   $run=mysqli_query($db,$usercount);
                    //   $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                    //   echo "$count+";
                    ?>
            <!--    </span>-->
            <!--  </a>-->
           
            <!--</li>-->

            <!-- Nav Item - Messages -->
            <!--<li class="nav-item dropdown no-arrow mx-1">-->
            <!--  <a class="nav-link dropdown-toggle" href="#msg" id="messagesDropdown" >-->
            <!--    <i class="fas fa-envelope fa-xs"></i>-->
                 <!--Counter - Messages -->
                <!--<span class="badge badge-danger badge-counter">-->
                    <?php
                    //   $usercount="SELECT COUNT(*) FROM reply where userid='$_SESSION[userid]'";
                    //   $run=mysqli_query($db,$usercount);
                    //   $count=mysqli_fetch_assoc($run)['COUNT(*)'];
                    //   echo "$count";
                    ?>
            <!--    </span>-->
            <!--  </a>-->
            <!--</li>-->

            <!--<div class="topbar-divider d-none d-sm-block"></div>-->



          
       <!--################################################################################################-->          
    
           
           
           
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2  d-lg-inline text-light text-xs">
                    
                <strong>            
                <?php
                    $username="SELECT * FROM user where userid='$_SESSION[userid]'";
                    $run=mysqli_query($db,$username);
                    $add=mysqli_fetch_array($run);
                    $USER_NAME=$add['name'];
                    $USER_NAM=$add['userid'];
                    echo $USER_NAME;
                    echo "($USER_NAM)";
                   ?>
                  </strong>  
                </span>
                <?php
                $sql="SELECT * FROM kyc where userid='$_SESSION[userid]' and img!=''";
           
                $run=mysqli_query($db,$sql);
                $num=mysqli_num_rows($run);
                $row=mysqli_fetch_array($run);
                if($num==1){
                    
                      ?>
                      <img class="img-profile rounded-circle" src="<?php echo $row['img']; ?>" width="40px">
                                           

                      <?php
                      }
                      else{
                      ?>
                         <img class="img-profile rounded-circle" src="userq.png" width="40px">
                      <?php
                      }
                      ?>
                     
                      
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <a class="dropdown-item" href= "profile1.php" name="profile">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-dark"></i>
                  Profile
                </a>
                
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-dark"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->