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
                <h1 class="h4 text-gray-900 mb-4">Set T-pin</h1>
              </div>
              <form class="user" action="" method="GET">
                <div class="form-group row">
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputuserid" name="user_id" placeholder="User ID" value="<?php echo $_SESSION['userid']; ?>"readonly>
                </div>
               
                

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputname" name="tpin" placeholder="Create T-pin"required/>
                </div>

               

                <div class="form-group row">
                 
                </div>
                <input type="submit" id= "button" class="btn btn-primary btn-user btn-block" name="submit" value="Update Details"/>
                 
                <hr>
                

                <?php
                    if(isset($_GET['submit']))
                    {
                     
                        $userid=$_SESSION['userid'];
                        $tpin=$_GET['tpin'];
                     
                     $query_tp="SELECT * FROM user where userid='$_SESSION[userid]'";
                     $run_tp=mysqli_query($db,$query_tp);
                     $add=mysqli_fetch_array($run_tp);
                     $Tpin=$add['tpin'];
           if($Tpin==""){
                      $query="UPDATE `user` SET tpin='$tpin' where userid= '$userid'";;
                      $data=mysqli_query($db,$query);
                    if($data)
                    {
                      echo "<script>alert('T-pin genrated  Sucessfully')</script>";
                    }
                     else{
                     echo "<script>alert('T-pin not genrated Error !')</script>";                   
                     }
                  }else{
                    echo "<script>alert('T-pin already genrated')</script>"; 
                 }
                }
                 
              ?>

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
