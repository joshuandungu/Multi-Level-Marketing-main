<?php

include("include/dbcon.php");
include("include/login_check.php");


?>
 
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-light-800">Manage Site</h1>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <title>Manage Site</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-12">
      <div class="card-body p-12">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block "></div>
          <div class="col-lg-12">
            <div class="p-6">
              <div class="text-center">
            <?php
                $sql="SELECT * FROM admin where userid='Admin2020' ";
                $run=mysqli_query($db,$sql);
                $row=mysqli_fetch_array($run);
                if($row['status']!='0'){
             ?>
                 <h1 class="h4 text-gray-900 mb-4">Close Site !</h1> 
             <?php
                }
                
                else{
                  ?> 
                  <h1 class="h4 text-gray-900 mb-4">Open Site !</h1> 
             <?php
                }
             ?>
              </div>
              <form class="user" method="post" action="sitesucess.php">
                <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0"> 
                </div>
                <div class="col-sm-6">

                </div>
               </div> 
               <?php
                $sql="SELECT * FROM admin where userid='Admin2020' ";
                $run=mysqli_query($db,$sql);
                $row=mysqli_fetch_array($run);
                if($row['status']!='0'){
             ?>
                <button name="close" class="btn btn-primary btn-user btn-block" >
                  Close Now !
                </button>
                <?php
                }
                
                else{
                  ?> 
                 <button name="open" class="btn btn-primary btn-user btn-block" >
                 Open Now !
                </button>
             <?php
                }
             ?>
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
            <span>Copyright &copy; Siddharth Agro 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    