<?php
include "config.php";
$servername = "localhost";
$username = "root";
$password = "";
$db = "veville";

//
$connection = "";

try {
    $connection = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();

}

