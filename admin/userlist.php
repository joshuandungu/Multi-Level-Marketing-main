<?php
include("include/dbcon.php");
include("include/menu.php");

$sql="SELECT *FROM user";
$run=mysqli_query($db,$sql);
$rowcount=mysqli_num_rows($run);
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Total Users</h1>
          <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a>.</p>

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
                      <th>Joining Date</th>
                      <th>Sponcer ID</th>
                      <th>Pin</th>
                      <th>Attr. ID</th>
                      <th>Name</th>                    
                      <th>User ID</th>
                      <th>Phone</th>
                      <th>email</th>
                      <th>Package</th>
                      <th>Franchise Status</th>
                      <th> Status</th>
                      <th>Password</th>
                      <th>T-pin</th>
                      <th>Operation</th>
                       <th>Product</th>
                      
                    </tr>
                  </thead>
                 
                <?php
                
                for($i=1; $i<=$rowcount; $i++)
                {
                   $row=mysqli_fetch_array($run);

                ?>


                  <tbody>
                    <tr>
                      <td><?php echo $i; ?></td>  
                      <td><?php echo $row['joiningdate']; ?></td> 
                      <td><?php echo $row['sponcerid']; ?></td>
                      <td><?php echo $row['pin']; ?></td>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['userid']; ?></td>
                      <td><?php echo $row['phone']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['package']; ?></td>
                      <td>                       

<?php

if($row['franchise']!='0'){
echo "Active";  
}
 else{
 echo "Not Active";
}

?></td>
                       <td>                       

<?php

if($row['left_side']!='' or $row['right_side']!=''){
  echo "Active";  
   }
      else{
      echo "Not Active";
   }

?></td>
                             <td><?php echo $row['password']; ?></td>
                              <td><?php echo $row['tpin']; ?></td>
                   
                             
                             <?php  
                             
                             echo"
                            <td><a href= 'updateuser.php?userid=$row[userid] & name=$row[name] & phone=$row[phone] & email=$row[email] & password=$row[password]'>Update</a></td> 
                           
                           "?>
                           <td><?php

                         if($row['product_status']!='1'){
                             echo"
                             <a href= 'dueproduct.php?userid=$row[userid]' onclick='return checkdelete()'>Pending</a>";
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
