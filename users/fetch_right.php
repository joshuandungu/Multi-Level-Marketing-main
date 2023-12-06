<?php
include("include/dbcon.php");
include("include/menu.php");

?>



        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Right Downline</h1>
          <p class="mb-4"> <a target="_blank" href="https://datatables.net"></a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4 ">
            <div class="card-header py-3 bg-dark">
              <h6 class="m-0 font-weight-bold text-light">Team management</h6>
            </div>
            <div class="card-body ">
              <div class="table-responsive">
                <table class="table table" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>#</th>
                    
                      
                      <th>User ID</th>
                      
                      <th>Side</th>
                      <th>Name</th>
                      
                     
                      
                    </tr>
                  </thead>
                 
              
              


                  <tbody>
                   
                    <?php
include "include/dbcon.php";

$userid = $_SESSION[userid];
function count_serial($k){
    return $k;
}
    function find_placement_id($sponcerid)
    {
      global $db;
      

      $query = mysqli_query($db, "select * from user where userid='$sponcerid'");
      $result = mysqli_fetch_array($query);
      return $result['placement_id'];
    }




    function left($agentid, $userid, $right_stack, $right_side, $i)
    {

      static $k=1;



      global $db;
      $data = mysqli_query($db, "select * from user where userid = '$agentid'");
      $sql = mysqli_fetch_array($data);

      $left_user = $sql['left_side'];

      $right_user = $sql['right_side'];


      if ($right_user != '')
        array_push($right_stack, $right_user);




      if ($left_user != '') {

       

        left($left_user, $userid, $right_stack, $right_side, $i);
      } else {


        if ($right_stack[$i] != '') {






          $right = $right_stack[$i];
         



          $i++;

          left($right, $userid, $right_stack, $right_side, $i);
        }
        else
        {
            count_serial($k);
        }
      }
    }

    function right($agentid, $userid, $right_stack, $right_side, $i)
    {

     static $k=1;




      global $db;
      $data = mysqli_query($db, "select * from user where userid = '$agentid'");
      $sql = mysqli_fetch_array($data);

      $left_user = $sql['left_side'];

      $right_user = $sql['right_side'];

      // echo "-->right===$right_user-->";


      if ($right_user != '')
        array_push($right_stack, $right_user);




      if ($left_user != '') {


        $name = mysqli_fetch_array(mysqli_query($db,"select * from user where userid = '$left_user'"));
        $k++;
        ?> <tr>
              <td><?php echo $k; ?></td>

                <td><?php echo $left_user; ?></td>
        
                              <td><?php echo "Right"; ?></td>
                              <td><?php echo $name['name']; ?></td>
        
                        </tr>
                              
        <?php
        

       
        right($left_user, $userid, $right_stack, $right_side, $i);
      } else {
       

        if ($right_stack[$i] != '') {






          $right = $right_stack[$i];
          $name = mysqli_fetch_array(mysqli_query($db,"select * from user where userid = '$right'"));
          $k++;
          ?> <tr>
                <td><?php echo $k; ?></td>

                  <td><?php echo $right; ?></td>
          
                                <td><?php echo "Right"; ?></td>
                                <td><?php echo $name['name']; ?></td>
          
           <tr>
                                
          <?php
          




          $i++;

          right($right, $userid, $right_stack, $right_side, $i);
        }
      }
    }


    
    $datas = mysqli_query($db, "select * from user where userid = '$userid'");
    $sqls = mysqli_fetch_array($datas);

    $left_side = $sqls['left_side'];

    $right_side = $sqls['right_side'];

    

    if ($left_side != '') {
       
        


      $left_stack = array();
      $j = 0;

      left($left_side, $userid, $left_stack, $right_side, $j);
    }



    /////////right users///////
    if ($right_side != '') {
        $name = mysqli_fetch_array(mysqli_query($db,"select * from user where userid = '$right_side'"));
             $k++;
?> <tr>
      <td><?php echo "1"; ?></td>

        <td><?php echo $right_side; ?></td>

                      <td><?php echo "Right"; ?></td>
                      <td><?php echo $name['name']; ?></td>

 </tr>
                      
<?php

       $i = 0;
      $right_stack = array();

      right($right_side, $userid, $right_stack, $right_side, $i);
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
