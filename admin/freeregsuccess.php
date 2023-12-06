
<?php
session_start();
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
  $package = $_POST['package'];




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

      echo "not zero/n";
      if ($left_added   !=  $right_added) {

        echo "not equal/n";




        mysqli_query($db, "update `tree` set `left_added` = `left_added` - '1' where userid = '$sponcer'");
        mysqli_query($db,"update `tree` set `right_added` =`right_added` - '1' where userid = '$sponcer'");














        $MY_DATA = mysqli_query($db, "select * from pair_count where date ='$date' and  userid='$sponcer' ");
        $count_pair = mysqli_fetch_array($MY_DATA);
        $same_day_pair = $count_pair['total_pair'];

        if (mysqli_num_rows($MY_DATA) == 1) {

         

          if ($count_pair['total_pair'] < 7) {



            mysqli_query($db, "update `pair_count` set `total_pair` = `total_pair` + '1' where date = '$date' and userid = '$sponcer'");
          } else {

            mysqli_query($db, "update `pair_count` set `extra_pair` = `extra_pair` + '1' where date = '$date' and userid = '$sponcer'");
          }
          $username = "SELECT * FROM pair_count where userid='$sponcer' and date = '$date'";
          $run = mysqli_query($db, $username);
          $add = mysqli_fetch_array($run);
          $get_extra_pair = $add['extra_pair'];


              
        $MY_DATA = mysqli_query($db, "select * from pair_count where date ='$date' and  userid='$sponcer' ");
        $count_pair = mysqli_fetch_array($MY_DATA);
        $same_day_pair = $count_pair['total_pair'];



          $useradd = "SELECT * FROM user where userid='$sponcer'";
          $run = mysqli_query($db, $useradd);
          $add = mysqli_fetch_array($run);
          $franchise = $add['franchise'];
          $total_pairs = $same_day_pair + $get_extra_pair;

       

         
          if ($franchise == 1) {



            if ($total_pairs <= 14 && $same_day_pair != 3 && $total_pairs != 6 && $total_pairs != 9 && $total_pairs != 12 && $get_sponcer_pair>=2) {
              $money = 200;

              
              
              

              pair_distribution($sponcer, $money);
              
            }
          } else {

            echo "not frachise";
            if ( $same_day_pair != 3 && $same_day_pair != 6 && $same_day_pair <=7 &&  $get_sponcer_pair>=2 ) {
               
              $money = 200;
               

               

                pair_distribution($sponcer, $money);
                
            }
          }
        } else {

          mysqli_query($db, "insert into pair_count (userid,total_pair) values ('$sponcer','1')");
          $money = 200;
         
         
              if($get_sponcer_pair>=2)
            pair_distribution($sponcer, $money);
            
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
    echo "distribute";

    $update_income = "update `income` set day_bal=day_bal + '$money' where userid='$sponcerid'";
    mysqli_query($db, $update_income);

    echo "after";
     
     mysqli_query($db,"update `income` set matching_bal=matching_bal+ '$money' where userid='$sponcerid'");

     echo "after matching";

    $insert_temp_income_of_day_to_null = "update `income` set temp_bal='0' where userid = '$sponcerid'";
    mysqli_query($db, $insert_temp_income_of_day_to_null);
    echo "after temp";

    $insert_temp_income_of_day = "update `income` set temp_bal=temp_bal+'$money' where userid = '$sponcerid'";
    mysqli_query($db, $insert_temp_income_of_day);
    echo "end";






    // $find_Next_Sponcer_id = find_sponcer_id($sponcerid);

    // $query = mysqli_query($db, "select * from income where userid='$sponcerid'");
    // $data = mysqli_fetch_array($query);
    // $user_Income = $data['temp_bal'];

    // $sponcerid = $find_Next_Sponcer_id;


    // update_sponcer_income($sponcerid, $user_Income);

    $sponcer_count=0;
    while ($sponcer_count<3) {
    
          $find_Next_Sponcer_id = find_sponcer_id($sponcerid);
    
          $query = mysqli_query($db, "select * from income where userid='$sponcerid'");
          $data = mysqli_fetch_array($query);
          if($sponcer_count==0){
          $user_Income = (20 * $money) / 100;
    
          }
          else if($sponcer_count==1)
          {
            $user_Income =(10 * $money) / 100;
          }
          else if($sponcer_count==2)
          {
            $user_Income = (5 * $money) / 100;
          }
    
          $sponcerid = $find_Next_Sponcer_id;
         
    
          update_sponcer_income($sponcerid, $user_Income);
          $sponcer_count++;
        }
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



  $sql = "SELECT * FROM freepin Where pin='$pin' and status='1'";





  $run = mysqli_query($db, $sql);
  $num = mysqli_num_rows($run);

  

 


$check_sponcerid_user=mysqli_num_rows(mysqli_query($db,"select * from user where userid='$sponcerid'"));
  
 
 
  if (($num == 1)) {
      if($sponcerid!=''){
      if($check_sponcerid_user == 1){
    
    $data = mysqli_fetch_assoc($run);
    $userid = $data['userid'];
   

    //activate user using pin
    $activateuser = "UPDATE `user` SET status='1' where userid='$userid'";
    $run = mysqli_query($db, $activateuser);

    //close the used pin
    
    $pinclose = "UPDATE `freepin` SET status='0' where pin='$pin'";
    $run = mysqli_query($db, $pinclose);
    
    
   



    header('location:welcome.php');}
    else{
        ?>
         <script>
      alert('You are using an invalid SponcerID ')
  </script>
  <?php
  return false;
    }
      }
    else{
         ?>
         <script>
      alert('Please Check sponcer name')
  </script>
  <?php
       return false; 
    }
    
  } else {
    ?>
    <script>
      alert('You are using an Invalid PIN ')
  </script>
  <?php
     return false;
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
    } else {
      $pos = "rightcount";
      $added_pos = "right_added";
    }



    while ($sponcer != '') {
      global $db;
      $get_position = mysqli_fetch_array(mysqli_query($db, "select * from tree where userid='$sponcer'"));
      $get_count = $get_position[$pos];

      mysqli_query($db, "update `tree` set `$pos` =`$pos` + '1' where userid='$sponcer'");
      mysqli_query($db, "update `tree` set `$added_pos` =`$added_pos` + '1' where userid='$sponcer'");
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
