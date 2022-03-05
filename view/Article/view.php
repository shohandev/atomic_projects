<?php
include_once '../../vendor/autoload.php';

use App\Article\Article;

session_start();

$article = new article();

$article = new article();

$article = $article->show($_GET['id']);

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

        .article-list-button {
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
            <h2>Article Details</h2>
            <h2><a class="article-list-button" href="index.php">Article List</a></h2>
        </div>

        <table>
            <tr>
                <td>Title</td>
                <td><?php echo $article['title'] ?></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><?php echo $article['description'] ?></td>
            </tr>
            <tr>
                <td>Cover Photo</td>
                <td><img width="150" src="../../images/article/<?php echo $article['cover_photo'] ? $article['cover_photo'] : 'no-profile-picture.jpg' ?>" </td>
            </tr>

    </div>
</body>

</html>