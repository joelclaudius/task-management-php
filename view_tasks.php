<?php
// Include database connection
include "config.php";

// Retrieve tasks from the database
$sql = "SELECT * FROM tasks";
$stmt = $pdo->query($sql);
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Tasks</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .task-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
            transition: all 0.3s ease-in-out; /* Add animation transition */
        }
        .task-container:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add hover effect */
        }
        .task-info {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .task-actions {
            margin-top: 10px;
        }
        .task-actions a {
            margin-right: 10px;
            text-decoration: none;
            color: blue;
            transition: color 0.3s ease-in-out; /* Add color transition */
        }
        .task-actions a:hover {
            text-decoration: underline;
            color: red; /* Change color on hover */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">View Tasks</h1>
    <a href="create.php" class="btn btn-primary mb-3">Create New Task</a>
    <div class="task-list">
        <?php if (!empty($tasks)): ?>
            <?php foreach ($tasks as $task): ?>
                <div class="task-container">
                    <div class="task-info">Task ID: <?php echo $task['id']; ?></div>
                    <div class="task-info">Category: <?php echo $task['category']; ?></div>
                    <div class="task-info">Priority: <?php echo $task['priority']; ?></div>
                    <div class="task-info">Task Name: <?php echo $task['task_name']; ?></div>
                    <div class="task-info">Description: <?php echo $task['description']; ?></div>
                    <div class="task-info">Due Date: <?php echo $task['due_date']; ?></div>
                    <div class="task-info">Status: <?php echo $task['status']; ?></div>
                    <div class="task-info">Assigned User: <?php echo $task['assigned_user']; ?></div>
                    <div class="task-info">Estimated Time: <?php echo $task['estimated_time']; ?></div>
                    <div class="task-actions">
                        <a href="update.php?id=<?php echo $task['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                        <a href="delete.php?delete=<?php echo $task['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this task?')">Delete</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No tasks found.</p>
        <?php endif; ?>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

