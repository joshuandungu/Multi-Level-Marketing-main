<?php
include("include/dbcon.php");

  if(isset($_POST['agentid'])) {  
  $agentid=$_POST['agentid'];
  $data=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM user WHERE userid='$agentid'"));
   $datatree=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM tree WHERE userid='$agentid'"));
 echo '<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col" colspan="2">Name: '.$data['name'].'</th>
       
      </tr>
    </thead>
    <tbody>
   
      <tr>
        <th scope="row">Left Count</th>
        <td>'.$datatree['leftcount'].'</td>
      </tr>
      
        
      <tr>
        <th scope="row">Right Count</th>
        <td>'.$datatree['rightcount'].'</td>
      </tr>
      
        
      <tr>
        <th scope="row">Left Side</th>
        <td>'.$data['left_side'].'</td>
      </tr>
      
        
      <tr>
        <th scope="row">Right Side</th>
        <td>'.$data['right_side'].'</td>
      </tr>
    </tbody>
  </table>';
  }
 
?>
 