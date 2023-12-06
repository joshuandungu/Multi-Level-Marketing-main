<?php

include("include/dbcon.php");
include("include/login_check.php");

$sql="SELECT *FROM user";
$run=mysqli_query($db,$sql);
$data=mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

  <div class="container">

    <div class="card o-hidden border-2 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block "></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update KYC!</h1>
              </div>
              <form class="user" action="kycsucess.php" method="post">
                <div class="form-group row">
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputuserid" name="user_id" placeholder="User ID" value="<?php echo $_SESSION['userid']; ?>"readonly>



                </div>
               
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputname" name="name" placeholder="Name" value="<?php
                    $username="SELECT * FROM user where userid='$_SESSION[userid]'";
                    $run=mysqli_query($db,$username);
                    $add=mysqli_fetch_array($run);
                    $USER_NAME=$add['name'];
                 
                    echo $USER_NAME;
                   ?>" readonly>
                </div>

                <div class="form-group border pd-2 my-4 bg-gradient-light">
                  <label>Gender</label><br>
                  <input type="radio"  name="gender" value="m"> Male  | 
                  <input type="radio" name="gender" value="l"> Female
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputname" name="age" placeholder="Age"required/>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputname" name="account" placeholder="Account Number"required/>
                </div>
              
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputemail" name="ifsc" placeholder="IFSC Code"required/>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputphone" name="branch" placeholder="Branch Name"required/>
                </div>

               
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputpackage" name="pan" placeholder="PAN No."required/>
               </div>

               <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputpackage" name="addhar" placeholder="Addhar No."required/>
               </div>

               <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputpackage" name="address" placeholder="Address"required/>
               </div>

               <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputpackage" name="city" placeholder="City"required/>
               </div>

               <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputpackage" name="state" placeholder="State"required/>
               </div>

               <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputpackage" name="pincode" placeholder="Pin Code"required/>
               </div>

                <div class="form-group row">
                 
                </div>
                <button class="btn btn-primary btn-user btn-block" name="submit">
                  Submit
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
