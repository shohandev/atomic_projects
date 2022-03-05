<?php
include_once '../../vendor/autoload.php';

use App\User\User;

session_start();

$user = new User();

$user = $user->delete($_GET['id']);
