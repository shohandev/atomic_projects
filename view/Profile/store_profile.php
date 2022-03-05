<?php
include_once '../../vendor/autoload.php';

use App\Profile\Profile;

session_start();


$profile= new Profile();

if (isset($_FILES['profile_photo'])) {
    $errors = array();
    $image_name = time() . $_FILES['profile_photo']['name'];
    $image_type = $_FILES['profile_photo']['type'];
    $image_tmp_name = $_FILES['profile_photo']['tmp_name'];
    $image_size = $_FILES['profile_photo']['size'];
    $test = explode('.', $image_name);
    $file_extension = strtolower(end($test));

    $format = array('jpeg', 'jpg', 'png');


    if (in_array($file_extension, $format) === false) {
        $errors[] = 'Wrong Format';
    }
    if (empty($errors)==true) {
        move_uploaded_file($image_tmp_name, "../../images/".$image_name);
        $_POST['profile_photo'] = $image_name;
    }
}

$profile-> prepare ($_POST);
$profile-> store();