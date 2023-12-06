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

  <title> Sup Admin | Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-0">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sidhartha Agro Admin </sup></div>
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
        SKU 
      </div>
       <!-- Stock managments -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseasdfgd" aria-expanded="true" aria-controls="collapseasdfgd">
          <i class="fa fa-cubes"></i>
          <span>Stock managment</span>
        </a>
        <div id="collapseasdfgd" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Stock Managments:</h6>
            <a class="collapse-item" href="add_item.php">Add item</a>
            <a class="collapse-item" href="stock_me.php">Alot Self Stock</a>
            <a class="collapse-item" href="stock_me_list.php">Stock List</a>
          </div>
        </div>
      </li>
      
       <!-- Product managments -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseasdfgda" aria-expanded="true" aria-controls="collapseasdfgda">
       <i class="fab fa-linode"></i>
          <span>Product managment</span>
        </a>
        <div id="collapseasdfgda" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Product Managment:</h6>
            <a class="collapse-item" href="stock_plant.php">Plant List</a>
            <a class="collapse-item" href="stock_seeds.php">Seeds List</a>
            <a class="collapse-item" href="stock_equip.php">Equipment List</a>
            <a class="collapse-item" href="stock_bio.php">Bio Fertilizer List</a>
            <a class="collapse-item" href="stock_per.php">Personal Care List</a>
            <a class="collapse-item" href="stock_heal.php">Health Care List</a>
            
          </div>
        </div>
      </li>
      
      
      
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>





      <!-- Sub Admin managments -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseasdfg" aria-expanded="true" aria-controls="collapseasdfg">
          <i class="fa fa-user-circle"></i>
          <span>Sub Admin managment</span>
        </a>
        <div id="collapseasdfg" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub Admin Managments:</h6>
            <a class="collapse-item" href="subadminreg.php">Add Sub Admin</a>
            <a class="collapse-item" href="subadminlist.php">Sub Admin List</a>
            <a class="collapse-item" href="stock_admin.php">Alot Stock to Sub Admin</a>
          </div>
        </div>
      </li>
      
      
      
    


   <!-- Franchise Dealer managments -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseasdfgu" aria-expanded="true" aria-controls="collapseasdfgu">
        <i class="fas fa-user-tag"></i>
          <span>Stockist managment</span>
        </a>
        <div id="collapseasdfgu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Stockist Managments:</h6>
            <a class="collapse-item" href="agencyreg.php">Add Stockist</a>
            <a class="collapse-item" href="agencylist.php">Stockist List</a>
            <a class="collapse-item" href="stock_agent.php">Alot Stock to Stockist</a>
          </div>
        </div>
      </li>

  <!-- Members managments -->
  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseasdf" aria-expanded="true" aria-controls="collapseasdf">
          <i class="fas fa-users"></i>
          <span>Members managment</span>
        </a>
        <div id="collapseasdf" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Member Managments:</h6>
            <a class="collapse-item" href="userlist.php">User List</a>
            <!--<a class="collapse-item" href="freeuser.php">Free User List</a>-->
            <a class="collapse-item" href="notactiveuser.php">Not Active User List</a>
            <a class="collapse-item" href="treeview.php">Tree View</a>
            <a class="collapse-item" href="pair.php">Today's Pair List</a>
          </div>
        </div>
      </li>





      
     
           <!-- Accounts managments -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseasd" aria-expanded="true" aria-controls="collapseasd">
          <i class="fab fa-rust"></i>
          <span>MLM managment</span>
        </a>
        <div id="collapseasd" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">MLM Managments:</h6>
             <!--<a class="collapse-item" href="nkincomelist.php">weekly Income</a>-->
             <a class="collapse-item" href="revenuelist.php">Total Revenue </a>
             <a class="collapse-item" href="incomelist.php">Due List</a>
             <!--<a class="collapse-item" href="tdslist.php">KYC TDS %</a>-->
             <a class="collapse-item" href="dueincome.php">Due status</a>
           
          </div>
        </div>
      </li>   
      

 
        <!-- repur Accounts managments -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseasdh" aria-expanded="true" aria-controls="collapseasdh">
          <i class="fas fa-cogs"></i>
          <span>Repurchase managment</span>
        </a>
        <div id="collapseasdh" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Repurchase Managments:</h6>
             <!--<a class="collapse-item" href="nkincomelist.php">weekly Income</a>-->
             <a class="collapse-item" href="revenuelist_pur.php">Total Revenue </a>
             <a class="collapse-item" href="incomelist_pur.php">Due List</a>
             <!--<a class="collapse-item" href="tdslist.php">KYC TDS %</a>-->
             <a class="collapse-item" href="dueincome_pur.php">Due status</a>
           
          </div>
        </div>
      </li>   
 
  <!-- Rewards managment Section -->
   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseshaivq" aria-expanded="true" aria-controls="collapseshaivq">
          <i class="fa fa-trophy"></i>
          <span>Rewards managment</span>
        </a>
        <div id="collapseshaivq" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Rewards managment:</h6>
             <a class="collapse-item" href="silver.php">Silver Rewards</a>
             <a class="collapse-item" href="gold.php">Gold Rewards</a>
             <!--<a class="collapse-item" href="franch_25.php">Franchise lv.1</a>-->
             <!--<a class="collapse-item" href="franch_50.php">Franchise lv.2</a>-->
             <!--<a class="collapse-item" href="franch_100.php">Franchise lv.3</a>-->
          </div>
        </div>
      </li>
      

 <!-- Advance Pin(1000) Section -->
   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseshaiv" aria-expanded="true" aria-controls="collapseshaiv">
          <i class="fas fa-key"></i>
          <span>Advance E-Pin(1000)</span>
        </a>
        <div id="collapseshaiv" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Advance Pin Management:</h6>
            <a class="collapse-item" href="adpin.php">Genrate Advance Pin</a>
            <a class="collapse-item" href="advadmin.php">Admin Pin</a>
            <a class="collapse-item" href="advtotalpin.php">Pin List</a>
            <a class="collapse-item" href="advtotalusedpin.php">Used Pin List</a>
            <a class="collapse-item" href="advtotalactivepin.php">New Pin List</a>
          </div>
        </div>
      </li>
      
      
      

      
      
   <!-- E-Pin Section -->
   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseshiv" aria-expanded="true" aria-controls="collapseshiv">
          <i class="fas fa-key"></i>
          <span>E-Pin(1250)</span>
        </a>
        <div id="collapseshiv" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">E-Pin Management:</h6>
            <a class="collapse-item" href="pingen.php">Genrate E-Pin</a>
            <a class="collapse-item" href="adminpin.php">Admin Pin</a>
            <a class="collapse-item" href="totalpin.php">Pin List</a>
            <a class="collapse-item" href="totalusedpin.php">Used Pin List</a>
            <a class="collapse-item" href="totalactivepin.php">New Pin List</a>
          </div>
        </div>
      </li>



   
   
   
   
   
      
      <!-- Pin(2000) Section -->
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseshivqa" aria-expanded="true" aria-controls="collapseshivqa">
          <i class="fas fa-key"></i>
          <span> Pin(2000)</span>
        </a>
        <div id="collapseshivqa" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Pin(2000) Management:</h6>
            <a class="collapse-item" href="twopin.php">Genrate Pin(2000) </a>
             <a class="collapse-item" href="twoadmin.php">Admin Pin</a>
            <a class="collapse-item" href="twototalpin.php">Pin List</a>
            <a class="collapse-item" href="twototalusedpin.php">Used Pin List</a>
            <a class="collapse-item" href="twototalactivepin.php">New Pin List</a>
          </div>
        </div>
      </li>
      
    


