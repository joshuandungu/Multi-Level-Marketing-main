<?php
include_once("include/dbcon.php");
error_reporting(0);
$userid= $_GET['userid'];
$name=$_GET['name'];
$phone=$_GET['phone'];
$email=$_GET['email'];


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

<body class="bg-gradient-light">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update Account!</h1>
              </div>
              <form class="user" action="" method="GET">
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputname" name="userid" value="<?php
                  echo $_GET['userid']?>"readonly>
                </div>
            
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputname" name="name"  value="<?php
                  echo $_GET['name']?>">
                </div>

                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputphone" name="phone"  value="<?php
                  echo $_GET['phone']?>">
                </div>


                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputemail" name="email"  value="<?php
                  echo $_GET['email']?>">
                </div>

             
                <input type="submit" id= "button" class="btn btn-primary btn-user btn-block" name="submit" value="Update Details"/>
                 
                
                <hr>
                
              </form>
              <hr>
             


              <?php
                    if(isset($_GET['submit']))
                    {
                      $userid=$_GET['userid'];
                      $name=$_GET['name'];
                      $email=$_GET['email'];
                      $phone=$_GET['phone'];
                   
                    $query="UPDATE `subadmin` SET userid='$userid',name='$name',email='$email',phone='$phone' where userid='$userid'";
                    $data=mysqli_query($db,$query);
                    if($data)
                    {
                      echo "<script>alert('Record Updated Sucessfully')</script>";
                    }
                     else{
                    echo "<font color='red'>failed to update record";
                    }
                  }
              ?>


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

<!-- $userid=$_GET['userid'];
                  $name=$_GET['name'];
                  $phone=$_GET['phone'];
                  $email=$_GET['email'];
                  $query = "UPDATE user SET userid='$userid',name='$name',phone='$phone',email='$email', WHERE userid='$userid'";
                  $data=mysqli_query($conn,$query); -->



