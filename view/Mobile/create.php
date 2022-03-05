<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Mobile-Information</title>

  <style>
    fieldset {
      background-color: #eeeeee;
    }

    legend {
      background-color: black;
      color: white;
      padding: 5px 10px;
    }

    input {
      margin: 5px;
    }
  </style>
</head>

<body>

  <?php
  session_start();
  if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  }
  ?>


  <fieldset>
    <legend>Mobile Information</legend>
    <form action="store_mobile_info.php" method="post">
      <level for="brand"> Brand Name </level><br>
      <input type="text" name="brand" id="brand" placeholder="Enter Brand Name"> <br>
      <level for="model"> Model </level><br>
      <input type="text" name="model" id="model" placeholder=" Enter Model"><br>
      <level for="imei"> IMEI </level><br>
      <input type="number" name="imei" id="imei" placeholder="Enter IMEI Number"><br>
      <level for="date">Date of Purchase</level> <br>
      <input type="date" name="date" id="date" placeholder="Date of Purchase">
      <br>
      <input type="submit" value="Submit">
      <input type="reset" value="Reset">
    </form>
  </fieldset>

</body>

</html>