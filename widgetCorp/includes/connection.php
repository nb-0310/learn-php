<?php
require ("constants.php");

$connection = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}