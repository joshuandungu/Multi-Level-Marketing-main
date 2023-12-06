<?php

include("include/dbcon.php");
include("include/login_check.php");

$sql="SELECT *FROM user";
$run=mysqli_query($db,$sql);
$data=mysqli_fetch_assoc($run);

if(isset($_POST['upload'])){
    $userid=$_SESSION['userid'];
     $img=$_FILES['img'];
 
// print_r($img);
$filename =  "$userid";
$filepath = $img['tmp_name'];
$fileerror = $img['error'];
 if($fileerror == 0){

  $destfile = '../admin/photos/'.$filename;
  //echo "$destfile";
  move_uploaded_file($filepath, $destfile);

 
  
 

  //user details insert
    $activateuser="UPDATE `kyc` SET img='$destfile' where userid='$userid'";
    $run=mysqli_query($db,$activateuser);


  
//  $_SESSION['productid']=$productid;
//  $_SESSION['name']=$name;
//  $_SESSION['price']=$price;
//  $_SESSION['img']=$img;

$out = "success";
 }
  else{
    $can = "failed";
  }



   
 } 
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="profile.css">
<body>
  <div class="main-content">
  
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
    
        <a href="index.php" class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Dashboard</a>
       
      
   
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                      <?php
                $sql="SELECT * FROM kyc where userid='$_SESSION[userid]' and img!=''";
                $run=mysqli_query($db,$sql);
                $num=mysqli_num_rows($run);
                $row=mysqli_fetch_array($run);
                if($num==1){
                    
                      ?>
                      <img class="img-profile rounded-circle" src="<?php echo $row['img']; ?>" width="50px">
                                           

                      <?php
                      }
                      else{
                      ?>
                         <img class="img-profile rounded-circle" src="userq.png" width="50px">
                      <?php
                      }
                      ?>
               
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php
                    $username="SELECT * FROM user where userid='$_SESSION[userid]'";
                    $run=mysqli_query($db,$username);
                    $add=mysqli_fetch_array($run);
                    $USER_NAME=$add['name'];
                    echo $USER_NAME;
                   ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
              
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(unsplash.jpg); background-size: cover; background-position: center top;">

      <span class="mask bg-gradient-default opacity-8"></span>
   
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php
                    $username="SELECT * FROM user where userid='$_SESSION[userid]'";
                    $run=mysqli_query($db,$username);
                    $add=mysqli_fetch_array($run);
                    $USER_NAME=$add['name'];
                    echo $USER_NAME;
                   ?></h1>
          
          </div>
        </div>
      </div>
    </div>
 
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                       <?php
                $sql="SELECT * FROM kyc where userid='$_SESSION[userid]' and img!=''";
           
                $run=mysqli_query($db,$sql);
                $num=mysqli_num_rows($run);
                $row=mysqli_fetch_array($run);
                if($num==1){
                    
                      ?>
                      <img class="img-profile rounded-circle" src="<?php echo $row['img']; ?>" width="100px">
                                           

                      <?php
                      }
                      else{
                      ?>
                         <img class="img-profile rounded-circle" src="userq.png" width="100px">
                      <?php
                      }
                      ?>
                    
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
              
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">

                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                <?php
                    $username="SELECT * FROM user where userid='$_SESSION[userid]'";
                    $run=mysqli_query($db,$username);
                    $add=mysqli_fetch_array($run);
                    $USER_NAME=$add['name'];
                    echo $USER_NAME;
                   ?><span class="font-weight-light">,<?php
                
                   $useradd="SELECT * FROM kyc where userid='$_SESSION[userid]'";
                   $run=mysqli_query($db,$useradd);
                   $add=mysqli_fetch_array($run);
                   $total_count=$add['age'];
                  
                   echo $total_count;
                  ?></span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?php
                     $add="SELECT * FROM kyc where userid='$_SESSION[userid]'";
                     $run=mysqli_query($db,$add);
                     $addr=mysqli_fetch_array($run);
                     $ADDRESS=$addr['city'];
                    echo $ADDRESS;
                  ?>,INDIA
                </div>
              
              </div>
            </div>
          </div>
       <?php
           $sql="SELECT * FROM kyc where userid='$_SESSION[userid]'";
           
           $run=mysqli_query($db,$sql);
           $num=mysqli_num_rows($run);
           if($num==1){
               ?>
         <form action="" method="POST" enctype="multipart/form-data">
                   <div class="row">
                     <div class="col-lg-6">
                       <div class="form-group focused">
                        <h3 style="color:green;"><?php echo $out; ?></h3>   
                        <h3 style="color:red;"><?php echo $can; ?></h3>  
                        <h3 style="color:red;"><?php echo $cano; ?></h3>  

                        <label class="form-control-label" for="input-first-name">Upload Photo</label>
                        <input type="file" id="input-first-name" class="form-control form-control-alternative" name="img"required/><br>
                         <button class="btn btn-info btn-user btn-block" type="submit" name="upload">
                      Upload
                    </button>
                      </div>
                    </div></div></div>
                        
         </form>
                    <?php
           } else{
               ?>
                <form action="" method="POST" enctype="multipart/form-data">
                   <div class="row">
                     <div class="col-lg-6">
                       <div class="form-group focused">
                        <label class="form-control-label text-info" for="input-first-name">Upload Photo</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative text-dark" value="complete your kyc"  readonly/><br>
                     <a class="btn btn-primary" href="kyc.php">KYC !</a>
                      </div>
                    </div></div></div>
                       <h3 style="color:red;"><?php echo $out; ?></h3>             
         </form>
         <?php
           }
           ?>
       
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
               
              </div>
            </div>


            
            <div class="card-body">
              <form action="" method="GET" enctype="multipart/form-data">
                <h6 class="heading-small text-muted mb-4">Presnal information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Sponser ID</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Sponser Id" name= "sponcerid" value="<?php
                     $mail="SELECT * FROM user where userid='$_SESSION[userid]'";
                     $run=mysqli_query($db,$mail);
                     $email=mysqli_fetch_array($run);
                     $ADDRESS=$email['sponcerid'];
                    echo $ADDRESS;
                  ?>"readonly> 
                      </div>



                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">User ID</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="User Id" value="<?php
                        if($_SESSION['userid'] ){

                            echo $_SESSION['userid'];
                        
                             
                        
                        } ?>" readonly>
                      </div>
                    </div>


                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="Email ID" value="<?php
                     $mail="SELECT * FROM user where userid='$_SESSION[userid]'";
                     $run=mysqli_query($db,$mail);
                     $email=mysqli_fetch_array($run);
                     $ADDRESS=$email['email'];
                    echo $ADDRESS;
                  ?>"readonly> 
                      </div>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Name" value=" <?php
                    $username="SELECT * FROM user where userid='$_SESSION[userid]'";
                    $run=mysqli_query($db,$username);
                    $add=mysqli_fetch_array($run);
                    $USER_NAME=$add['name'];
                    echo $USER_NAME;
                   ?>"readonly>
                      </div>
                    </div>
             
             
                    

                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Mobile Number</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Pan Card Number" value="<?php
                     $pan="SELECT * FROM user where userid='$_SESSION[userid]'";
                     $run=mysqli_query($db,$pan);
                     $panc=mysqli_fetch_array($run);
                     $ADDRESS=$panc['phone'];
                    echo $ADDRESS;
                  ?>"readonly> 
                   </div>



                   <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Pan card Number</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Adhar Card Number" value="<?php
                     $addhar="SELECT * FROM kyc where userid='$_SESSION[userid]'";
                     $run=mysqli_query($db,$addhar);
                     $addharc=mysqli_fetch_array($run);
                     $ADDRESS=$addharc['pan'];
                    echo $ADDRESS;
                  ?>"readonly> 
                      </div>



                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Adhar Card Number</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Adhar Card Number" value="<?php
                     $addhar="SELECT * FROM kyc where userid='$_SESSION[userid]'";
                     $run=mysqli_query($db,$addhar);
                     $addharc=mysqli_fetch_array($run);
                     $ADDRESS=$addharc['addhar'];
                    echo $ADDRESS;
                  ?>"readonly> 
                      </div>



                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Age</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Age" value="<?php
                
                $useradd="SELECT * FROM kyc where userid='$_SESSION[userid]'";
                $run=mysqli_query($db,$useradd);
                $add=mysqli_fetch_array($run);
                $total_count=$add['age'];
               
                echo $total_count;
               ?>"readonly>
                      </div>




                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Gender</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="Gender" value="<?php
                
                $useradd="SELECT * FROM kyc where userid='$_SESSION[userid]'";
                $run=mysqli_query($db,$useradd);
                $add=mysqli_fetch_array($run);
                $total_count=$add['gender'];
               
                echo $total_count;
               ?>"readonly> 
                      </div>
                    </div>
                  </div>
                </div>



                <hr class="my-4">
                <!-- Bank Info -->
                <h6 class="heading-small text-muted mb-4">Bank information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Account Number</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="<?php
                
                $useradd="SELECT * FROM kyc where userid='$_SESSION[userid]'";
                $run=mysqli_query($db,$useradd);
                $add=mysqli_fetch_array($run);
                $total_count=$add['account'];
               
                echo $total_count;
               ?>" type="number"readonly>
                      </div>
                    </div>
                  </div>




                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">IFSC CODE</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="text" value="<?php
                
                $useradd="SELECT * FROM kyc where userid='$_SESSION[userid]'";
                $run=mysqli_query($db,$useradd);
                $add=mysqli_fetch_array($run);
                $total_count=$add['ifsc'];
               
                echo $total_count;
               ?>"readonly>
                      </div>
                    </div>



                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Account Holder Name</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="<?php
                
                $username="SELECT * FROM user where userid='$_SESSION[userid]'";
                $run=mysqli_query($db,$username);
                $add=mysqli_fetch_array($run);
                $USER_NAME=$add['name'];
                echo $USER_NAME;
               ?>"readonly>
                      </div>
                    </div>





                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Branch Name</label>
                        <input type="text" id="input-postal-code" class="form-control form-control-alternative" placeholder="ABC" value="<?php
                
                $useradd="SELECT * FROM kyc where userid='$_SESSION[userid]'";
                $run=mysqli_query($db,$useradd);
                $add=mysqli_fetch_array($run);
                $total_count=$add['branch'];
                echo $total_count;
               ?>"readonly>
                      </div>
                    </div>
                  </div>
                </div>



                <hr class="my-4">
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="<?php
                
                $useradd="SELECT * FROM kyc where userid='$_SESSION[userid]'";
                $run=mysqli_query($db,$useradd);
                $add=mysqli_fetch_array($run);
                $total_count=$add['address'];
                echo $total_count;
               ?>" type="text"readonly>
                      </div>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="<?php
                
                $useradd="SELECT * FROM kyc where userid='$_SESSION[userid]'";
                $run=mysqli_query($db,$useradd);
                $add=mysqli_fetch_array($run);
                $total_count=$add['city'];
                echo $total_count;
               ?>"readonly>
                      </div>
                    </div>



                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">STATE</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="<?php
                
                $useradd="SELECT * FROM kyc where userid='$_SESSION[userid]'";
                $run=mysqli_query($db,$useradd);
                $add=mysqli_fetch_array($run);
                $total_count=$add['state'];
                echo $total_count;
               ?>"readonly>
                      </div>
                    </div>



                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Pincode</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Pincode" value="<?php
                
                $useradd="SELECT * FROM kyc where userid='$_SESSION[userid]'";
                $run=mysqli_query($db,$useradd);
                $add=mysqli_fetch_array($run);
                $total_count=$add['pincode'];
                echo $total_count;
               ?>"readonly>
                      </div>
                    </div>



                  </div>
                </div>
                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6 m-auto text-center">
        <div class="copyright">
        <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Siddharth Agro 2020</span>
          </div>
        </div>
      </footer>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>