<?php
session_start();

// Database config
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'todo_app';

// create a connection to the database
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>