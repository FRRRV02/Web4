<?php
// Konfigurasi database
$host = 'localhost';       // Nama host, biasanya "localhost"
$username = 'root';        // Username database
$password = '';            // Password database (kosong jika default di XAMPP)
$database = 'cipasung_website'; // Nama database

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>