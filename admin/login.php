<?php
include("include/dbcon.php");

if(isset($_POST['login'])){
  $userid=$_POST['userid'];
  $password=$_POST['password'];
  
$sql="SELECT * FROM admin Where userid='$userid' and password='$password'";
$run=mysqli_query($db,$sql);
$num=mysqli_num_rows($run);

if($num==1){

    $data=mysqli_fetch_assoc($run);
    $userid=$data['userid'];
    session_start();

    $_SESSION['userid']=$userid;
    $_SESSION['password']=$password;


    header('location:index.php');

}

else{

    header('location:login.php');
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="view" style="background-image: url('https://images.unsplash.com/photo-1593690105617-ce8793f17713?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
 
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

       <div class="card o-hidden border-0 shadow-lg my-5 bg-light" style="background-image: url('https://images.unsplash.com/photo-1473656817456-d9559981e321?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back Admin!</h1>
                  </div>
                  <form class="user" action="" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputuserid" aria-describedby="emailHelp"  name="userid" placeholder="Enter User ID..."required/>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword"  name="password" placeholder="Password"required/>
                    </div>
                   
                    
                    <button class="btn btn-primary btn-user btn-block" name="login">
                      Login
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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
