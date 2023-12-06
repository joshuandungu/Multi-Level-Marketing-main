<?php
session_start();
include("include/dbcon.php");

if(isset($_POST['done'])){
  $userid=$_POST['userid'];
  $package=$_POST['package'];
  $qty=$_POST['qty'];
  
 //user details update
$useradd="SELECT * FROM admin where userid='$userid'";
$run=mysqli_query($db,$useradd);
$adds=mysqli_num_rows($run);
$add=mysqli_fetch_array($run);
if($adds==1){


            //***********************agent details update****************************


            $stock = "SELECT * FROM admin where userid='$userid'";
            $runs = mysqli_query($db, $stock);
            $sub = mysqli_fetch_array($runs);

            if ($package == "Plants") {
               
                    $ftdp = $sub['plants'];
                    $total_plant = $ftdp + $qty;

                    
                    $purp = "UPDATE `admin` SET plants='$total_plant' where userid='$userid'";
                    $run = mysqli_query($db, $purp);

                    $msge="Stock Aloted.....";
                    header("location:stock_me.php?msge=$msge");

                }
               else if ($package == "Bio Fertilizer") {
                
                    $ftdp = $sub['bio_fertilizer'];
                    $total_bio = $ftdp + $qty;

                    $purb = "UPDATE `admin` SET bio_fertilizer='$total_bio' where userid='$userid'";
                    $run = mysqli_query($db, $purb);

                    $msge="Stock Aloted.....";
                    header("location:stock_me.php?msge=$msge");

               
            } else if ($package == "Seeds") {
             
                    $ftdp = $sub['seeds'];
                    $total_seed = $ftdp + $qty;

                    $purseed = "UPDATE `admin` SET seeds='$total_seed' where userid='$userid'";
                    $run = mysqli_query($db, $purseed);
                    
                    $msge="Stock Aloted.....";
                    header("location:stock_me.php?msge=$msge");

                
            } else if ($package == "Equipment") {
               
                    $ftdp = $sub['equipment'];
                    $total_equip = $ftdp + $qty;

                    $pure = "UPDATE `admin` SET equipment='$total_equip' where userid='$userid'";
                    $run = mysqli_query($db, $pure);
                 
                    $msge="Stock Aloted.....";
                    header("location:stock_me.php?msge=$msge");

             
            } else if ($package == "Personal Care") {
                
                    $ftdp = $sub['personal_care'];
                    $total_per = $ftdp + $qty;

                    $purper = "UPDATE `admin` SET personal_care='$total_per' where userid='$userid'";
                    $run = mysqli_query($db, $purper);
                   
                    $msge="Stock Aloted.....";
                    header("location:stock_me.php?msge=$msge");

            } else if ($package == "Health Care") {
               
                    $ftdp = $sub['health_care'];
                    $total_hea = $ftdp + $qty;

                    $purhea = "UPDATE `admin` SET health_care='$total_hea' where userid='$userid'";
                    $run = mysqli_query($db, $purhea);

                    $msge="Stock Aloted.....";
                     header("location:stock_me.php?msge=$msge");
            }
 
}

else{
  $msg="Userid does not exist..";
  header("location:stock_me.php?msg=$msg");
}



}
?>