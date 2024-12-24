<?php
$dbServerName = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "";
$dbName = "users";
$connection = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

