<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$server = "localhost";
$user = "root";
$password = "";
$database = "bliss_airways";

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>