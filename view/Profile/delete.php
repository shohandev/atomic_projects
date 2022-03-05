<?php
include_once '../../vendor/autoload.php';

use App\Profile\Profile;

session_start();

$profile = new Profile();

$profile = $profile->delete($_GET['id']);
