<?php
include 'koneksi.php';

$result = $conn->query("SELECT * FROM tasks ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
    <script>
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus tugas ini?");
    }
    function toggleSubtaskStatus(subtaskId) {
        fetch('update_subtask.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'id=' + subtaskId
        }).then(() => location.reload());
    }
    </script>
</head>
<body>

<div class="container">
    <div class="logout-container">
        <p> Selamat Datang </
    <h2>To-Do List</h2>
    
    <form method="POST" action="add_task.php">
        <input type="text" name="task_name" placeholder="Tambah tugas..." required>
        <input type="date" name="deadline" required>
        <button type="submit">Tambah Tugas</button>
    </form>

    <h3>Daftar Tugas</h3>
    <div class="task-list">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="task-item">
                <p><strong><?= htmlspecialchars($row['task_name']) ?></strong></p>
                <p>Deadline: <?= $row['deadline'] ?></p>
                <p>Status: <?= $row['status'] ?></p>
                
                <h4>Subtasks:</h4>
                <ul>
                     <?php
                        $subtasks = $conn->query("SELECT * FROM subtasks WHERE task_id = " . $row['id']);
                        while ($subtask = $subtasks->fetch_assoc()): ?>
                 <li>
            <input type="checkbox" onchange="toggleSubtaskStatus(<?= $subtask['id'] ?>)" <?= $subtask['status'] == 'Selesai' ? 'checked' : '' ?>>
            <span style="text-decoration: <?= $subtask['status'] == 'Selesai' ? 'line-through' : 'none' ?>;">
                <?= htmlspecialchars($subtask['subtask_name']) ?>
            </span>
        </li>
    <?php endwhile; ?>
</ul>


                <form method="POST" action="add_subtask.php">
                    <input type="hidden" name="task_id" value="<?= $row['id'] ?>">
                    <input type="text" name="subtask_name" placeholder="Tambah subtask..." required>
                    <button type="submit">Tambah</button>
                </form>
                
                <form method="POST" action="edit_task.php">
                    <input type="hidden" name="task_id" value="<?= $row['id'] ?>">
                    <input type="text" name="task_name" value="<?= htmlspecialchars($row['task_name']) ?>" required>
                    <input type="date" name="deadline" value="<?= $row['deadline'] ?>" required>
                    <select name="status">
                        <option value="Belum Selesai" <?= $row['status'] == 'Belum Selesai' ? 'selected' : '' ?>>Belum Selesai</option>
                        <option value="Selesai" <?= $row['status'] == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
                    </select>
                    <button type="submit">Edit</button>
                </form>

                <form method="GET" action="delete_task.php" onsubmit="return confirmDelete();">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <button type="submit" class="delete">Hapus</button>
                </form>
            </div>
        <?php endwhile; ?>
    </div>
</div>

</body>
</html>
