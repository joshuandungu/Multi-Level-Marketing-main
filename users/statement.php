<?php
include("include/dbcon.php");
include("include/menu.php");
include("include/login_check.php");

$sql="SELECT *FROM income where userid='$_SESSION[userid]'";
$run=mysqli_query($db,$sql);
$rowcount=mysqli_num_rows($run);


?>

        <!-- Begin Page Content -->
         <!-- Content Row -->

          <div class="row"> 
          
          
            <!-- ############----Income chart------############ -->
                    
            <div class="col-xl-4 col-lg-5">
              <div style="background-color: #" class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div style="background-color: #000000" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-info">Withdrawal Status (MLM)</h6>
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
              
                    
                    <th class="m-0 font-weight-bold text-primary">Amount</th>
                    <th class="m-0 font-weight-bold text-primary">Status</th>
                    </tr>
                  </thead>

                 <tbody>
                 
                 
                 <?php
                 $sql="SELECT * FROM income where userid='$_SESSION[userid]' ";
                 $row=mysqli_fetch_array($run);
                 $data=mysqli_fetch_array($runs);
                 ?>


                 
                 <td class="m-0 font-weight-bold text-dark"><?php echo $row['last_week']; ?></td>
                
              
                 <td class="m-0 font-weight-bold text-dark">  <?php if($row['paid_status']!='0'){
                     echo "Paid";
                   
                  }
                    else{
                     
                    echo "Pending";
                    ?>
                    </div>
                    <?php
                  }
                  ?>
                 </td> 
                
                 
                 </tbody>
                  
                      
                </table>
              </div>
            </div>
          </div>

     
          </div></div>
          
          
          
          
          
             <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4 bg-light">
                <!-- Card Header - Dropdown -->
                <div style="background-color: #000000" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-info">Withdrawal Status (Repurchase)</h6>
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
                 $sqlia="SELECT *FROM plan where userid='$_SESSION[userid]'";
                 $runsa=mysqli_query($db,$sqlia);
                 $rowcountsa=mysqli_num_rows($runsa);
                 $datas=mysqli_fetch_array($runsa);
                 ?>


                 <td class="m-0 font-weight-bold text-dark"><?php echo $datas['pay']; ?></td>
                <td class="m-0 font-weight-bold text-dark">  <?php if($row['paid_status']!='0'){
                     echo "Paid";
                   
                  }
                    else{
                     
                    echo "Pending";
                    ?>
                    </div>
                    <?php
                  }
                  ?>
                 </td> 
                 </tr> 
                
                
                 </tbody>
                  
                      
                </table>
              </div>
            </div>
          </div>

     
          </div></div>
          
          
          
          
          
          
          
          
          </div>
          
          
       <!-- Content Row -->

          <div class="row"> 
          
          
            <!-- ############----Income chart------############ -->
                    
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4 bg-info">
                <!-- Card Header - Dropdown -->
                <div style="background-color: #000000" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-info">Income Details</h6>
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
                 $sqli="SELECT *FROM kyc where userid='$_SESSION[userid]'";
                 $runs=mysqli_query($db,$sqli);
                 $rowcounts=mysqli_num_rows($runs);
                 $data=mysqli_fetch_array($runs);
                 ?>
                 

                 <td class="m-0 font-weight-bold text-white">NAME</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['name']; ?></td>
                 </tr> 
                 <tr>
                 <td class="m-0 font-weight-bold text-white">ACCOUNT</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $data['account']; ?></td>
                 </tr> 
                 <tr>
                 <td class="m-0 font-weight-bold text-white">IFSC</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $data['ifsc']; ?></td>
                 </tr> 
                 <tr>
                 <td class="m-0 font-weight-bold text-white">BRANCH</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $data['branch']; ?></td>
                 </tr>
                 <tr>
                 <td class="m-0 font-weight-bold text-white">PAN</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $data['pan']; ?></td>
                 </tr> 
                 <tr>
                 <td class="m-0 font-weight-bold text-white">ADDHAR</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $data['addhar']; ?></td>
                 </tr> 
                
                 </tbody>
                  
                      
                </table>
              </div>
            </div>
          </div>

     
          </div></div>
          
          
          
          
          
          
          


     <div class="col-xl-8 col-lg-7 ">
              <div class="card shadow mb-4 bg-warning">
                <!-- Card Header - Dropdown -->
                <div style="background-color: #000000" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-info Text-center">Total Revenue(MLM)</h6>
                 
                 
               </div>
                <!-- Card Body -->
                <div class="card-body ">
                  
                  <div class="table-responsive">
                  <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    
                    <th class="m-0 font-weight-bold text-primary">Income</th>
                    <th class="m-0 font-weight-bold text-primary">Amount</th>
                   
                  
                    </tr>
                  </thead>
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
                  <tr>
                 <td class="m-0 font-weight-bold text-white text-uppercase">Silver Reward</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['silver_rewards']; ?></td>
                 </tr> 
                  <tr>
                 <td class="m-0 font-weight-bold text-white text-uppercase">Gold Reward</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['gold_rewards']; ?></td>
                 </tr>
                  <tr>
                 <td class="m-0 font-weight-bold text-white text-uppercase">Total Income</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['total_balance']; ?></td>
                 </tr>
                 </tbody>
                  
                      
                </table>
                </div> 
                  </div>
                </div>
             
            </div>



        
        
        
        
        
        
          <div class="col-xl-8 col-lg-7 ">
              <div class="card shadow mb-4 bg-success">
                <!-- Card Header - Dropdown -->
                <div style="background-color: #000000" class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-info Text-center">Total Revenue(Repurchase)</h6>
                 
                 
               </div>
                <!-- Card Body -->
                <div class="card-body ">
                  
                  <div class="table-responsive">
                  <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    
                    <th class="m-0 font-weight-bold text-primary">Income</th>
                    <th class="m-0 font-weight-bold text-primary">Amount</th>
                   
                  
                    </tr>
                  </thead>
                  <tr>
                 
                 <?php
                 $sql="SELECT * FROM plan where userid='$_SESSION[userid]' ";
                 $run=mysqli_query($db,$sql);
                 $row=mysqli_fetch_array($run);
                 ?>


                 <td class="m-0 font-weight-bold text-white">Active Bonus</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['active_bonus']; ?></td>
                 </tr> 
                 <tr>
                 <td class="m-0 font-weight-bold text-white">Leadership Bonus </td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['leadership_bonus']; ?></td>
                 </tr> 
                 <tr>
                 <td class="m-0 font-weight-bold text-white">Car Fund</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['carfund']; ?></td>
                 </tr> 
                  <tr>
                 <td class="m-0 font-weight-bold text-white text-uppercase">Tour Fund</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['tourfund']; ?></td>
                 </tr> 
                  <tr>
                 <td class="m-0 font-weight-bold text-white text-uppercase">House Fund</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['homefund']; ?></td>
                 </tr>
                  <tr>
                 <td class="m-0 font-weight-bold text-white text-uppercase">Royality Fund</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['royalityfund']; ?></td>
                 </tr>
                  <tr>
                 <td class="m-0 font-weight-bold text-white text-uppercase">Total Balance</td>
                 <td class="m-0 font-weight-bold text-white"><?php echo $row['all_time_total']; ?></td>
                 </tr>
                 </tbody>
                  
                      
                </table>
                </div> 
                  </div>
                </div>
             
            </div>









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
