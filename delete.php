<?php
include "config.php";

// Check if task deletion is requested
if (isset($_GET['delete']) && !empty($_GET['delete'])) {
    $delete_id = $_GET['delete'];

    // Delete the task from the database
    $sql = "DELETE FROM tasks WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$delete_id]);

    // Redirect back to view tasks page after deletion
    header("Location: view_tasks.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Tasks</title>
</head>
<body>
<h1>View Tasks</h1>
<!-- Display tasks list -->
<?php foreach ($tasks as $task): ?>
    <div>
        <h3><?php echo $task['task_name']; ?></h3>
        <!-- Display other task details -->
        <p>Category: <?php echo $task['category']; ?></p>
        <p>Priority: <?php echo $task['priority']; ?></p>
        <p>Description: <?php echo $task['description']; ?></p>
        <p>Due Date: <?php echo $task['due_date']; ?></p>
        <!-- Add Delete link -->
        <a href="view_tasks.php?delete=<?php echo $task['id']; ?>" onclick="return confirm('Are you sure you want to delete this task?')">Delete</a>
    </div>
<?php endforeach; ?>
</body>
</html>
