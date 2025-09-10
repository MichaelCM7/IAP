<?php
// In dbconnect.php
require __DIR__ . '/conf.php';

$connection = new mysqli(
    $conf['DB_HOST'], 
    $conf['DB_USER'], 
    $conf['DB_PASS'], 
    $conf['DB_NAME'],
    $conf['DB_PORT']
);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "Connected successfully";
?>