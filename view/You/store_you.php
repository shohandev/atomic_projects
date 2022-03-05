<?php
include_once '../../vendor/autoload.php';

use App\You\You ;

session_start();

$you = new You();

$you->prepare($_POST);

// print_r($you->name);
// die();
$you->store();
