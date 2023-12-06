<?php
include("include/dbcon.php");
date_default_timezone_set("Asia/Kolkata");
?>
<?php
$sql = "SELECT * FROM admin where userid='Admin2020' ";
$run = mysqli_query($db, $sql);
$row = mysqli_fetch_array($run);
if ($row['status'] != '0') {
?>







  <?php
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ forgot password @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@


  if (isset($_POST['forgot'])) {
    $userid = $_POST['userid'];
    $phone = $_POST['phone'];

    $sql = "SELECT * FROM user Where userid='$userid' and phone='$phone'";
    $run = mysqli_query($db, $sql);
    $num = mysqli_num_rows($run);

    if ($num == 1) {

  // ********************************* generate OTP ********************************** //
  
  $otp = rand(100000, 999999);

  // ********************************* send OTP **************************************//

 $field = array(
    "sender_id" => "FSTSMS",
    "language" => "english",
    "route" => "qt",
    "numbers" => "$phone",
    "message" => "42408",
    "variables" => "{#BB#}|{#CC#}",
    "variables_values" => "$otp|$userid"
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($field),
  CURLOPT_HTTPHEADER => array(
    "authorization: mwVFtrlTMvaP40iYdJgH2oWDhbCQqnsAfBIe8jcOSLXUpGu15z6Lg3FzUVaD2m8SwjnNui5tTCHscBIW",
    "cache-control: no-cache",
    "accept: */*",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

  // ********************************* Insert OTP ***********************************//
  
  $query = "INSERT INTO otp (userid, otp, time_created) VALUES ('$userid','$otp', '".date("Y-m-d H:i:s")."')";
  $runquery = mysqli_query($db, $query);

  $success = 1;


      
    } else {


      $msg = "Please fill the correct details....";
    }
  }


 // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ forgot password @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@


 if (isset($_POST['self'])) {
  $userid = $_POST['userid'];
  $otp = $_POST['otp']; 

  $sqlso = "SELECT * FROM otp Where userid='$userid' and otp='$otp'";
  $runso = mysqli_query($db, $sqlso);
  $numo = mysqli_num_rows($runso);
  
  if ($numo == 1){
    $sqll = "SELECT * FROM otp Where otp='$otp' and status='L' and NOW() <= DATE_ADD(time_created, INTERVAL 1 MINUTE)";
    $runl = mysqli_query($db, $sqll);
    $numotp = mysqli_num_rows($runl);
    if($numotp == 1){

    $closeotp="UPDATE `otp` SET status='R' where userid='$userid'";
    $run=mysqli_query($db,$closeotp);

    $success = 2;
    }
    else{
      $success = 1;   
      $eotp = "OTP Expired...";
      
    }
  }
   else{
     $success = 1;
     $wotp = "Wrong OTP...";
     
   }
  }



 // @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ forgot password @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@


 if (isset($_POST['reset'])) {
  $userid = $_POST['userid'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
 
  if($password==$cpassword){
    $changepass="UPDATE `user` SET password='$password' where userid='$userid'";
    $run_pass=mysqli_query($db,$changepass);

    $spass="Password updated successfully...";
    header("location:login.php");
  }
   else{
     $success = 2;
     $npass = "Password and confirm password are not similar....!";
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

    <title>Reset Password</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

  </head>
  <style>
    .forgot a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    .reg a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }
  </style>

  <body class="view" style="background-image: url('https://images.unsplash.com/photo-1593690105617-ce8793f17713?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

    <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5 bg-light" style="background-image: url('https://images.unsplash.com/photo-1473656817456-d9559981e321?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row text-center">

                <div class="col-lg-6 d-none d-lg-block ">
                 <h3 style="color:red; font-weight:bold;"><?php echo "$wotp";?></h3>
                 <h3 style="color:red; font-weight:bold;"><?php echo "$eotp";?></h3>
                 <h5 style="color:red; font-weight:bold;"><?php echo "$npass";?></h5>
                 <h3 style="color:red; font-weight:bold;"><?php echo "$msg";?></h3>
                </div>
                <div class="col-lg-12">
                  <div class="p-5">

                    <div class="text-center">
                  <?php    
                  if(!empty($success==2)){
                    ?>
                      <h3 style="color:yellow; font-weight:bold;">Reset Password!</h3>
                     

                    </div>
                    <form class="user" action="" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control " id="exampleInputuserid" aria-describedby="emailHelp" name="userid" value="<?php echo $userid; ?>" readonly/>
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control " id="exampleInputPassword" name="password" placeholder="Password" required />
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control " id="exampleInputPassword" name="cpassword" placeholder="Re-enter Password" required />
                      </div>
                      <button class="btn btn-primary btn-block" name="reset">
                        Reset
                      </button>


                    </form>
                 <?php   
                  }
                  else if(!empty($success==1)){
                 ?>
                       <h3 style="color:yellow; font-weight:bold;">Enter OTP!</h3><br>

                       

                    </div>
                    <form class="user" action="" method="post">
                      <div class="form-group">
                        <input type="hidden" class="form-control " id="exampleInputuserid" aria-describedby="emailHelp" name="userid" value="<?php echo $userid;?>" required />
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control " id="exampleInputPassword" name="otp" placeholder="OTP" required />
                      </div>

                      <button class="btn btn-primary btn-block" name="self">
                        Submit
                      </button>


                    </form>
                    <?php   
                  }
                  else {
                 ?>
                  <h3 style="color:yellow; font-weight:bold;">Forgot Password</h3>
                 

                    </div>
                    <form class="user" action="" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control " id="exampleInputuserid" aria-describedby="emailHelp" name="userid" placeholder="Enter User ID..." required />
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control " id="exampleInputPassword" name="phone" placeholder="Registered Mobile No." required />
                      </div>

                      <button class="btn btn-primary btn-block" name="forgot">
                        Send OTP
                      </button>


                    </form>
                    <?php   
                  }
                  ?>
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
<?php
} else {


  header("location:maintanance/maintanence.php");
}
?>