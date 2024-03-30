
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

ob_start(); // Start output buffering

// Include the layout
include('layout.php');

// Get the buffered content and assign it to $content
$pageContent = ob_get_clean();

include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category = $_POST['category'];
    $priority = $_POST['priority'];
    $task_name = $_POST['task_name'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $status = isset($_POST['status']) ? $_POST['status'] : null; // Check if status is set
    $assigned_user = isset($_POST['assigned_user']) ? $_POST['assigned_user'] : null; // Check if assigned_user is set
    $estimated_time = isset($_POST['estimated_time']) ? $_POST['estimated_time'] : null; // Check if estimated_time is set

    $errors = [];
    if (empty($category) || empty($priority) || empty($task_name)) {
        $errors[] = "Category, priority, and task name are required fields.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
        echo "<a href='create.php'>Go back to create task page</a>";
        exit();
    }

    $sql = "INSERT INTO tasks (category, priority, task_name, description, due_date, status, assigned_user, estimated_time)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$category, $priority, $task_name, $description, $due_date, $status, $assigned_user, $estimated_time])) {
        header("Location: view_tasks.php");
        exit();
    } else {
        echo "Error: Unable to create task.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Task</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional theme -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">Create Task</h1>
    <form action="create.php" method="post">
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="priority">Priority:</label>
            <select id="priority" name="priority" class="form-control" required>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
        </div>
        <div class="form-group">
            <label for="task_name">Task Name:</label>
            <input type="text" id="task_name" name="task_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="due_date">Due Date:</label>
            <input type="date" id="due_date" name="due_date" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" class="form-control">
        </div>
        <div class="form-group">
            <label for="assigned_user">Assigned User:</label>
            <input type="text" id="assigned_user" name="assigned_user" class="form-control">
        </div>
        <div class="form-group">
            <label for="estimated_time">Estimated Time:</label>
            <input type="text" id="estimated_time" name="estimated_time" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
    <a href="view_tasks.php" class="mt-3">View Tasks</a>
</div>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

</body>
</html>
