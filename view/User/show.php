<?php
include_once '../../vendor/autoload.php';

use App\User\User;

session_start();

$user = new User();

// print_r($_GET['id']);

$user = $user->show($_GET['id']);

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

        .top-buttons {
            display: flex;
            justify-content: space-between;
        }

        .user-list-button {
            text-decoration: none;
            background-color: #5595ed;
            color: #fafafa;
            padding: 5px 10px;
            border-radius: 5px;
        }

        /* tr:nth-child(even) {
            background-color: #dddddd;
        } */
    </style>
</head>

<body>
    <div class="container">
        <div class="top-buttons">
            <h2>User Info</h2>
            <h2><a class="user-list-button" href="index.php">User List</a></h2>
        </div>

        <table>
            <tr>
                <td>Name</td>
                <td><?php echo $user['name'] ?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo $user['username'] ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $user['email'] ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo $user['phone'] ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo $user['gender'] ?></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><?php echo $user['date_of_birth'] ?></td>
            </tr>

    </div>
</body>

</html>