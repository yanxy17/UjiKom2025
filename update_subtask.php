<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $subtask_id = $_POST['id'];

    // Ambil status saat ini
    $query = $conn->prepare("SELECT status FROM subtasks WHERE id = ?");
    $query->bind_param("i", $subtask_id);
    $query->execute();
    $result = $query->get_result();
    $row = $result->fetch_assoc();

    // Toggle status
    $new_status = ($row['status'] == 'Belum Selesai') ? 'Selesai' : 'Belum Selesai';

    // Update status di database
    $update = $conn->prepare("UPDATE subtasks SET status = ? WHERE id = ?");
    $update->bind_param("si", $new_status, $subtask_id);
    $update->execute();
}
?>
