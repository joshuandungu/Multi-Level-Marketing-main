<?php
include("include/dbcon.php");
include("include/menu.php");

$sql="SELECT *FROM pinadv where userid='$_SESSION[userid]' and status='1'";
$run=mysqli_query($db,$sql);
$rowcount=mysqli_num_rows($run);
?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-dark">Advance Pin List</h1>
          <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div style="background-color: #262626" class="card-header py-3">
              <h6  class="m-0 font-weight-bold text-primary ">Pin management</h6>
            </div>
            <div style="background-color:#33300" class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="background-color: #262626" class="text-light">S. No.</th>
                      <th style="background-color: #262626" class="text-light">Date</th>
                      <th style="background-color: #262626" class="text-light">Pin Number</th>
                      <th style="background-color: #262626" class="text-light">Transfer</th>
                      
                    </tr>
                  </thead>
                 
                <?php
                
                for($i=1; $i<=$rowcount; $i++)
                {
                   $row=mysqli_fetch_array($run);

                ?>


                  <tbody>
                    <tr>
                       <td style="background-color:#333300" class="text-light"><?php echo $i; ?></td>
                       <td style="background-color:#333300" class="text-light"><?php echo $row['date']; ?></td> 
                       <td style="background-color:#333300" class="text-light"><?php echo $row['pin']; ?></td>
                    
         <?php  
       $username="SELECT * FROM user where userid='$_SESSION[userid]'";
       $runs=mysqli_query($db,$username);
       $add=mysqli_fetch_array($runs);
       $Tpin=$add['tpin'];
           if($Tpin!=""){
          
                             
                      echo " <td style='background-color:#333300' ><a class='text-light' href= 'transferpinadv.php?userid=$row[userid] & pin=$row[pin]'>Transfer</a></td>";
           }
            else{
                   echo " <td style='background-color:#333300' ><a class='text-light' href= 'tpin.php?userid=$row[userid]'>Transfer</a></td>";
                
            }
                             
                     ?>
                    
                    
                    </tr>
                   

                    <?php
                    }
                    ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

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