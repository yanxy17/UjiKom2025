<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_name = $_POST['task_name'];
    $deadline = $_POST['deadline'];

    $stmt = $conn->prepare("INSERT INTO tasks (task_name, deadline) VALUES (?, ?)");
    $stmt->bind_param("ss", $task_name, $deadline);

    if ($stmt->execute()) {
        echo "<script>alert('Tugas berhasil ditambahkan!'); window.location.href = 'index.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>