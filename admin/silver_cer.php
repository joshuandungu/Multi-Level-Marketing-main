<?php

    header('content-type:image/jpeg');
  
    $font=realpath('.ttf');
    $image=imagecreatefromjpeg("asdfg.jpg");
    $color=imagecolorallocate($image,51, 51, 102);
    $name="Abhishek";
    $data=date('d F, Y');
    imagettftext($image, 20, 0, 220, 200, $color, $font, $data);
    imagettftext($image, 50, 0, 400, 400, $color, $font, $name);
    
    imagejpeg($image);
    
    imagedestroy($image);
  


?>
 
