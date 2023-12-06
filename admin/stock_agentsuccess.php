<?php
session_start();
include("include/dbcon.php");

if(isset($_POST['done'])){
  $userid=$_POST['userid'];
  $package=$_POST['package'];
  $qty=$_POST['qty'];
  
 //user details update
$useradd="SELECT * FROM agency where userid='$userid'";
$run=mysqli_query($db,$useradd);
$adds=mysqli_num_rows($run);
$add=mysqli_fetch_array($run);
if($adds==1){


            //***********************agent details update****************************


            $stock = "SELECT * FROM agency where userid='$userid'";
            $runs = mysqli_query($db, $stock);
            $sub = mysqli_fetch_array($runs);
            
            $stock_admin = "SELECT * FROM admin where userid='Admin2020'";
            $runs_admin = mysqli_query($db, $stock_admin);
            $sub_admin = mysqli_fetch_array($runs_admin);
            
            if ($package == "Plants") {
               
                    $ftdp = $sub['plants'];
                    $total_plant = $ftdp + $qty;
                    
                    $ftdpp = $sub_admin['plants'];
                    $total_plant_admin = $ftdpp - $qty;

                    
                    $purp = "UPDATE `agency` SET plants='$total_plant' where userid='$userid'";
                    $run = mysqli_query($db, $purp);
                    
                    $purpp = "UPDATE `admin` SET plants='$total_plant_admin' where userid='Admin2020'";
                    $runp = mysqli_query($db, $purpp);

                    $msge="Sell Successfull..";
                    header("location:stock_agent.php?msge=$msge");
 
                }
               else if ($package == "Bio Fertilizer") {
                
                    $ftdp = $sub['bio_fertilizer'];
                    $total_bio = $ftdp + $qty;

                    $ftdpp = $sub_admin['bio_fertilizer'];
                    $total_plant_admin = $ftdpp - $qty;
            
                    $purb = "UPDATE `agency` SET bio_fertilizer='$total_bio' where userid='$userid'";
                    $run = mysqli_query($db, $purb);
                    
                    $purpb = "UPDATE `admin` SET bio_fertilizer='$total_plant_admin' where userid='Admin2020'";
                    $runb = mysqli_query($db, $purpb);

                    $msge="Sell Successfull..";
                    header("location:stock_agent.php?msge=$msge");

               
            } else if ($package == "Seeds") {
             
                    $ftdp = $sub['seeds'];
                    $total_seed = $ftdp + $qty;
                    
                    $ftdpp = $sub_admin['seeds'];
                    $total_plant_admin = $ftdpp - $qty;

                    $purseed = "UPDATE `agency` SET seeds='$total_seed' where userid='$userid'";
                    $run = mysqli_query($db, $purseed);
                    
                    $purps = "UPDATE `admin` SET seeds='$total_plant_admin' where userid='Admin2020'";
                    $runs = mysqli_query($db, $purps);
                    
                    $msge="Sell Successfull..";
                    header("location:stock_agent.php?msge=$msge");

                
            } else if ($package == "Equipment") {
               
                    $ftdp = $sub['equipment'];
                    $total_equip = $ftdp + $qty;
                    
                     $ftdpp = $sub_admin['equipment'];
                    $total_plant_admin = $ftdpp - $qty;

                    $pure = "UPDATE `agency` SET equipment='$total_equip' where userid='$userid'";
                    $run = mysqli_query($db, $pure);
                 
                     $purppe = "UPDATE `admin` SET equipment='$total_plant_admin' where userid='Admin2020'";
                    $runpe = mysqli_query($db, $purppe);
                    
                    $msge="Sell Successfull..";
                    header("location:stock_agent.php?msge=$msge");

             
            } else if ($package == "Personal Care") {
                
                    $ftdp = $sub['personal_care'];
                    $total_per = $ftdp + $qty;
                    
                    $ftdpp = $sub_admin['personal_care'];
                    $total_plant_admin = $ftdpp - $qty;

                    $purper = "UPDATE `agency` SET personal_care='$total_per' where userid='$userid'";
                    $run = mysqli_query($db, $purper);
                   
                    $purpa = "UPDATE `admin` SET personal_care='$total_plant_admin' where userid='Admin2020'";
                    $runa = mysqli_query($db, $purpa);
                    
                    $msge="Sell Successfull..";
                    header("location:stock_agent.php?msge=$msge");

            } else if ($package == "Health Care") {
               
                    $ftdp = $sub['health_care'];
                    $total_hea = $ftdp + $qty;
                    
                    $ftdpp = $sub_admin['health_care'];
                    $total_plant_admin = $ftdpp - $qty;

                    $purhea = "UPDATE `agency` SET health_care='$total_hea' where userid='$userid'";
                    $run = mysqli_query($db, $purhea);

                     $purph = "UPDATE `admin` SET health_care='$total_plant_admin' where userid='Admin2020'";
                    $runh = mysqli_query($db, $purph);
                    
                    $msge="Sell Successfull..";
                    header("location:stock_agent.php?msge=$msge");

            }
 
}

else{
  $msg="Userid does not exist..";
   header("location:stock_agent.php?msg=$msg");

}



}
?>