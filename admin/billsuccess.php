<?php

include("include/dbcon.php");


?>

<?php


if (isset($_POST['done'])) {
  $userid = $_POST['uid'];
  $ndp = $_POST['dp'];
  $nbv = $_POST['bv'];
  $qty = $_POST['qty'];
  $dp = $ndp * $qty;
  $bv = $nbv * $qty;
  //user details update
  $useradd = "SELECT * FROM plan where userid='$userid'";
  $run = mysqli_query($db, $useradd);
  $adds = mysqli_num_rows($run);
  $add = mysqli_fetch_array($run);
  if ($adds == 1) {
    $ftdp = $add['dp'];
    $total_dp = $ftdp +  $dp;
    $ftbv = $add['bv'];
    $total_bv = $ftbv +  $bv;


    $pur = "UPDATE `plan` SET dp='$total_dp' where userid='$userid'";
    $run = mysqli_query($db, $pur);

    $pure = "UPDATE `plan` SET bv='$total_bv' where userid='$userid'";
    $rune = mysqli_query($db, $pure);




    function find_placement_id($sponcerid)
    {
      global $db;

      $query = mysqli_query($db, "select * from user where userid='$sponcerid'");
      $result = mysqli_fetch_array($query);
      return $result['placement_id'];
    }




    function left($agentid, $userid, $right_stack, $right_side, $i)
    {





      global $db;
      $data = mysqli_query($db, "select * from user where userid = '$agentid'");
      $sql = mysqli_fetch_array($data);

      $left_user = $sql['left_side'];

      $right_user = $sql['right_side'];


      if ($right_user != '')
        array_push($right_stack, $right_user);




      if ($left_user != '') {


        echo "---->$left_user";

        $query_bv = mysqli_fetch_array(mysqli_query($db, "select * from plan where userid = '$left_user'"));
        $query_left_bva = $query_bv['bv'];

        mysqli_query($db, "update `plan` set `left_bv` = `left_bv` + '$query_left_bva' where userid = '$userid'");

        // $query_bvm = mysqli_fetch_array(mysqli_query($db,"select * from plan where userid = '$left_user'"));
        // echo "---> $query_left_bva --->";


        left($left_user, $userid, $right_stack, $right_side, $i);
      } else {


        if ($right_stack[$i] != '') {






          $right = $right_stack[$i];
          echo "---->$right";




          $i++;

          $query_bvs = mysqli_fetch_array(mysqli_query($db, "select * from plan where userid = '$right'"));
          $query_left_bvs = $query_bvs['bv'];

          mysqli_query($db, "update `plan` set `left_bv` = `left_bv` + '$query_left_bvs' where userid = '$userid'");

          //  $query_bvr = mysqli_fetch_array(mysqli_query($db,"select * from plan where userid = '$right'"));

          //  echo "--->$query_bvr[bv]--->";

          left($right, $userid, $right_stack, $right_side, $i);
        }
      }
    }

    function right($agentid, $userid, $right_stack, $right_side, $i)
    {






      global $db;
      $data = mysqli_query($db, "select * from user where userid = '$agentid'");
      $sql = mysqli_fetch_array($data);

      $left_user = $sql['left_side'];

      $right_user = $sql['right_side'];

      // echo "-->right===$right_user-->";


      if ($right_user != '')
        array_push($right_stack, $right_user);




      if ($left_user != '') {


        echo "--->left = $left_user";

        $query_bv = mysqli_fetch_array(mysqli_query($db, "select * from plan where userid = '$left_user'"));
        $right_query_bv = $query_bv['bv'];

        mysqli_query($db, "update `plan` set `right_bv` = `right_bv` + '$right_query_bv' where userid = '$userid'");

        // $query_bvm = mysqli_fetch_array(mysqli_query($db,"select * from plan where userid = '$left_user'"));
        // // echo "--->$query_bvm[bv]--->";


        right($left_user, $userid, $right_stack, $right_side, $i);
      } else {
        echo $i;

        if ($right_stack[$i] != '') {






          $right = $right_stack[$i];
          echo "----$i---right-->$right";




          $i++;

          $query_bvs = mysqli_fetch_array(mysqli_query($db, "select * from plan where userid = '$right'"));
          $query_2 = $query_bvs['bv'];

          mysqli_query($db, "update `plan` set `right_bv` = `right_bv` + '$query_2' where userid = '$userid'");


          //  $query_bvr = mysqli_fetch_array(mysqli_query($db,"select * from plan where userid = '$right'"));

          //    echo "chekc";

          right($right, $userid, $right_stack, $right_side, $i);
        }
      }
    }



    while ($userid != '') {

      echo "while----------------->";



      $datas = mysqli_query($db, "select * from user where userid = '$userid'");
      $sqls = mysqli_fetch_array($datas);

      $left_side = $sqls['left_side'];

      $right_side = $sqls['right_side'];

      echo "--->left ==";
      echo "right side ----->";


      if ($left_side != '') {
        echo "--->left == $left_side";
        mysqli_query($db, "update `plan` set `left_bv` = '0' where userid = '$userid'");
        $query_bvs = mysqli_fetch_array(mysqli_query($db, "select * from plan where userid = '$left_side'"));
        $bvs = $query_bvs['bv'];
        // $left_bv_users = $query_bvs['right_bv'];
        // $right_bv_users = $query_bvs['left_bv'];
        // $totals = $my_bv + $left_bv_user + $right_bv_user;


        mysqli_query($db, "update `plan` set `left_bv` = '$bvs' where userid = '$userid'");
        // $query_bva = mysqli_fetch_array(mysqli_query($db,"select * from plan where userid = '$left_side'"));
        //         echo "------>$query_bva[bvs]---->";



        $left_stack = array();
        $j = 0;

        left($left_side, $userid, $left_stack, $right_side, $j);
      }



      /////////right users///////
      if ($right_side != '') {
        echo "right side ----->$right_side";
        mysqli_query($db, "update `plan` set `right_bv` = '0' where userid = '$userid'");

        $query_bv = mysqli_fetch_array(mysqli_query($db, "select * from plan where userid = '$right_side'"));
        $my_bv =  $query_bv['bv'];
        // $left_bv_user = $query['right_bv'];
        // $right_bv_user = $query['left_bv'];
        // $total = $my_bv + $left_bv_user + $right_bv_user;

        mysqli_query($db, "update `plan` set `right_bv` = '$my_bv' where userid = '$userid'");

        // $query_bvl = mysqli_fetch_array(mysqli_query($db,"select * from plan where userid = '$right_side'"));
        // echo "------>$query_bvl[bv]---->";

        // echo "$right_side";
        $i = 0;
        $right_stack = array();

        right($right_side, $userid, $right_stack, $right_side, $i);
      }




      ///////////left users////////




      $bv_query = mysqli_fetch_array(mysqli_query($db, "select * from plan where  userid = '$userid'"));
      $left_bv = $bv_query['left_bv'];
      $right_bv = $bv_query['right_bv'];
     
      $bv = $bv_query['bv'];
      $previous_pair = $bv_query['bv_pair'];
      // echo "---$left_bv";
      // echo "----$right_bv";


      if ($right_bv >= 2000 && $left_bv >= 2000 && $bv > 200) {

        $pair_right = (int)($right_bv / 2000);
        $pair_left = (int)($left_bv / 2000);



        if ($pair_right >  $pair_left) {
          $temp_pair = $pair_left;
        } else if ($pair_right <= $pair_left) {
          $temp_pair = $pair_right;
        }





        if ($previous_pair != $temp_pair) {



          mysqli_query($db, "update `plan` set `bv_pair` = '$temp_pair' where userid = '$userid'");
          // mysqli_query($db, "update `plan` set `last_bv_pair` = `last_bv_pair` + '1' where userid = '$userid'");

          $pair_query = mysqli_fetch_array(mysqli_query($db, "select * from plan where  userid = '$userid'"));
          $pairs_for_bonus = $pair_query['bv_pair'];
          $all_pairs = $pair_query['last_bv_pair'];

          $lbp = 0;
          if ($pairs_for_bonus >= 25) {
            $lbp = (int)($pairs_for_bonus / 25);
            $temp_lbp = $lbp;

            $perm_lbp = (int)($all_pairs / 25);
            mysqli_query($db, "update `plan` set `lbp` = '$perm_lbp' where userid = '$userid'");

            mysqli_query($db, "update `plan` set `temp_lbp` = '1' where userid = '$userid'");
            if ($pairs_for_bonus >= 250)
              mysqli_query($db, "update `plan` set `royalityfund_count` ='10' where userid = '$userid'");
          }
        }
      }




      $userid = find_placement_id($userid);
      echo "placement === $userid";
      
    $msge="Operation Susscefull"; 
  header("location:bill.php?msge=$msge");
 
    }
  } else {
      $msg = "Userid does not exist..";
      header("location:bill.php?msg=$msg");

  }
 
}


?>


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
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