<!-- Free Pin Section -->
<!--<li class="nav-item">-->
<!--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseshivq" aria-expanded="true" aria-controls="collapseshivq">-->
<!--          <i class="fas fa-key"></i>-->
<!--          <span>Free Pin</span>-->
<!--        </a>-->
<!--        <div id="collapseshivq" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">-->
<!--          <div class="bg-white py-2 collapse-inner rounded">-->
<!--            <h6 class="collapse-header">Free Pin Management:</h6>-->
<!--            <a class="collapse-item" href="freepingen.php">Genrate Free Pin</a>-->
<!--            <a class="collapse-item" href="freeadmin.php">Admin Pin</a>-->
<!--            <a class="collapse-item" href="freepin.php">Pin List</a>-->
<!--            <a class="collapse-item" href="freetotalusedpin.php">Used Pin List</a>-->
<!--            <a class="collapse-item" href="freetotalactivepin.php">New Pin List</a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </li>-->



 <!-- Franchise Section -->
 <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseshivm" aria-expanded="true" aria-controls="collapseshivm">
          <i class="fas fa-certificate"></i>
          <span>Franchise Management</span>
        </a>
        <div id="collapseshivm" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Franchise Management:</h6>
            <a class="collapse-item" href="activatebypin.php">Activate to Franchise </a>
            <a class="collapse-item" href="franchise.php">Franchise User List</a>
            <a class="collapse-item" href="notfranch.php">Not Franchise User List</a>
           
          </div>
        </div>
      </li>




     <!-- Add New User-->
