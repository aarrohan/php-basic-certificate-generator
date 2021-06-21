<?php

if(isset($_POST['submit_btn'])) {

    header('content-type: image/png');

    $poppinsFont = realpath('fonts/Poppins.ttf');
    $lobsterFont = realpath('fonts/Lobster.ttf');

    $image = imagecreatefrompng('images/Certificate.png');

    $color = imagecolorallocate($image, 255, 185, 97);


    // Name
    $name = $_POST['user_name'];
    imagettftext($image, 40, 0, 400, 545, $color, $lobsterFont, $name);

    // Date
    $date = date('d F, Y');
    imagettftext($image, 15, 0, 285, 745, $color, $poppinsFont, $date);

    imagepng($image);

    imagedestroy($image);

} else {

    header('location: index.php');

}

?>