<?php
include 'tasks.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_task'])) {
    saveTask($_POST['task']);
    header('Location: index.php');
    exit;
}
?>