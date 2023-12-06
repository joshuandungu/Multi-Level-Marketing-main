<?php
include("include/dbcon.php");
include("include/menu.php");

$sql="SELECT *FROM pair_count";
$run=mysqli_query($db,$sql);
$rowcount=mysqli_num_rows($run);
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
          

        <?php

         if(isset($_REQUEST['userid'])){
           $userid=$_REQUEST['userid'];
         }
         else{
           

         }         

        ?>

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Today's Pair</h1>
          <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Team management</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S. No.</th>
                      <th>Date</th>
                      <th>Sponcer ID</th>
                      <th>User ID</th>
                      <th>Capping Pair</th>
                      <th>Extra Pair</th>
                     
                      
                      
                    </tr>
                  </thead>
                 
                <?php
                
                for($i=1; $i<=$rowcount; $i++)
                {
                   $row=mysqli_fetch_array($run);
                  $date = date('Y-m-d');
               
                


                   if($date == $row['date']){

                ?>


                  <tbody>
                    <tr>
                      <td><?php echo $i; ?></td>
                      
                      <td><?php echo $row['date']; ?></td>
                      <td><?php echo $row['sponcerid']; ?></td>
                      <td><?php echo $row['userid']; ?></td>
                      <td><?php echo $row['total_pair']; ?></td>
                      <td><?php echo $row['extra_pair']; ?></td>
                      
                   </tr>

                    <?php
                    }
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
            <span>Copyright &copy; Your Website 2020</span>
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
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
