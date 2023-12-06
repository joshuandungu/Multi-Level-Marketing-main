
  
  <?php
session_start();
include("include/dbcon.php");

if(isset($_POST['done'])){
  $name=$_POST['name'];
  $package=$_POST['package'];
  $dp=$_POST['dp'];
  $bv=$_POST['bv'];
  
  $useradd = "SELECT * FROM plant where name='$name'";
  $run = mysqli_query($db, $useradd);
  $adds = mysqli_num_rows($run);
  
  
  $useradds = "SELECT * FROM seeds where name='$name'";
  $runs = mysqli_query($db, $useradds);
  $addss = mysqli_num_rows($runs);
 
 
  $useradde = "SELECT * FROM equip where name='$name'";
  $runee = mysqli_query($db, $useradde);
  $addsee = mysqli_num_rows($runee);
 
  
  
  $useraddb = "SELECT * FROM bio where name='$name'";
  $runb = mysqli_query($db, $useraddb);
  $addsb = mysqli_num_rows($runb);
 
  
  $useraddp = "SELECT * FROM per_care where name='$name'";
  $runp = mysqli_query($db, $useraddp);
  $addsp = mysqli_num_rows($runp);
  
  
  $useraddh = "SELECT * FROM heal_care where name='$name'";
  $runh = mysqli_query($db, $useraddh);
  $addsh = mysqli_num_rows($runh);
  
  if ($adds == 1)
  {

           

          $msg="Item Already exist......."; 
          header("location:add_item.php?msg=$msg");
           
  }
   else if ($addss == 1)
  {

           

          $msg="Item Already exist......."; 
          header("location:add_item.php?msg=$msg");
           
  }
   else if ($addsee == 1)
  {

           

          $msg="Item Already exist......."; 
          header("location:add_item.php?msg=$msg");
           
  }
   else if ($addsb == 1)
  {

           

          $msg="Item Already exist......."; 
          header("location:add_item.php?msg=$msg");
           
  }
   else if ($addsp == 1)
  {

           

          $msg="Item Already exist......."; 
          header("location:add_item.php?msg=$msg");
           
  }
   else if ($addsh == 1)
  {

           

          $msg="Item Already exist......."; 
          header("location:add_item.php?msg=$msg");
           
  }
  
  
   else {
        //***********************agent details update****************************
            if ($package == "Plants") {
               
                    $purp = "INSERT INTO `plant`(`name`, `dp`, `bv`) VALUES ('$name','$dp','$bv')";
                    $run = mysqli_query($db, $purp);

                   
                     $msge="Item Added Successfully......."; 
                     header("location:add_item.php?msge=$msge");
  
                }
               else if ($package == "Bio Fertilizer") {
                
                   

                    $purb = "INSERT INTO `bio`(`name`, `dp`, `bv`) VALUES ('$name','$dp','$bv')";
                    $run = mysqli_query($db, $purb);

                    $msge="Item Added Successfully......."; 
                    header("location:add_item.php?msge=$msge");
  
               
            } else if ($package == "Seeds") {
             
                    

                    $purseed = "INSERT INTO `seeds`(`name`, `dp`, `bv`) VALUES ('$name','$dp','$bv')";
                    $run = mysqli_query($db, $purseed);
                    
                    $msge="Item Added Successfully......."; 
                    header("location:add_item.php?msge=$msge");
  
                
            } else if ($package == "Equipment") {
               

                    $pure = "INSERT INTO `equip`(`name`, `dp`, `bv`) VALUES ('$name','$dp','$bv')";
                    $run = mysqli_query($db, $pure);
                 
                     $msge="Item Added Successfully......."; 
                     header("location:add_item.php?msge=$msge");
  
             
            } else if ($package == "Personal Care") {
                
                  

                    $purper = "INSERT INTO `per_care`(`name`, `dp`, `bv`) VALUES ('$name','$dp','$bv')";
                    $run = mysqli_query($db, $purper);
                   
                     $msge="Item Added Successfully......."; 
                     header("location:add_item.php?msge=$msge");
  
            } else if ($package == "Health Care") {
               
                    
                    $purhea = "INSERT INTO `heal_care`(`name`, `dp`, `bv`) VALUES ('$name','$dp','$bv')";
                    $run = mysqli_query($db, $purhea);

                     $msge="Item Added Successfully......."; 
                     header("location:add_item.php?msge=$msge");
  
            }
 
}



}
?>