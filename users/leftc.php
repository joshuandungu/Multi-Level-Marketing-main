<?php
include("include/dbcon.php");



$userid = 'SHN5976157';




global $db;
$right_stack = array();

 

$datas = mysqli_query($db, "select * from user where userid = '$userid'");
    $sqls = mysqli_fetch_array($datas);

    $left_side = $sqls['left_side'];

    $right_side = $sqls['right_side'];

 
    if($right_side!='')
    array_push($right_stack, $right_side);

    // echo "$left_side";
    // echo "$right_side";

left_right($left_side, $left_side, $right_stack,$right_side);



function left_right($agentid, $userid, $right_stack,$right_side)
{

    static $i = 0;
    static $j=1;
    static $c=0;
    STATIC $right_get = 0;
    



    global $db;
    $data = mysqli_query($db, "select * from user where userid = '$agentid'");
    $sql = mysqli_fetch_array($data);

    $left_user = $sql['left_side'];

    $right_user = $sql['right_side'];

    
if($right_user!='')
    array_push($right_stack, $right_user);

    
   
if($agentid == $right_side){

   $right_get++;
}

///// right users/////////////////
    if($right_get >0){

    if ($left_user != '') {


        // echo "-----$left_user";
        


    
        left_right($left_user, $userid, $right_stack,$right_side);

    } else {
        
     
        if ($right_stack[$i]!= '') {
            

           

            
           
            $right = $right_stack[$i];
            // echo "-----$right";
           
            


            $i++;
            
            left_right($right, $userid, $right_stack,$right_side);
            }
        
      
    }
}
///////////left user///////////
else{
    if ($left_user != '') {


        echo "-----$left_user";
        


    
        left_right($left_user, $userid, $right_stack,$right_side);

    } else {
        
     
        if ($right_stack[$i]!= '') {
            

           

            
           
            $right = $right_stack[$i];
            echo "-----$right";
           
            


            $i++;
            
            left_right($right, $userid, $right_stack,$right_side);
            }
        
      
    }
}
    

}



