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
    <form action="store_article.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend> Article </Article>
            </legend>
            <label for="title">Enter Article Title :</label> <br> <br>
            <input type="text" id="title" name="title" placeholder="Enter Article Title"> <br><br>
            <label for="description"> Enter Description : </label> <br> <br>
            <textarea rows="7" id="description" name="description" placeholder="Enter Description"></textarea><br><br>
            <label for="cover_photo"> Choose Cover Photo : </label> <br> <br>
            <input type="file" name="cover_photo" id="cover_photo"><br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">



        </fieldset>