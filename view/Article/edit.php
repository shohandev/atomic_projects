<?php
include_once '../../vendor/autoload.php';

use App\Article\Article;


$article = new article();

$article = new article();

$article = $article->show($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Information</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend> Article </legend>
            <input type="hidden" name="id" value="<?php echo $article['id'] ?>">
            <label for="title">Enter Article Title :</label> <br> <br>
            <input type="text" id="title" name="title" placeholder="Enter Article Title" value="<?php echo $article['title'] ?>"> <br><br>
            <label for="description"> Enter Description : </label> <br> <br>
            <textarea rows="7" id="description" name="description" placeholder="Enter Description"><?php echo $article['description'] ?></textarea><br><br>
            <label for="cover_photo" > Choose Cover Photo : </label> <br> <br>
           <div style="display: flex;">
           <input type="file" name="cover_photo" id="cover_photo"><br><br>
            <img width="150" src="../../images/article/<?php echo $article['cover_photo'] ? $article['cover_photo'] : 'no-profile-picture.jpg' ?>">
            </div>  
          
            <input type="submit" value="Update">
            <input type="reset" value="Reset">
 
        



        </fieldset>