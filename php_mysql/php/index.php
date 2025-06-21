<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = 'db';
$port = '3306';
$username = 'admin';
$password = 'P@ssw0rd';
$database = 'projects';

$connection = new mysqli($host, $username, $password, $database, $port);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "Connected to MySQL successfully!<br>";

$result = $connection->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " — " . $row['email'] . "<br>";
}

$connection->close();
