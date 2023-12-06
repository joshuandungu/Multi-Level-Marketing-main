<?php
include("include/dbcon.php");
include("include/menu.php");

$sql="SELECT *FROM income_history where userid='$_SESSION[userid]'";
$run=mysqli_query($db,$sql);
$rowcount=mysqli_num_rows($run);
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Income Management</h1>
       

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-dark">
              <h6 class="m-0 font-weight-bold text-white">Income Management</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Date</th>
                      <th>Income</th>
                      <th>Remarks</th>
                      
                    </tr>
                  </thead>
                 
                <?php
                
                for($i=1; $i<=$rowcount; $i++)
                {
                   $row=mysqli_fetch_array($run);

                ?>


                  <tbody>
                    <tr>
                        <td class=><?php echo $i; ?></td> 
                        <td class=><?php echo $row['date']; ?></td>
                        <td class=><?php echo $row['amount']; ?></td>
                        <td class=><?php echo $row['remarks']; ?></td>
                        
                    </tr> 
                    
                    
                   
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
