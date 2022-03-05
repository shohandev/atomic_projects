<?php
include_once '../../vendor/autoload.php';

use App\Article\Article;

session_start();


$article = new Article();


$article = $article->delete($_GET['id']);
