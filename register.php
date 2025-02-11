<?php
include 'koneksi.php'; // Pastikan koneksi ke database benar

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["register"])) {
    // Ambil data dari form dan bersihkan input
    $fullname = trim($_POST["fullname"] ?? '');
    $username = trim($_POST["username"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $password = trim($_POST["password"] ?? '');

    // Validasi: pastikan semua field diisi
    if (empty($fullname) || empty($username) || empty($email) || empty($password)) {
        echo "<script>alert('Harap isi semua field!'); window.location.href='register.php';</script>";
        exit();
    }

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Format email tidak valid!'); window.location.href='register.php';</script>";
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Cek apakah email atau username sudah ada di database
    $check_sql = "SELECT email FROM userss WHERE email = ? OR username = ?";
    $stmt = $conn->prepare($check_sql);
    
    if (!$stmt) {
        die("Query Error: " . $conn->error);
    }

    $stmt->bind_param("ss", $email, $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        echo "<script>alert('Email atau Username sudah terdaftar!'); window.location.href='register.php';</script>";
        exit();
    }

    $stmt->close();

    // Insert data ke database
    $sql = "INSERT INTO userss (fullname, username, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Query Error: " . $conn->error);
    }

    $stmt->bind_param("ssss", $fullname, $username, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='login.php';</script>";
        exit();
    } else {
        echo "Terjadi kesalahan, coba lagi.";
    }

    // Tutup koneksi
    $stmt->close();
    $conn->close();
}
?>
