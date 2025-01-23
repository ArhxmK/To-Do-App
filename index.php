<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'tasks.php';
$tasks = loadTasks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="assets/components/css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fjalla+One|Libre+Baskerville">

</head>
<body class="zoom-in">
    <h1>To-Do List App</h1>

    <h2>"Productivity is not about doing more, it’s about doing what matters."</h2>

    <!-- add Task Form -->
    <form method="POST" action="add_task.php">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit" name="add_task">Add Task</button>
    </form>
    
     <!-- Task List -->
     <ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <span class="<?= $task['completed'] ? 'completed' : ''; ?>">
                <?= htmlspecialchars($task['task']); ?>
            </span>
            <div class="button-group">
                <?php if (!$task['completed']): ?>
                    <form method="POST" action="mark_completed.php" style="display: inline;">
                        <input type="hidden" name="task_id" value="<?= $task['id']; ?>">
                        <button type="submit" class="mark-completed">
                            <i class="fa fa-check"></i> 
                        </button>
                    </form>
                <?php endif; ?>
                <form method="POST" action="delete_task.php" style="display: inline;">
                    <input type="hidden" name="task_id" value="<?= $task['id']; ?>">
                    <button type="submit" class="delete-task">
                        <i class="fa fa-times"></i> 
                    </button>
                </form>
            </div>
        </li>
    <?php endforeach; ?>
</ul>

<script src="assets/components/js/script.js"></script>

</body>
</html>



