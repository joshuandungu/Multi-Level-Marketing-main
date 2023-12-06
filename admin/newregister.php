 
 <?php
include("include/dbcon.php");
include("include/login_check.php");

  $sql="SELECT * FROM admin where userid='Admin2020' ";
  $run=mysqli_query($db,$sql);
  $row=mysqli_fetch_array($run);
  if($row['status']!='0'){
 ?>
 

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SA - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

  <div class="container">

   <div class="card o-hidden border-0 shadow-lg my-5 bg-light" style="background-image: url('https://images.unsplash.com/photo-1473656817456-d9559981e321?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Add A User!</h1>
              </div>
              <form class="user" action="registrationsucess.php" method="post">
                <div class="form-group row">
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control " id="exampleInputsponcerid" name="sponcerid" placeholder="Sponcer ID" value="<?php
                       echo 'SHN8386641'; ?>" readonly>
                </div>
                
                <div class="form-group">
                  <input type="text" class="form-control " id="exampleInputsponcerid" name="sponcername" placeholder="Sponcer ID" value="<?php
                        
                    echo 'shambhavi kumari';?>" readonly>
                </div>
                
                <div class="form-group border pd-2 my-4 bg-gradient-light">
                 <label>position</label><br>
                  <input type="radio"  name="position" value="L"> Left  | 
                  <input type="radio" name="position" value="R"> Right
                </div>
                <div class="form-group">
                  <input type="text" class="form-control " id="exampleInputname" name="name" placeholder="Name"required/>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control text-uppercase" id="exampleInputname" name="pin" placeholder="e-Pin"required/>
                </div>
              
                <div class="form-group">
                  <input type="email" class="form-control " id="exampleInputemail" name="email" placeholder="Email">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control " id="exampleInputphone" name="phone" placeholder="Phone"required/>
                </div>

                <div class="form-group">
                  <input type="password" class="form-control " id="exampleInputpassword" name="password" placeholder="password"required/>
                </div>

                <div class="form-group" >
                <select class="form-control form-group" name="package"placeholder="password" placeholder="package" required/>
                <option>Select a Package</option>  
                  <option>Vegitable Plants Package</option>
                  <option>Sagwan Plants Package</option>
                  <option>Chandan Plants Package</option>
                  <option>Fruit Plants Package</option>
                  <option>Indoor Plants Package</option>
                   <option>Advance Booking(1000)</option>
                  <option>Suprme Package(2000)</option>
                 
                </select>
                </div>
                <div class="form-group row">
                 
                </div>
                <button class="btn btn-primary  btn-block" name="register">
                  Register 
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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
 <?php
             }
             else{
      
         header('location:maintanance/maintenance.html');
        
                }
        ?>