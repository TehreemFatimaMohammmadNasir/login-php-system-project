<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "page";

$connection = mysqli_connect($servername, $username, $password,$db);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sqldb = "CREATE DATABASE IF NOT EXISTS page";
$res = mysqli_query($connection, $sqldb);

if ($res) {
   // echo "Database system is created .";
}

mysqli_select_db($connection, $db);

$sqltbl = "CREATE TABLE IF NOT EXISTS box (
    Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Email VARCHAR(255),
    Password VARCHAR(255),
    Contact  varchar(255)
)";

$res = mysqli_query($connection, $sqltbl);

if ($res) {
  // echo "Table work is created .";
}

?>
