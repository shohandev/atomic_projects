<?php
include_once '../../vendor/autoload.php';

use App\Mobile\Mobile;

session_start();

$mobile = new Mobile();

$mobile->prepare($_POST);
$mobile->store();
