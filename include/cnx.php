<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$servername = $_ENV['DB_HOST'];
$userName =  $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$dbname =  $_ENV['DB_NAME'];

$connect =  mysqli_connect($servername, $userName, $password, $dbname);
?>
