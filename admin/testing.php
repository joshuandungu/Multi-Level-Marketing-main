<?php


include("include/dbcon.php");



  
   $userid=SHN8386641;

 

        

          $id=[$userid];
          $i=0;
          for($i;$i<=2;$i++){
            $temp_id_index=0;
            $divide=pow(2,$i);
            
            ?>
           
          
          <?php
          for($d=0;$d< $divide; $d++)
          {
          ?> 
            <?php echo 12/$divide ?> 
             <?php echo $id[$d]?><?php echo ($id[$d]!='') ?> 
             <?php echo ($id[$d]!='') ?><br>
            <?php echo $p_id=$id[$d]?></p>
             
            
          <?php

          
            
            for($p=0;$p < 2 ;$p++){
            $temp_id[ $temp_id_index]=fetch_left_right($p,$p_id);
            $temp_id_index++;

            }
            
            }
             $id=$temp_id;
          ?>
         
          <?php
           }


           function fetch_left_right($position,$agentid){
             global $db;
             if($position ==0){
               $pos = 'left_side';
             }
             else{
               $pos = 'right_side'; 
             }
            
             $data=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM `user` WHERE `userid`='$agentid'"));
             
              echo $data[$pos];
             return $data[$pos];
             
             
            
           }
            
          ?>

           
      

   