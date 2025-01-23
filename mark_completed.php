<?php
include 'tasks.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mark_completed'])) {
    markTaskCompleted($_POST['task_id']);
    header('Location: index.php');
    exit;
}
?>