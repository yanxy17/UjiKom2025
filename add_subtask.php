<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_id = $_POST['task_id'];
    $subtask_name = $_POST['subtask_name'];

    // Pastikan input tidak kosong
    if (!empty($task_id) && !empty($subtask_name)) {
        $stmt = $conn->prepare("INSERT INTO subtasks (task_id, subtask_name, status) VALUES (?, ?, 'Belum Selesai')");
        $stmt->bind_param("is", $task_id, $subtask_name);

        if ($stmt->execute()) {
            header("Location: index.php"); // Kembali ke halaman utama
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Mohon isi semua kolom!";
    }
}
?>
