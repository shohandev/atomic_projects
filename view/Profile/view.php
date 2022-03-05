<?php
include_once '../../vendor/autoload.php';

use App\Profile\Profile;

session_start();

$profile = new Profile();

$profile = new Profile();

$profile = $profile->show($_GET['id']);

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

        .profile-list-button {
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
            <h2>Profile Info</h2>
            <h2><a class="profile-list-button" href="index.php">Profile List</a></h2>
        </div>

        <table>
            <tr>
                <td>First Name</td>
                <td><?php echo $profile['first_name'] ?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?php echo $profile['last_name'] ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $profile['email'] ?></td>
            </tr>
            <tr>
                <td>Profile Photo</td>
                <td><img width="150" src="../../images/<?php echo $profile['profile_photo'] ? $profile['profile_photo'] : 'no-profile-picture.jpg' ?>" </td>
            </tr>

    </div>
</body>

</html>