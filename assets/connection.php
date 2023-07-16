<?php

session_start();
$databaseHost = 'localhost';
$databaseName = 'db_hotel';
$databaseUsername = 'root';
$databasePassword = '';

$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$connection) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
