
<?php
include("include/dbcon.php");



?>

            <?php
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
          <div class="col-lg-5 d-none d-lg-block">
              
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-white mb-4">Create an Account!</h1>
              </div>
               <form class="user" method="post">
                <div class="form-group row">
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control text-uppercase" id="exampleInputsponcerid" name="sponcerid" value="<?php 
                  if(isset($_POST['done'])){
                    echo $_POST['sponcerid'];
                  }
                  
                  
                  
                  ?>" placeholder="Sponcer ID" required/>
                  <br>
                  <button class="btn-primary  " name="done">
                  Check Sponcer Name
                </button>
                 
                 
                </div>
            
              </form>
              <?php

include("include/dbcon.php");



if (isset($_POST['done'])) {
 

    $sponcerid = $_POST['sponcerid'];

    $search = mysqli_fetch_array(mysqli_query($db,"select * from user where userid = '$sponcerid'" ));
    $row = mysqli_num_rows(mysqli_query($db,"select * from user where userid = '$sponcerid'"));
    if($row==1){
     $name = $search['name'];
 

    
     ?>
     <h4 style="color:white;"><?php echo "$name" ?></h3>
          <?php

    } else{
         ?>
         <h3 style="color:red;"><?php echo 'False'; ?></h3>
    
    
      <?php

}
    
    




}
?>
              
              <form class="user" action="registrationsucess.php" method="post">
                  
                <div class="form-group row">
                  
                </div>
                <div class="form-group">
                    
 
                  <input type="hidden" class="form-control text-uppercase" id="exampleInputsponcerid" value = "<?php echo $sponcerid ?>" name="sponcerid" placeholder="Sponcer ID" required/>
                   
                </div>
                <div class="form-group ">
                <div class="form-group border pd-2 my-4 bg-gradient-light">
                  <label>Position</label><br>
                  <input type="radio"  name="position" value="L"> Left  | 
                  <input type="radio" name="position" value="R"> Right
                </div>
                </div>
                 
                <div class="form-group">
                  <input type="text" class="form-control text-uppercase" id="exampleInputname" name="pin" placeholder="e-Pin"required/>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputname" name="name" placeholder="Name"required/>
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
                
                
              </form>
              
             <br>
              <div class="text-center">
                <a class="small" href="login.php">
                    <button class="btn btn-dark">
                    Already have an account? Login! </button></a>
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
           
       }
             else{
      
         header('location:maintanance/maintenance.html');
        
                }
        ?>