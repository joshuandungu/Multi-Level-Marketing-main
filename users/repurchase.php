<?php
include("include/dbcon.php");



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



<!--####-- CountDown Timer Ends --####-->
          <!-- Content Row -->
          <div class="row">





            <!-- Total BV -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total BV</div>
                      <div class="h5 mb-0 font-weight-bold text-dark">
                      
                      <?php
                      $useradd="SELECT * FROM plan where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                     
                     
                      echo $add['bv'];
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-network-wired  fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>





          


          
               <!-- Total Left BV -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Left BV</div>
                      <div class="h5 mb-0 font-weight-bold text-dark">
                      
                      <?php
                      $useradd="SELECT * FROM plan where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                     
                     
                      echo $add['left_bv'];
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-align-left fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
               <!-- Total Right BV -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Right BV</div>
                      <div class="h5 mb-0 font-weight-bold text-dark">
                      
                      <?php
                      $useradd="SELECT * FROM plan where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                     
                     
                      echo $add['right_bv'];
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-align-right fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
                <!-- Total BV Pair-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total BV Pair</div>
                      <div class="h5 mb-0 font-weight-bold text-dark">
                      
                      <?php
                      $useradd="SELECT * FROM plan where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                     
                     
                      echo $add['last_bv_pair'];
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-people-arrows fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



                <!-- Monthly BV Pair-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Monthly BV Pair</div>
                      <div class="h5 mb-0 font-weight-bold text-dark">
                      
                      <?php
                      $useradd="SELECT * FROM plan where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                     
                     
                      echo $add['bv_pair'];
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-user-friends fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
                  <!-- Active Bonus -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Active Bonus</div>
                      <div class="h5 mb-0 font-weight-bold text-dark">
                      
                      <?php
                      $useradd="SELECT * FROM plan where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                     
                     
                      echo $add['active_bonus'];
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-chart-line fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
                  <!-- Leadership Bonus -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Leadership Bonus</div>
                      <div class="h5 mb-0 font-weight-bold text-dark">
                      
                      <?php
                      $useradd="SELECT * FROM plan where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                     
                     
                      echo $add['leadership_bonus'];
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-poll fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
 
 
 
           
                <!-- Car Fund -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Car Fund</div>
                      <div class="h5 mb-0 font-weight-bold text-dark">
                      
                      <?php
                      $useradd="SELECT * FROM plan where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                     
                     
                      echo $add['carfund'];
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-car fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
           
           
               <!-- House Fund -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">House Fund</div>
                      <div class="h5 mb-0 font-weight-bold text-dark">
                      
                      <?php
                      $useradd="SELECT * FROM plan where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                     
                     
                      echo $add['homefund'];
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
            
            
            
            
               <!-- Tour Fund -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tour Fund</div>
                      <div class="h5 mb-0 font-weight-bold text-dark">
                      
                      <?php
                      $useradd="SELECT * FROM plan where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                     
                     
                      echo $add['tourfund'];
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
           
           
           
           
           
           
              <!-- Royality Fund -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Royality Fund</div>
                      <div class="h5 mb-0 font-weight-bold text-dark">
                      
                      <?php
                      $useradd="SELECT * FROM plan where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                     
                     
                      echo $add['royalityfund'];
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
            
            
            
              <!-- Wallet -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Wallet</div>
                      <div class="h5 mb-0 font-weight-bold text-dark">
                      
                      <?php
                      $useradd="SELECT * FROM plan where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                     
                     
                      echo $add['total'];
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-wallet fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
             <!-- Total Income -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Income</div>
                      <div class="h5 mb-0 font-weight-bold text-dark">
                      
                      <?php
                      $useradd="SELECT * FROM plan where userid='$_SESSION[userid]'";
                      $run=mysqli_query($db,$useradd);
                      $add=mysqli_fetch_array($run);
                     
                     
                      echo $add['all_time_total'];
                      ?>
                      
                      
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-rupee-sign fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
           
           
           
  <!--####################################-----Franchise Status----######################################
 #################################################################################################
 #################################################################################################-->
 
 

            
            

    
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
          <a class="btn btn-primary" href="login.php">Logout</a>
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
        <?php
             }
             else{
      
         header('location:maintanance/maintenance.html');
        
                }
        ?>