# To-Do List Application

This is a simple PHP-based To-Do List application that allows users to:
- Add tasks
- Mark tasks as completed
- Delete tasks
- View the list of tasks

## Features
1. Add a new task.
2. Mark a task as completed.
3. Delete a task.
4. Store tasks in a MySQL database.

## Requirements
- PHP (>= 7.4)
- MySQL
- A web server (e.g., Apache, Nginx, or XAMPP for local testing)
- Git (optional, for version control)

## Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/ArhxmK/To-Do-App.git
cd To-Do-App
```

### 2. Configure the Database
1. Create a MySQL database named `todo_app`:
    ```sql
    CREATE DATABASE todo_app;
    ```
2. Switch to the `todo_app` database:
    ```sql
    USE todo_app;
    ```
3. Create the `tasks` table:
    ```sql
    CREATE TABLE tasks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        task VARCHAR(255) NOT NULL,
        completed TINYINT(1) DEFAULT 0
    );
    ```

### 3. Configure the Application
1. Open `connector.php`.
2. Update the database credentials if necessary:
    ```php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'todo_app';
    ```

### 4. Run the Application
1. Place the project folder in your web server's root directory (e.g., `htdocs` for XAMPP).
2. Start your web server and MySQL.
3. Open your browser and navigate to:
    ```
    http://localhost/To-Do-App/index.php
    ```

## Project Structure
- `index.php`: Main page displaying the task list.
- `connector.php`: Handles database connection.
- `tasks.php`: Utility functions for database operations.
- `add_task.php`: Handles adding new tasks.
- `mark_completed.php`: Handles marking tasks as completed.
- `delete_task.php`: Handles deleting tasks.

## Example Workflow
1. Open the application in your browser.
2. Add tasks using the input box.
3. Mark tasks as completed using the "Mark Completed" button.
4. Delete tasks using the "Delete" button.

## Author
- **Arham Khan**
