<?php

include("include/menu.php");
include("include/dbcon.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tree</title>
 <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 </head>




        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-warning">Tree View</h1>
        </div>

        <div class="card o-hidden border-0 shadow-lg my-5 bg-info">
        <div class="card-body p-0">
        <div class="row">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
        <div class="col-lg-10">
        <div class="p-5">
        <div class="text-center">
        
          <h1 class="h4 text-light">Tree View</h1><hr>
          </div>
           <div class="card-body">
          
          <?php
        

          $id=[$my_id];
          $i=0;
          for($i;$i<=2;$i++){
            $temp_id_index=0;
            $divide=pow(2,$i);
            
            ?>
           
          <div class="row  p-1">
          <?php
          for($d=0;$d< $divide; $d++)
          {
          ?> 
            <div class="col-<?php echo 12/$divide ?>  p-1 text-center">
             <p id="<?php echo $id[$d]?>" onclick=<?php echo ($id[$d]!='')?"show_details(this)":"" ?>> 
             <img src="<?php echo ($id[$d]!='')?"us2.png":"us1.png" ?>" class="img-fluid" alt="" style="width:120px"></p>
            <div class="team text-light" id="team_tree_view"><?php echo $p_id=$id[$d]?></div>
             
            </div>
          <?php

          
            
            for($p=0;$p < 2 ;$p++){
            $temp_id[ $temp_id_index]=fetch_left_right($p,$p_id);
            $temp_id_index++;

            }
            
            }
             $id=$temp_id;
          ?>
          </div>
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
             
             
             return $data[$pos];
             
             
            
           }
            
          ?>

            </div>
           </div>
         </div>
       </div>
     </div>
    </div>

      

    <!------########## /Modal cube ##############--------->
    <script type="text/javascript">
         function show_details(a){
           
         $('#exampleModal1').modal("show");
         var agentid=$(a).attr('id');
         $('#exampleModalLabel1').html(agentid);
         $.ajax({
          
         url: "ajax.php",
         method: "post",
         data: {agentid:agentid},
         success:function(data){
         
         $('#agent_detail_show_on').html(data);
         
            }
          })
          $.ajax({
          
          url: "treek.php",
          method: "post",
          data: {agentid:agentid},
          success:function(data){
          
          $('#team_tree_view').html(data);
          
             }
           })

        // $('#exampleModal1').modal("show");
        //  var agentid=$(a).attr('id');
        //  $('#agent_detail_show_on').html(agentid);
         
        
         
         }
       </script>


       



<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
  
    <div class="modal-content">
      <div class="modal-header bg-dark">
     
       <div class="text-info">
        <h5 class="modal-title" id="exampleModalLabel1"></h5>
       </div>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class=" text-white bg-warning">
      <div class="modal-bodys" id="agent_detail_show_on">
      
                  
      
      </div> 
      </div>
      
    </div>
  </div>
</div>


        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
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