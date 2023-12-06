<?php

include("include/dbcon.php");
include("include/login_check.php");


?>
 
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-light-800">Activate Account</h1>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <title>Activate Account</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-4">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Activate Account</h1>
              </div>
              <form class="user" method="post" action="activation.php">
                <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0"> 
                </div>
                <div class="col-sm-6">

                </div>
               </div> 
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="userid" placeholder=" User ID" required/></div>



                <div class="form-group row">
                 
                </div>
                <button name="activate" class="btn btn-primary btn-user btn-block" >
                  Activate Now !
                </button>
                <hr>
               
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-black">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Xenesis 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    