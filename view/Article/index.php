<?php
include_once '../../vendor/autoload.php';

use App\Article\Article;

session_start();


$article = new Article();

$articles = $article->index();

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

        .write-new-article-button {
            text-decoration: none;
            background-color: #5595ed;
            color: #fafafa;
            padding: 5px 10px;
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
            <h2><a href="create.php" class="write-new-article-button">Write New Article</a></h2>
        </div>

        <table>
            <tr>
                <th>SL#</th>
                <th>Title</th>
                <th>Options</th>
            </tr>

            <?php
            for ($i = 0; $i < count($articles); $i++) {
            ?>
                <tr>
                    <td><?php echo $i + 1 ?></td>
                    <td><?php echo $articles[$i]['title'] ?></td>
                    <td>
                        <a href="view.php?id=<?php echo $articles[$i]['id'] ?>">View</a> |
                        <a href="edit.php?id=<?php echo $articles[$i]['id'] ?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $articles[$i]['id'] ?>" onclick="return confirm('Are you sure you want to delete this article.?');">Delete </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>