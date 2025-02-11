<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $task_id = (int)$_GET['id'];

    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $task_id);
    $stmt->execute();
    $stmt->close();
}

header("Location: index.php");
?>