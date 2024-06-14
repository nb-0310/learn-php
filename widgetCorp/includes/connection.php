<?php
require ("constants.php");

$connection = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if ($connection -> connect_errno) {
    echo "Failed to connect to MySQL: " . $connection -> connect_error;
    exit();
  }