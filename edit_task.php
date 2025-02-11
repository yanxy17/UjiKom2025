<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task_id = (int)$_POST['task_id'];
    $task_name = $conn->real_escape_string($_POST['task_name']);
    $deadline = $conn->real_escape_string($_POST['deadline']);
    $status = $conn->real_escape_string($_POST['status']);

    $stmt = $conn->prepare("UPDATE tasks SET task_name = ?, deadline = ?, status = ? WHERE id = ?");
    $stmt->bind_param("sssi", $task_name, $deadline, $status, $task_id);
    $stmt->execute();
    $stmt->close();
}

echo "<script>
    alert('Data berhasil diperbarui!');
    window.location.href = 'index.php';
</script>";
?>