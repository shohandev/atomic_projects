<?php
include_once '../../vendor/autoload.php';

use App\User\User;

session_start();

$user = new User();

$users = $user->index();

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

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    <div class="container">
        <h2>User List</h2>

        <table>
            <tr>
                <th>SL#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Options</th>
            </tr>
            <?php
            for ($i = 0; $i < count($users); $i++) {
            ?>
                <tr>
                    <td><?php echo $i + 1 ?></td>
                    <td><?php echo $users[$i]['name'] ?></td>
                    <td><?php echo $users[$i]['email'] ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $users[$i]['id'] ?>">View</a> |
                        <a href="delete.php?id=<?php echo $users[$i]['id'] ?>" onclick="return confirm('Are you sure you want to delete this info.?');">Delete </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>