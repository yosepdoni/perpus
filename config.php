<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "";

// buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// periksa koneksi 
if ($conn->connect_error){
    die("Koneksi Gagal: ". $conn->connect_error);
}
?>