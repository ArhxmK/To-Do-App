<?php
include 'tasks.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_task'])) {
    deleteTask($_POST['task_id']);
    header('Location: index.php');
    exit;
}
?>
