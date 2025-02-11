<?php
// Nama host, username, dan password MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_todoyan";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Pilih database (opsional jika sudah diatur pada koneksi)
if (!mysqli_select_db($conn, $database)) {
    die("Gagal memilih database: " . mysqli_error($conn));
}

// Jika berhasil
echo "Koneksi berhasil";
?>
