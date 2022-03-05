<?php
include_once '../../vendor/autoload.php';

use App\User\User ;

session_start();

$user = new User();

$user->prepare($_POST);
$user->store();