<?php
include("include/dbcon.php");
include("include/menu.php");
include("include/login_check.php");



$sql="SELECT * FROM income where last_week >=200";
$run=mysqli_query($db,$sql);
$rowcount=mysqli_num_rows($run);
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Income List</h1>
          <?php
             if(isset($_GET['msg']))?>  <h2 style="color:green; font-weight:bold;"><?php echo $_GET['msg']?></h2>
          <?php
             if(isset($_GET['msgf']))?>  <h2 style="color:red; font-weight:bold;"><?php echo $_GET['msgf']?></h2>     
          <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Members Management</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S. No.</th>
                      <th>User ID</th>
                      <th>Name</th> 
                      <th>Payment</th>
                      <th>TDS</th>
                      <th>Status</th>
                    
                      
                    </tr>
                  </thead>
                 
                <?php
                
                for($i=1; $i<=$rowcount; $i++)
                {
                   
                    $data=mysqli_fetch_array($run);

                ?>


                  <tbody>
                    <tr>
                      <td><?php echo $i; ?></td>  
                      <td><?php echo $data['userid']; ?></td>              
                      <td><?php echo $data['name']; ?></td>
                      <td><?php echo $data['last_week']; ?></td>
                      <td><?php echo $data['last_tds']; ?></td>
                      <td><?php

                         if($data['paid_status']!='1'){
                             echo"
                             <a href= 'dueuser.php?userid=$data[userid] & amt=$data[last_week]' onclick='return checkdelete()'>Pending</a>";
                           }
                           else{
                             echo "Paid";
                           }

                        ?></td>                            
                     
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
            <span>Copyright &copy; Siddharth Agro 2020</span>
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
<script>
function checkdelete()
{
  return confirm('Are you sure you want to Paid this user....?');
}
</script>
</body>

</html>




