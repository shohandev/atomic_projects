<?php
include_once '../../vendor/autoload.php';

use App\Profile\Profile;

session_start();

$profile = new Profile();

$profiles = $profile->index();

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
       
        .create-new-user-button {
            text-decoration: none;
            background-color: #5595ed;
            color: #fafafa;
            font-size: 18px;
            padding: 1px 10px;
            border-radius: 5px;
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
       <div style="display: flex; justify-content:space-between">
        <h2>Profile List</h2>  
        <a href="create.php" class="create-new-user-button">Create New User</a>
        </div>

        <table>
            <tr>
                <th>SL#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Options</th>
            </tr>

            <?php
            for ($i = 0; $i < count($profiles); $i++) {
            ?>
                <tr>
                    <td><?php echo $i + 1 ?></td>
                    <td><?php echo $profiles[$i]['first_name'] . ' ' . $profiles[$i]['last_name'] ?></td>
                    <td><?php echo $profiles[$i]['email'] ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $profiles[$i]['id'] ?>">View</a> |
                        <a href="delete.php?id=<?php echo $profiles[$i]['id'] ?>" onclick="return confirm('Are you sure you want to delete this info.?');">Delete </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>