<?php
$host = "localhost"; // Sesuaikan dengan host database Anda
$user = "root"; // Sesuaikan dengan username database Anda
$pass = ""; // Sesuaikan dengan password database Anda
$database = "siperloh"; // Sesuaikan dengan nama database Anda

$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>