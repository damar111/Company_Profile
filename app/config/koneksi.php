<?php

$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "db_buyapps-project2";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// try {
//     $dbh = new PDO("mysql:host=localhost;dbname=db_buyapps-project2, root, " .  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
// } catch (PDOException $e) {
//     exit("Error: " . $e->getMessage());
// }

// $conn = mysqli_connect('localhost', 'root', '', 'db_buyapps-project2');
