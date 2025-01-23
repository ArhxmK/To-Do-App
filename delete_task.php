<?php
include('tasks.php'); 


ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['task_id'])) {
        $task_id = $_POST['task_id'];

     
        $query = "DELETE FROM tasks WHERE id = ?";
        $stmt = $conn->prepare($query); 
        $stmt->bind_param("i", $task_id);

        if ($stmt->execute()) {
            // Redirection
            header('Location: index.php'); 
            exit();
        } else {
            echo "Error deleting task.";
        }
    }
} else {
    echo "No task ID provided.";
}
?>
