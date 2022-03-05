<?php
include_once '../../vendor/autoload.php';

use App\Mobile\Mobile;

session_start();

$mobile = new Mobile();

$mobile = $mobile->show($_GET['id']);

?>

<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            width: 80%;
            margin: auto;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .top-buttons{
            display: flex;
            justify-content: space-between;
        }
        .mobile-user-list-button{
            text-decoration: none;
            background-color: #5595ed;
            color: #fafafa;
            padding: 5px 10px;
            border-radius: 5px;
        }

        </style>
</head>

<body>
    <div class="container">
    <div class="top-buttons"> 
        <h2>User Info</h2>
        <h2><a class="mobile-user-list-button" href="index.php" >User List</a></h2>
    </div>

        <table>
            <tr>
                <td>Brand Name</td>
                <td><?php echo $mobile['brand'] ?></td>
            </tr>
            <tr>
                <td>Model</td>
                <td><?php echo $mobile['model'] ?></td>
            </tr>
            <tr>
                <td>IMEI</td>
                <td><?php echo $mobile['imei'] ?></td>
            </tr>
            <tr>
                <td>Date of Purchase</td>
                <td><?php echo $mobile['date_of_purchase'] ?></td>
            </tr>
           
           
    </div>
</body>

</html>