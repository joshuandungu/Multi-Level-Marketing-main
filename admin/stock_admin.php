<?php
include("include/dbcon.php");


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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Stock Panel</h1>
             </div>


<!--****************** Bill Desk **************************-->
 
    <div class="row justify-content-center">

      <div class="col-xl-4 col-lg-12 col-md-9 ">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row bg-warning">
              <div class="col-lg-6 d-none d-lg-block bg-login"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                       <?php
                     if(isset($_GET['msge']))?>  <h3 style="color:green; font-weight:bold;"><?php echo $_GET['msge'];?></h3>
                      <?php
                     if(isset($_GET['msg']))?>  <h3 style="color:green; font-weight:bold;"><?php echo $_GET['msg'];?></h3>
                     
                    <h1 class="h4 text-gray-900 mb-4">Alot Stock</h1>
                  </div>
                  <form class="user" action="stock_adminsuccess.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputuserid" aria-describedby="emailHelp"  name="userid" placeholder="Enter User ID..."required/>
                    </div>
                    
                    
                    <div class="form-group">
                      <input type="number" class="form-control" id="exampleInputPassword"  name="qty" placeholder="Quantity"required/>
                    </div>

                      <div class="form-group" >
                <select class="form-control form-group" name="package" placeholder="package" required/>
                 <option=" ">Select a Catagory</option>  
                  <option>Plants</option>
                  <option>Bio Fertilizer</option>
                  <option>Seeds</option>
                  <option>Equipment</option>
                  <option>Personal Care</option>
                  <option>Health Care</option>
                </select>
                </div>
                    <button class="btn btn-primary btn-user btn-block" name="done">
                      Done
                    </button>
                    <hr>
                   
                  </form>
                  <hr>
                  
                </div>
              </div>
            </div>
          </div>
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
<script>
function checkdelete()
{
  return confirm('Are you sure you want to Paid this User');
}
</script>
</body>

</html>

<?php
             }
             else{
      
         header('location:maintanance/maintanance.html');
        
                }
        ?>









