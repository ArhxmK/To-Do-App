<?php
include 'tasks.php';
$tasks = loadTasks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>

    <!-- add Task Form -->
    <form method="POST" action="add_task.php">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit" name="add_task">Add Task</button>
    </form>

    
</body>
</html>