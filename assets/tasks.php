<?php
include 'connector.php';

// load alll tasks from database
function loadTasks() {
    global $conn;
    $query = "SELECT * FROM tasks";
    $result = mysqli_query($conn, $query);
    $tasks = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $tasks[] = $row;
    }
    return $tasks;
}

// Save a task to db
function saveTask($task, $completed = false) {
    global $conn;
    $query = "INSERT INTO tasks (task, completed) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'si', $task, $completed);
    mysqli_stmt_execute($stmt);
}

// mark a task as completed
function markTaskCompleted($taskId) {
    global $conn;
    $query = "UPDATE tasks SET completed = 1 WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $taskId);
    mysqli_stmt_execute($stmt);
}

// Delete a task
function deleteTask($taskId) {
    global $conn;
    $query = "DELETE FROM tasks WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $taskId);
    mysqli_stmt_execute($stmt);
}
?>