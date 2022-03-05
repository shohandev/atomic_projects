<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Info</title>
</head>

<body>
<?php
  session_start();
  if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  }
  ?>


    <form action="store_you.php" method=post>
        <fieldset>
            <legend>Enter Your Information</legend>
            <label for="name"> Full Name : </label>
            <input type="text" name="name" id="name" placeholder="Enter your full name"> <br><br>
            <label for="fathers_name"> Father's Name </label>
            <input type="text" name="fathers_name" id="fathers_name" placeholder="Enter your father's name"><br><br>
            <label for="mothers_name">Mother's Name </label>
            <input type="text" name="mothers_name" id="mothers_name" placeholder="Enter your mother's name"><br><br>
            <label> Gender : </label><br><br>
            <input type="radio" name="gender" id="male" value="Male"> <label for="male"> Male </label>
            <input type="radio" name="gender" id="female" value="Female"> <label for="female"> Female </label><br><br>
            <label for="email"> Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email"><br><br>
            <label for="phone"> Phone Number </label>
            <input type="tel" id="phone" name="phone" placeholder="+8801........"><br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </fieldset>
    </form>
</body>

</html>