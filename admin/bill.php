
<?php

include("include/dbcon.php");
include("include/menu.php");
include("include/login_check.php");
$msge="";
$sql = "SELECT * FROM admin where userid='Admin2020' ";
$run = mysqli_query($db, $sql);
$row = mysqli_fetch_array($run);
if ($row['status'] != '0') {
?>


 <?php
session_start();
include("include/dbcon.php");

if(isset($_POST['submit'])){
  $userid=$_POST['userid'];
  $package=$_POST['package'];
  $pid=$_POST['pid'];
  
  
$useradd="SELECT * FROM user where userid='$userid'";
$run=mysqli_query($db,$useradd);
$adds=mysqli_num_rows($run);
$add=mysqli_fetch_array($run);
if($adds==1){ 
  
  
  
 
 

        //***********************agent details update****************************
            if ($package == "Plants") {
               
                     $useraddp = "SELECT * FROM plant where id='$pid'";
                     $runp = mysqli_query($db, $useraddp);
                     $addsp = mysqli_num_rows($runp);
                     $add_plant = mysqli_fetch_array($runp);
            if ($addsp==1){         
                     
                     

                     $dp=$add_plant['dp'];
                     $bv=$add_plant['bv'];  

                   
                     $success=1;
                  }
                   else{
                       $msge="Productid Not Exist......."; 
                   }
  
                }
               else if ($package == "Bio Fertilizer") {
                   
                   
                   
                   
                    $useraddb = "SELECT * FROM bio where id='$pid'";
                    $runb = mysqli_query($db, $useraddb);
                    $addsb = mysqli_num_rows($runb);
                    $add_bio = mysqli_fetch_array($runb);    
                
                    if ($addsb==1){  
                        
                        
                    
                     $dp=$add_bio['dp'];
                     $bv=$add_bio['bv'];    
  
                      $success=1;
                  }
                   else{
                       $msge="Productid Not Exist......."; 
                   }
  
               
            } else if ($package == "Seeds") {
             
                    

                     
                     $useradds = "SELECT * FROM seeds where id='$pid'";
                     $runs = mysqli_query($db, $useradds);
                     $addss = mysqli_num_rows($runs);
                     $add_seeds= mysqli_fetch_array($runs); 
 
                    
                     if ($addss==1){   
                         
                    
                     $dp=$add_seeds['dp'];
                     $bv=$add_seeds['bv'];
  

                   
                      $success=1;
                  }
                   else{
                       $msge="Productid Not Exist......."; 
                   }
  
                
            } else if ($package == "Equipment") {
               

                    $useradde = "SELECT * FROM equip where id='$pid'";
                    $runee = mysqli_query($db, $useradde);
                    $addsee = mysqli_num_rows($runee);
                    $add_equip = mysqli_fetch_array($runee);    
 
                     if ($addsee==1){         
  
                    
                     $dp=$add_equip['dp'];
                     $bv=$add_equip['bv'];
                   
                      $success=1;
                  }
                   else{
                       $msge="Productid Not Exist......."; 
                   }
  
             
            } else if ($package == "Personal Care") {
                
                  

                    $prod_per = "SELECT * FROM per_care where id='$pid'";
                    $run_per = mysqli_query($db, $prod_per);
                    $add_per = mysqli_num_rows($run_per);
                    $add_per_arr = mysqli_fetch_array($run_per);
                   
              if ($add_per==1){ 
                          $dp=$add_per_arr['dp'];
                           $bv=$add_per_arr['bv'];
  
                         $success=1;
                  
                  }
                   else{
                       $msge="Productid Not Exist......."; 
                   }
  
            } else if ($package == "Health Care") {
               
                    
                    $useraddh = "SELECT * FROM heal_care where id='$pid'";
                    $runh = mysqli_query($db, $useraddh);
                    $addsh = mysqli_num_rows($runh);
                    $add_heal = mysqli_fetch_array($runh);
                     if ($addsh==1){         
  

                     $dp=$add_heal['dp'];
                     $bv=$add_heal['bv'];
                      $success=1;
                  }
                   else{
                       $msge="Productid Not Exist......."; 
                   }
            }
 
}
 else{
     $msg="Userid Doesn't Exist";
 }


}
?>


<?php

  if(!empty($success==1)){

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SA - Bill Desk</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

  </head>

  <body style="background-image: url('https://images.unsplash.com/photo-1519124142585-bc4d4d7ddb45?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDEzOXw2c01WalRMU2tlUXx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

    <div class="container">


      <div class="card o-hidden border-0 shadow-lg my-5 bg-light" style="background-image: url('https://images.unsplash.com/flagged/photo-1585579047239-9471d8823b6e?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDcwfDZzTVZqVExTa2VRfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-5 d-none d-lg-block">

            </div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                   
                     
                    
              
                  <h1 class="h4 text-white mb-4">Bill Panel!</h1>
                </div>
            

                <form class="user" action="billsuccess.php" method="post">
              
                  <div class="form-group row">

                  </div>
                  <div class="form-group">
              

                    <input type="text" class="form-control text-uppercase" id="exampleInputsponcerid" value="<?php echo $userid;?>" name="uid" placeholder="User Id" readonly />
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputname" name="dp" value="<?php echo $dp;?>" readonly />
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputname" name="bv" value="<?php echo $bv;?>" readonly />
                  </div>

                  <div class="form-group">
                    <input type="number" class="form-control" id="exampleInputname" name="qty" placeholder="Quantity" required />
                  </div>
                  
                   <input type="text" class="form-control text-uppercase" id="exampleInputsponcerid" value="<?php echo $package;?>" name="package" placeholder="User Id" readonly />
                  </div>






                  <div class="form-group row">

                  </div>
                  <button class="btn btn-warning  btn-block" name="done">
                    Submit
                  </button>


                </form>

                <br>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
<?php
}
 else{
?>
  
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SA - Bill Desk</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

  </head>

  <body style="background-image: url('https://images.unsplash.com/photo-1519124142585-bc4d4d7ddb45?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDEzOXw2c01WalRMU2tlUXx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

    <div class="container">


      <div class="card o-hidden border-0 shadow-lg my-5 bg-light" style="background-image: url('https://images.unsplash.com/flagged/photo-1585579047239-9471d8823b6e?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDcwfDZzTVZqVExTa2VRfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-5 d-none d-lg-block">

            </div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
            <?php
             if(isset($_GET['msge']))?> <h2 style="color:green; font-weight:bold;"><?php echo $_GET['msge'];?></h2>
            <?php
             if(isset($_GET['msg']))?> <h3 style="color:red; font-weight:bold;"><?php echo $_GET['msg']?></h3>        
                <h3 style="color:red; font-weight:bold;"><?php echo "$msg";?></h3>
                 <h3 style="color:red; font-weight:bold;"><?php echo "$msge";?></h3>
              
                  <h1 class="h4 text-white mb-4">Bill Panel!</h1>
                </div>
            

                <form class="user" action="" method="post">

                  <div class="form-group row">

                  </div>
                  <div class="form-group">
                
                    <input type="text" class="form-control text-uppercase" id="exampleInputsponcerid" placeholder="Userid" name="userid" placeholder="User Id" required />

                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputname" name="pid" placeholder="Product ID" required />
                  </div>


                     <div class="form-group" >
                <select class="form-control form-group" name="package" placeholder="package" required/>
                 <option=" ">Select a Catagory</option>  
                  <option>Plants</option>
                  <option>Bio Fertilizer</option>
                  <option>Seeds</option>
                  <option>Equipment</option>
                  <option>Personal Care</option>
                  <option>Health Care</option>
                </select>
                </div>



                  <div class="form-group row">

                  </div>
                  <button class="btn btn-warning  btn-block" name="submit">
                    Submit
                  </button>


                </form>

                <br>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
<?php
 }
 ?>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
 
</body>


</html>
        <?php
             }
             else{
      
         header('location:maintanance/maintenance.html');
        
                }
        ?>