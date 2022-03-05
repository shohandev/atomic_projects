<?php
include_once '../../vendor/autoload.php';

use App\Book\Book;

$book = new Book();

$book->prepare($_POST);

print_r($book->author);

?>