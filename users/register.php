<?php
include("include/dbcon.php");


$sql = "SELECT * FROM admin where userid='Admin2020' ";
$run = mysqli_query($db, $sql);
$row = mysqli_fetch_array($run);
if ($row['status'] != '0') {


  if (isset($_POST['next'])) {
    $sponcerid = $_POST['sponcerid'];
    $pin = $_POST['pin'];

    $search = mysqli_fetch_array(mysqli_query($db, "select * from user where userid = '$sponcerid'"));
    $row = mysqli_num_rows(mysqli_query($db, "select * from user where userid = '$sponcerid'"));
    $s_name = $search['name'];
    if ($row == 1) {

      $sql = "SELECT * FROM pinlist Where pin='$pin' and status='1'";
      $run = mysqli_query($db, $sql);
      $num = mysqli_num_rows($run);

      $sqladv = "SELECT * FROM pinadv Where pin='$pin' and status='1'";
      $runadv = mysqli_query($db, $sqladv);
      $numadv = mysqli_num_rows($runadv);


      $sql2 = "SELECT * FROM pintwo Where pin='$pin' and status='1'";
      $run2 = mysqli_query($db, $sql2);
      $num2 = mysqli_num_rows($run2);

      if ($num == 1) {

        $typin = 1;
        $success = 1;
      } else if ($num2 == 1) {

        $typin = 2;
        $success = 1;
      } else if ($numadv == 1) {

        $typin = 3;
        $success = 1;
      } else {
        $epin = "Invalid e-pin..";
      }
    } else {
      $espos = "Invalid Sponcerid";
    }
  }
?>










<?php
include("include/dbcon.php");



$check=mysqli_num_rows(mysqli_query($db,"select * from pinlist where pin = '$pin'"));

if (isset($_POST['register'])) {
  $sponcerid = $_POST['sponcerid'];
  $name = $_POST['name'];
  $pin = $_POST['pin'];
  $position = $_POST['position'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $rpassword = $_POST['rpassword'];
  $package = $_POST['package'];

// echo $pin;
// echo $sponcerid;
// echo $password;
// echo $rpassword;


  function is_pair_generated($sponcer,$pin)
  {
    global $db;
     
    
    $check=mysqli_num_rows(mysqli_query($db,"select * from pinlist where pin = '$pin'"));
          
$sponcer_for_pair = mysqli_fetch_array(mysqli_query($db,"select * from `tree` where userid = '$sponcer'"));
$get_sponcer_pair = $sponcer_for_pair['sponcer_count'];
    $get_Data = mysqli_fetch_array(mysqli_query($db, "select * from `tree` where userid = '$sponcer'"));
    $TOTAL_LEFT_COUNT = $get_Data['leftcount'];
    $TOTAL_RIGHT_COUNT = $get_Data['rightcount'];
    $left_added = $get_Data['left_added'];
    $right_added = $get_Data['right_added'];



    $date = date('Y-m-d');


    if ($left_added != '0' && $right_added != '0') {

      // echo "not zero/n";
      if ($left_added   !=  $right_added) {

        // echo "not equal/n";




        mysqli_query($db, "update `tree` set `left_added` = `left_added` - '1' where userid = '$sponcer'");
        mysqli_query($db,"update `tree` set `right_added` =`right_added` - '1' where userid = '$sponcer'");














        $MY_DATA = mysqli_query($db, "select * from pair_count where date ='$date' and  userid='$sponcer' ");
        $count_pair = mysqli_fetch_array($MY_DATA);
        $same_day_pair = $count_pair['total_pair'];

        if (mysqli_num_rows($MY_DATA) == 1) {
//  $user_sponcer = mysqli_query($db,"select * from `user` where userid ='$sponcer'");
//     $mysponcer = $user_sponcer['sponcerid'];
    
//     mysqli_query($db,"update `pair_count` set sponcerid = '$mysponcer' where userid = '$sponcer'");
  
         

          if ($count_pair['total_pair'] < 7) {



            mysqli_query($db, "update `pair_count` set `total_pair` = `total_pair` + '1' where date = '$date' and userid = '$sponcer'");
          } else {

            mysqli_query($db, "update `pair_count` set `extra_pair` = `extra_pair` + '1' where date = '$date' and userid = '$sponcer'");
          }

          $username = "SELECT * FROM pair_count where userid='$sponcer' and date = '$date'";
          $run = mysqli_query($db, $username);
          $add = mysqli_fetch_array($run);
          $get_extra_pair = $add['extra_pair'];


              
        $MY_DATA = mysqli_query($db, "select * from pair_count where date ='$date' and  userid='$sponcer'");
        $count_pair = mysqli_fetch_array($MY_DATA);
        $same_day_pair = $count_pair['total_pair'];



          $useradd = "SELECT * FROM user where userid='$sponcer'";
          $run = mysqli_query($db, $useradd);
          $add = mysqli_fetch_array($run);
          $franchise = $add['franchise'];
          $total_pairs = $same_day_pair + $get_extra_pair;


          $same_day_pair=0;
    $get_extra_pair=0;
        
  $MY_DATA = mysqli_query($db, "select * from pair_count where userid='$sponcer' ");

  while ($row = mysqli_fetch_assoc($MY_DATA)) {

    $arrange = $row['total_pair'];
    $arrange_extra=$row['extra_pair'];

  $same_day_pair = $same_day_pair + $arrange;
  $get_extra_pair = $get_extra_pair + $arrange_extra;

  }

  $total_pairs_total = $same_day_pair + $get_extra_pair;


     

         
   

       

         
          if ($franchise == 1) {



            if ($total_pairs <= 14 && $get_sponcer_pair>=2) {

            
              if($total_pairs_total % 3 !=0){
                $money =200;
               
                 pair_distribution($sponcer, $money);
  
      }

              
              
              

             
              
            }
          } else {

            echo "not frachise";
            if ($total_pairs <=7 &&  $get_sponcer_pair>=2 ) {
              $money=200;

              if($same_day_pair % 3 !=0){
  
               
                  pair_distribution($sponcer, $money);
   
       }
               
             
                
            }
          }
        } else {

          mysqli_query($db, "insert into pair_count (userid,total_pair) values ('$sponcer','1')");
          $money = 200;
    $user_sponcer = mysqli_fetch_array(mysqli_query($db,"select * from `user` where userid ='$sponcer'"));
    $mysponcer = $user_sponcer['sponcerid'];
    
    mysqli_query($db,"update `pair_count` set sponcerid = '$mysponcer' where userid = '$sponcer'");
  
  //  $same_day_pair=0;
  //   $get_extra_pair=0;
        
  // $MY_DATA = mysqli_query($db, "select * from pair_count where userid='$sponcer' ");

  // while ($row = mysqli_fetch_assoc($MY_DATA)) {

  //   $arrange = $row['total_pair'];
  //   $arrange_extra=$row['extra_pair'];

  // $same_day_pair = $same_day_pair + $arrange;
  // $get_extra_pair = $get_extra_pair + $arrange_extra;

  // }
      if($same_day_pair % 3 !=0){
  
               if($get_sponcer_pair>=2)
                 pair_distribution($sponcer, $money);
  
      }

         
              
            
        }
      }
    }
  }


  function placement_id($sponcerid, $position, $userid,$pin)
  {

    global $db;

    $spons_data = mysqli_fetch_array(mysqli_query($db, "select * from `user` where userid = '$sponcerid' "));
    if ($position == 'L') {

      if ($spons_data['left_side'] == '') {

        mysqli_query($db, "update `user` set `left_side`='$userid' where userid='$sponcerid'");
        mysqli_query($db, "update `user` set `placement_id`='$sponcerid' where userid='$userid'");
        binary_count($sponcerid, $position,$pin);
      } else {
        placement_id($spons_data['left_side'], $position, $userid,$pin);
      }
    } else {


      if ($spons_data['right_side'] == '') {

        mysqli_query($db, "update `user` set `right_side`='$userid' where userid='$sponcerid'");
        mysqli_query($db, "update `user` set `placement_id`='$sponcerid' where userid='$userid'");
        binary_count($sponcerid, $position,$pin);
      } else {
        placement_id($spons_data['right_side'], $position, $userid,$pin);
      }
    }
  }


  function level_distribution($sponcerid)
  {
    global $db;

    $date = date('Y-m-d');

    $update_income = "update `income` set day_bal=day_bal+'100' where userid='$sponcerid'";
    mysqli_query($db, $update_income);

    $update_sponcer_income = ("update `income` set direct_bal=direct_bal+ '100' where userid='$sponcerid'");
    mysqli_query($db,$update_sponcer_income);



    $insert_temp_income_of_day = "update `income` set temp_bal='100' where userid = '$sponcerid'";
    mysqli_query($db, $insert_temp_income_of_day);

 mysqli_query($db,"insert into income_history (date , userid ,amount,remark) values ('$date','$sponcerid','100','level')");



    $a = 0;
    // $sponcer_count=0;
    // while ($sponcer_count<3) {

    //   $find_Next_Sponcer_id = find_sponcer_id($sponcerid);

    //   $query = mysqli_query($db, "select * from income where userid='$sponcerid'");
    //   $data = mysqli_fetch_array($query);
    //   if($sponcer_count==0){
    //   $user_Income = 20;

    //   }
    //   else if($sponcer_count==1)
    //   {
    //     $user_Income = 10;
    //   }
    //   else if($sponcer_count==2)
    //   {
    //     $user_Income = 5;
    //   }

    //   $sponcerid = $find_Next_Sponcer_id;
     

    //   update_sponcer_income($sponcerid, $user_Income);
    //   $sponcer_count++;
    // }
  }




  function pair_distribution($sponcerid, $money)
  {
    global $db;
    // echo "distribute";

    $update_income = "update `income` set day_bal=day_bal + '$money' where userid='$sponcerid'";
    mysqli_query($db, $update_income);

    // echo "after";
     
     mysqli_query($db,"update `income` set matching_bal=matching_bal+ '$money' where userid='$sponcerid'");

    //  echo "after matching";

    $insert_temp_income_of_day_to_null = "update `income` set temp_bal='0' where userid = '$sponcerid'";
    mysqli_query($db, $insert_temp_income_of_day_to_null);
    // echo "after temp";

    $insert_temp_income_of_day = "update `income` set temp_bal=temp_bal+'$money' where userid = '$sponcerid'";
    mysqli_query($db, $insert_temp_income_of_day);
    // echo "end";

$date = date('Y-m-d');
mysqli_query($db,"insert into income_history (date , userid ,amount,remark) values ('$date','$sponcerid','$money','pair')");
 



    // $find_Next_Sponcer_id = find_sponcer_id($sponcerid);

    // $query = mysqli_query($db, "select * from income where userid='$sponcerid'");
    // $data = mysqli_fetch_array($query);
    // $user_Income = $data['temp_bal'];

    // $sponcerid = $find_Next_Sponcer_id;


    // update_sponcer_income($sponcerid, $user_Income);

    
  
    
          $find_Next_Sponcer_id = find_sponcer_id($sponcerid);
    
          $query = mysqli_query($db, "select * from income where userid='$sponcerid'");
          $data = mysqli_fetch_array($query);
         
          $user_Income = (20 * $money) / 100;
    
          
          $sponcerid = $find_Next_Sponcer_id;
         
    
          update_sponcer_income($sponcerid, $user_Income);
         
        
  }

  function find_sponcer_id($sponcerid)
  {
    global $db;

    $query = mysqli_query($db, "select * from user where userid='$sponcerid'");
    $result = mysqli_fetch_array($query);
    return $result['sponcerid'];
  }


  function find_placement_id($sponcerid)
  {
    global $db;

    $query = mysqli_query($db, "select * from user where userid='$sponcerid'");
    $result = mysqli_fetch_array($query);
    return $result['placement_id'];
  }

  function update_sponcer_income($sponcerid, $user_Income)
  {
    global $db;

    $money_added_to_sponcer = $user_Income;


    $update_income = ("update `income` set day_bal=day_bal+ '$money_added_to_sponcer' where userid='$sponcerid'");
    
    // mysqli_query($db,"update `income` set total_bal=day_bal+current_bal where userid='$sponcerid'");
    mysqli_query($db, $update_income);

    $update_sponcer_income = ("update `income` set sponcering_bal=sponcering_bal+ '$money_added_to_sponcer' where userid='$sponcerid'");
    mysqli_query($db,$update_sponcer_income);


    $update_temp_income_zero = ("update `income` set temp_bal='0' where userid='$sponcerid'");

    mysqli_query($db, $update_temp_income_zero);

    $update_temp_income = ("update `income` set temp_bal='$money_added_to_sponcer' where userid='$sponcerid'");

    mysqli_query($db, $update_temp_income);

   
  }

  $flag = 0;
  $query = mysqli_query($db, "SELECT * FROM tree where userid = '$sponcerid'");
  $result = mysqli_fetch_array($query);
  $position_value = $result[$position];
  if ($position_value == '') {
    $flag = 1;
  } else {
    $flag = 0;
  }



  $sql = "SELECT * FROM pinlist Where pin='$pin' and status='1'";





  $run = mysqli_query($db, $sql);
  $num = mysqli_num_rows($run);

  

 


$check_sponcerid_user=mysqli_num_rows(mysqli_query($db,"select * from user where userid='$sponcerid'"));
  
  
  $sqladv = "SELECT * FROM pinadv Where pin='$pin' and status='1'";





  $runadv = mysqli_query($db, $sqladv);
  $numadv = mysqli_num_rows($runadv);

  
  $sql2 = "SELECT * FROM pintwo Where pin='$pin' and status='1'";





  $run2 = mysqli_query($db, $sql2);
  $num2 = mysqli_num_rows($run2);
// pinabd
// pin2
 if($password == $rpassword){
  if (($num == 1 || $num2 == 1 || $numadv == 1 )) {
      
      
    
    $data = mysqli_fetch_assoc($run);
    $userid = $data['userid'];
   

    //activate user using pin
    // $activateuser = "UPDATE `user` SET status='1' where userid='$userid'";
    // $run = mysqli_query($db, $activateuser);

    //close the used pin
    
    $pinclose = "UPDATE `pinlist` SET status='0' where pin='$pin'";
    $run = mysqli_query($db, $pinclose);
    
    $pinadvclose = "UPDATE `pinadv` SET status='0' where pin='$pin'";
    $advrun = mysqli_query($db, $pinadvclose);
    
    $pintwoclose = "UPDATE `pintwo` SET status='0' where pin='$pin'";
    $tworun = mysqli_query($db, $pintwoclose);

   

    $success=2;
    }
     else {
        $success=1;
        $ipin= "You are using an Invalid PIN" ;
  
  
    
  }
 }  else {
  $success=1;
  $ipass= "Password and confirm password are not similar.." ;


}

  function find_user_position($sponcer)
  {

    global $db;
    $query = mysqli_query($db, "select * from user where userid='$sponcer'");
    $data = mysqli_fetch_array($query);

    $pos = $data['position'];
    if ($pos == 'L') {
      $pos = "leftcount";
    } else {
      $pos = "rightcount";
    }
    return $pos;
  }

  function find_user_added_position($sponcer)
  {

    global $db;
    $query = mysqli_query($db, "select * from user where userid='$sponcer'");
    $data = mysqli_fetch_array($query);

    $pos = $data['position'];
    if ($pos == 'L') {
      $pos = "left_added";
    } else {
      $pos = "right_added";
    }
    return $pos;
  }

  //BINARY  COUNT //

  function binary_count($sponcer, $pos,$pin)
  {
    if ($pos == 'L') {
      $pos = "leftcount";
      $added_pos = "left_added";
      $tl_count = "tl_count";
    } else {
      $pos = "rightcount";
      $added_pos = "right_added";
      $tl_count = "tr_count";
    }



    while ($sponcer != '') {
      global $db;
      $get_position = mysqli_fetch_array(mysqli_query($db, "select * from tree where userid='$sponcer'"));
      
      $get_count = $get_position[$pos];

      
      

      mysqli_query($db, "update `tree` set `$pos` =`$pos` + '1' where userid='$sponcer'");
      mysqli_query($db, "update `tree` set `$added_pos` =`$added_pos` + '1' where userid='$sponcer'");
      
      mysqli_query($db,"update `tree` set `$tl_count` =`$tl_count` + '1' where userid = '$sponcer' ");
      is_pair_generated($sponcer,$pin);
      $added_pos = find_user_added_position($sponcer);
      $pos = find_user_position($sponcer);
      $sponcer = find_placement_id($sponcer);
    }
  }






  $lastid = mt_rand(100000, 9999999);
  $userid = "SHN" . $lastid;







  //user details insert




  $sql = "INSERT INTO user(sponcerid,pin,userid, name, position, email, phone, password, package) VALUES ('$sponcerid','$pin','$userid','$name','$position','$email','$phone','$password','$package')";
  $run = mysqli_query($db, $sql);
  $query = "INSERT INTO tree (userid,sponcerid) VALUES ('$userid','$sponcerid')";
  $runquery = mysqli_query($db, $query);
  
  
  $sql_plan = "INSERT INTO plan(sponcerid,userid,name) VALUES ('$sponcerid','$userid','$name')";
  $run_plan = mysqli_query($db, $sql_plan);
  
  $querymonth = "INSERT INTO monthly_user (userid) VALUES ('$userid')";
  $runquerymonth = mysqli_query($db, $querymonth);
 

  $position_query = mysqli_fetch_array(mysqli_query($db,"select * from `user` where userid = '$sponcerid'"));
  
  $queryin = "INSERT INTO income (userid,name) VALUES ('$userid','$name')";
  $runqueryin = mysqli_query($db, $queryin);
  if($position_query[$position]==''){
  $querym = "UPDATE `tree` SET `$position`='$userid' where userid='$sponcerid'";
  $runmquery = mysqli_query($db, $querym);
  }
  
  if($position_query[$position]=='')
  $Update_user_table = mysqli_query($db, "update `user` set `$position` = '$userid' where userid = '$sponcerid'");


 

  mysqli_query($db,"insert into month(userid) values ('$userid')");
mysqli_query($db,"update `tree` set `sponcer_count` = `sponcer_count` + '1' where userid = '$sponcerid'");
$sponcer_count = mysqli_query($db,"select * from tree where userid = '$sponcerid'");
  
//***********************************************send sms alert**********************************************************//

  $field = array(
    "sender_id" => "FSTSMS",
    "language" => "english",
    "route" => "qt",
    "numbers" => "$phone",
    "message" => "38248",
    "variables" => "{#FF#}|{#DD#}|{#EE#}",
    "variables_values" => "$name|$userid|$password"
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

  //***********************************************send sms alert ***********************************************************//


  


  //  $INCOME_QUERY="INSERT INTO income(userid) VALUES ('$userid');
  //  $RUN_INCOME_QUERY=($db,$INCOME_QUERY);



  level_distribution($sponcerid);


  //  binary_count($sponcerid,$position,$pin);
  placement_id($sponcerid, $position, $userid,$pin);




















  $_SESSION['userid'] = $userid;
  $_SESSION['name'] = $name;
  $_SESSION['position'] = $position;
  $_SESSION['phone'] = $phone;
  $_SESSION['email'] = $email;
  $_SESSION['password'] = $password;
  $_SESSION['package'] = $package;
}

?>











<?php
if($success==2){
  include("include/dbcon.php");

$sql="SELECT *FROM user";
$run=mysqli_query($db,$sql);
$data=mysqli_fetch_assoc($run);
?>
  <!DOCTYPE html>
<html>
<head>
	<title>Welcome !</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/suva.png">
	<div class="container">
		<div class="img">
			<img src="img/background.svg">
		</div>
		<div class="login-content">
			<form action="login.php">
				<img src="img/abhi.svg">
				<h2 class="title">Welcome TO Siddharth Agro</h2>
				   <p><b>Congratulations</b></p>
				   <p>Mr./Mrs. <b><?php echo $name; ?></b></p></br>
				   <p><u>Your User ID is : <?php echo $userid; ?></u></p></br>
                   <p><u>Your Password is : <?php echo $rpassword; ?></u></p>
                   
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>


<?php
}
else if ($success == 1) {
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

      <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5 bg-light" style="background-image: url('https://images.unsplash.com/photo-1473656817456-d9559981e321?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->

              <div class="row">
                <div class="col-lg-4 d-none d-lg-block">

                </div>
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                      <h3 style="color:red; font-weight:bold;"><?php echo "$ipin"; ?></h3>
                      <h3 style="color:red; font-weight:bold;"><?php echo "$ipass"; ?></h3>
                      <h1 class="h4 text-white mb-4">Create an Account!</h1>
                    </div>



                      <form class="user" action="" method="post">

                        <div class="form-group">
                          <input type="text" class="form-control text-uppercase" id="exampleInputsponcerid" value="<?php echo $sponcerid ?>" name="sponcerid" placeholder="Sponcer ID" readonly />
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control text-uppercase" id="exampleInputsponcerid" value="<?php echo $s_name ?>" name="sname" placeholder="Sponcer ID" readonly />
                        </div>
                        <div class="form-group ">
                          <div class="form-group border pd-2 my-4 bg-gradient-light">
                            <label>Position</label><br>
                            <input type="radio" name="position" value="L" required/> Left |
                            <input type="radio" name="position" value="R" required/> Right
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <input type="text" class="form-control text-uppercase" id="exampleInputname" name="pin" value="<?php echo $pin; ?>" readonly />
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" id="exampleInputname" name="name" placeholder="Name" required />
                        </div>

                        <div class="form-group">
                          <input type="email" class="form-control " id="exampleInputemail" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control " id="exampleInputphone" name="phone" placeholder="Phone" required />
                        </div>

                        <div class="form-group">
                          <input type="password" class="form-control " id="exampleInputpassword" name="password" placeholder="password" required />
                        </div>

                        <div class="form-group">
                          <input type="password" class="form-control " id="exampleInputpassword" name="rpassword" placeholder="Re-enter password" required />
                        </div>

                        <?php
                        if ($typin == 1) {
                        ?>
                          <div class="form-group">
                            <select class="form-control form-group" name="package" placeholder="package" required />
                            <option value="">Select a Package</option>
                            <option>Vegitable Plants Package</option>
                            <option>Sagwan Plants Package</option>
                            <option>Chandan Plants Package</option>
                            <option>Fruit Plants Package</option>
                            <option>Indoor Plants Package</option>
                            </select>
                          </div>
                        <?php
                        } else if ($typin == 2) {
                        ?>
                          <div class="form-group">
                            <input type="text" class="form-control " id="exampleInputpassword" name="package" value="Suprme Package(2000)" readonly />
                          </div>
                        <?php
                        } else if ($typin == 3) {
                        ?>
                          <div class="form-group">
                            <input type="text" class="form-control " id="exampleInputpassword" name="package" value="Advance Booking(1000)" readonly />
                          </div>
                        <?php
                        }
                        ?>

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
                    <?php
                    } else {
                    ?>
                     <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SA - Reg</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    

  </head>

  <body class="bg-gradient-info">

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5 bg-light" style="background-image: url('https://images.unsplash.com/photo-1473656817456-d9559981e321?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->

              <div class="row">
                <div class="col-lg-4 d-none d-lg-block">

                </div>
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                      <h3 style="color:red; font-weight:bold;"><?php echo "$epin"; ?></h3>
                      <h3 style="color:red; font-weight:bold;"><?php echo "$espos"; ?></h3>
                      <h1 class="h4 text-white mb-4">Create an Account!</h1>
                    </div>
                      <form class="user" action="" method="post">
                        <div class="form-group">
                          <input type="text" class="form-control form-control-user" id="exampleInputuserid" aria-describedby="emailHelp" name="sponcerid" placeholder="Enter Sponcer ID..." required />
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control form-control-user" id="exampleInputPassword" name="pin" placeholder="e-Pin" required />
                        </div>

                        <button class="btn btn-primary btn-user btn-block" name="next">
                          Next
                        </button>
                        <hr>

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