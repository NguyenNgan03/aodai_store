<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

session_start();
// include 'auto_load.php';
include 'bootstrap.php';
// include 'app\App.php';
$app = new App();
$app->handle();

