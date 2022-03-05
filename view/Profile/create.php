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
    <form action="store_profile.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Profile Information</legend>
            <label for="first_name">First Name :</label>
            <input type="text" name="first_name" id="first_name" placeholder="Enter Your First Name"> <br><br>
            <label for="last_name">Last Name :</label>
            <input type="text" name="last_name" id="last_name" placeholder="Enter Your Last Name"> <br><br>
            <label for="email">E-mail Address :</label>
            <input type="email" name="email" id="email" placeholder="Enter Your E-mail Address"> <br><br>
            <label for="email">Profile Photo :</label>
            <input type="file" name="profile_photo" id="profile_photo" ><br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </fieldset>

</body>