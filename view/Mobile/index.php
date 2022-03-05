<?php
include_once '../../vendor/autoload.php';

use App\Mobile\Mobile;

session_start();

$mobile = new Mobile();

$mobiles = $mobile->index();

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
    <div class="container">
        <h2>Mobile User List</h2>

        <table>
            <tr>
                <th>SL#</th>
                <th>Brand Name</th>
                <th>IMEI</th>
                <th>Options</th>
            </tr>
            <?php
            for ($i = 0; $i < count($mobiles); $i++) {
            ?>
                <tr>
                    <td><?php echo $i + 1 ?></td>
                    <td><?php echo $mobiles[$i]['brand'] ?></td>
                    <td><?php echo $mobiles[$i]['imei'] ?></td>
                    <td><a href="show.php?id=<?php echo $mobiles[$i]['id'] ?>">View</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>