<!--<li class="nav-item">-->
<!--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseonea" aria-expanded="true" aria-controls="collapseonea">-->
<!--        <i class="fa fa-plus-square"></i>-->
<!--          <span>Add Members</span>-->
<!--        </a>-->
<!--        <div id="collapseonea" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">-->
<!--          <div class="bg-white py-2 collapse-inner rounded">-->
<!--            <h6 class="collapse-header">Add Members:</h6>-->
            <!--<a class="collapse-item" href="newregister.php">New Registration</a>-->
            <!--<a class="collapse-item" href="freeregister.php">Free Registration</a>-->
           
      <!--    </div>-->
      <!--  </div>-->
      <!--</li>-->





    

     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      
<!-- Bill portal-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseonezqq" aria-expanded="true" aria-controls="collapseonezqq">
        <i class="fa fa-shopping-bag"></i>
          <span>Repurchase</span>
        </a>
        <div id="collapseonezqq" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Repurchase:</h6>
              <a class="collapse-item" href="bill.php">Repurchase Billing</a>
            
           
          </div>
        </div>
      </li>






       <!-- massege portal-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseonez" aria-expanded="true" aria-controls="collapseonez">
        <i class="fa fa-envelope"></i>
          <span>Message Portal</span>
        </a>
        <div id="collapseonez" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">View Message:</h6>
              <a class="collapse-item" href="senduser.php">Send Msg to User</a>
            <a class="collapse-item" href="usermsg.php">User Messages</a>
            <!--<a class="collapse-item" href="enquiry.php">Enquiry Messages</a>-->
            <a class="collapse-item" href="replylist.php">Replied Messages</a>
            
           
          </div>
        </div>
      </li>



<!--*************************** Notification  portal *************************************-->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseoneza" aria-expanded="true" aria-controls="collapseoneza">
        <i class="fa fa-envelope"></i>
          <span>Notification Portal</span>
        </a>
        <div id="collapseoneza" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Notification Portal:</h6>
            <a class="collapse-item" href="notification.php">Send Notification</a>
            <a class="collapse-item" href="notifylist.php">Veiw Sent Notification</a>
            
           
          </div>
        </div>
      </li>
      
      
      
      
  <!-- Site Management -->
  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseassdf" aria-expanded="true" aria-controls="collapseassdf">
          <i class="fa fa-server"></i>
          <span>Site Management</span>
        </a>
        <div id="collapseassdf" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Site Management:</h6>
            <a class="collapse-item" href="site.php">Site Management</a>
           
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
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           

            
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                
                <?php
                  
                    if($_SESSION['userid'] ){

                   echo $_SESSION['userid'];

                    }
                ?>
          
                
                
                </span>
                <img class="img-profile rounded-circle" src="proa.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->