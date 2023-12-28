<?php
$host = "localhost"; // Adjust to your database host
$user = "root";     // Adjust to your database username
$pass = "";         // Adjust to your database password
$database = "siperloh"; // Adjust to your database name

$conn = new mysqli($host, $user, $pass, $database);

// Check connection
if ($conn->connect_error) {
    die('Connect Error: ' . $conn->connect_error);
}

// Set charset to utf8
$conn->set_charset("utf8");
?>
