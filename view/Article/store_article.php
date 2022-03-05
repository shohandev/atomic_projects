<?php
include_once '../../vendor/autoload.php';

use App\Article\Article;

session_start();


$article= new Article();



if (isset($_FILES['cover_photo'])) {
    $errors = array();
    $image_name = time() . $_FILES['cover_photo']['name'];
    $image_type = $_FILES['cover_photo']['type'];
    $image_tmp_name = $_FILES['cover_photo']['tmp_name'];
    $image_size = $_FILES['cover_photo']['size'];
    $test = explode('.', $image_name);
    $file_extension = strtolower(end($test));

    $format = array('jpeg', 'jpg', 'png');


    if (in_array($file_extension, $format) === false) {
        $errors[] = 'Wrong Format';
    }
    if (empty($errors)==true) {
        move_uploaded_file($image_tmp_name, "../../images/article/".$image_name);
        $_POST['cover_photo'] = $image_name;
    }
}

$article-> prepare ($_POST);
$article-> store();