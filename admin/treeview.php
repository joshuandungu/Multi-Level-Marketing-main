<?php

include("include/menu.php");
include("include/dbcon.php");

?>
 
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Team Tree</h1>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <title>Tree</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-10">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Team Tree View</h1>
              </div>
              
              
              
              
               <form class="user" method="post">
                <div class="form-group row">
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputsponcerid" name="userid" value="<?php 
                  if(isset($_POST['done'])){
                    echo $_POST['userid'];
                  }
                  
                  
                  
                  ?>" placeholder="User ID" required/>
                  <br>
                  <button class="btn btn-primary btn-user " name="done">
                  Check User Name
                </button>
                 
                 
                </div>
            
              </form>
              <?php

include("include/dbcon.php");



if (isset($_POST['done'])) {
 

    $sponcerid = $_POST['userid'];

    $search = mysqli_fetch_array(mysqli_query($db,"select * from user where userid = '$sponcerid'" ));
    $search_subadmin = mysqli_fetch_array(mysqli_query($db,"select * from subadmin where userid = '$sponcerid'" ));
    $row = mysqli_num_rows(mysqli_query($db,"select * from user where userid = '$sponcerid'"));
    $sub_Admin = mysqli_num_rows(mysqli_query($db,"select * from user where userid = '$sponcerid'"));
    if($row==1){
     $name = $search['name'];
 
     ?>
     <h3 style="color:black;"><?php echo "$name" ?></h3>
       <?php 

    }
    else if($sub_Admin==1){
        $subadmin_name = $search_subadmin['name'];
         ?>
         
          <h3 style="color:black;"><?php echo "$subadmin_name" ?></h3>
    
    
      <?php

}

    else{
        ?>
         <h3 style="color:red;"><?php echo 'Invalid User'; ?></h3>
         
         <?php 
        
    }


}
?>
              
              <form class="user" method="post" action="tree.php">
              
                <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0"> 
                </div>
                <div class="col-sm-6">

                </div>
               </div> 
                <div class="form-group">
                 <input type="hidden" class="form-control form-control-user" id="exampleInputsponcerid" value = "<?php echo $sponcerid ?>" name="userid" placeholder="User ID" required/>
                    </div>

                <div class="form-group row">
                 
                </div>
                <button name="tree" class="btn btn-primary btn-user btn-block" >
                 View Tree
                </button>
                <hr>
               
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

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

</body>

</html>
