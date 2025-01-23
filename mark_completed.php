<!-- 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'tasks.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mark_completed'])) {
    markTaskCompleted($_POST['task_id']);
    header('Location: index.php');
    exit;
} -->
<?php
include('tasks.php'); 


ini_set('display_errors', 1);
error_reporting(E_ALL);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['task_id'])) {
        $task_id = $_POST['task_id'];

        $query = "UPDATE tasks SET completed = 1 WHERE id = ?";
        $stmt = $conn->prepare($query); 
        $stmt->bind_param("i", $task_id);

        if ($stmt->execute()) {
            header('Location: index.php');
            exit();
        } else {
            echo "Error marking task as completed.";
        }
    }
} else {
    echo "No task ID provided.";
}
?>
