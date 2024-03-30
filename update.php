<?php
include "config.php";

// Check if task ID is provided in the URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "Task ID not provided.";
    exit();
}

$task_id = $_GET['id'];

// Retrieve task details from the database
$sql = "SELECT * FROM tasks WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$task_id]);
$task = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$task) {
    echo "Task not found.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve updated task details from the form
    $category = $_POST['category'];
    $priority = $_POST['priority'];
    $task_name = $_POST['task_name'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $status = $_POST['status'];
    $assigned_user = $_POST['assigned_user'];
    $estimated_time = $_POST['estimated_time'];

    // Update task details in the database
    $sql = "UPDATE tasks SET category = ?, priority = ?, task_name = ?, description = ?, due_date = ?, status = ?, assigned_user = ?, estimated_time = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$category, $priority, $task_name, $description, $due_date, $status, $assigned_user, $estimated_time, $task_id]);

    // Redirect to view tasks page after updating
    header("Location: view_tasks.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Task</h4>
                </div>
                <div class="card-body">
                    <form action="update.php?id=<?php echo $task_id; ?>" method="post">
                        <div class="mb-3">
                            <label for="category" class="form-label">Category:</label>
                            <input type="text" class="form-control" id="category" name="category" value="<?php echo $task['category']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="priority" class="form-label">Priority:</label>
                            <select class="form-select" id="priority" name="priority" required>
                                <option value="Low" <?php if ($task['priority'] == 'Low') echo 'selected'; ?>>Low</option>
                                <option value="Medium" <?php if ($task['priority'] == 'Medium') echo 'selected'; ?>>Medium</option>
                                <option value="High" <?php if ($task['priority'] == 'High') echo 'selected'; ?>>High</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="task_name" class="form-label">Task Name:</label>
                            <input type="text" class="form-control" id="task_name" name="task_name" value="<?php echo $task['task_name']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="3"><?php echo $task['description']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="due_date" class="form-label">Due Date:</label>
                            <input type="date" class="form-control" id="due_date" name="due_date" value="<?php echo $task['due_date']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status:</label>
                            <input type="text" class="form-control" id="status" name="status" value="<?php echo $task['status']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="assigned_user" class="form-label">Assigned User:</label>
                            <input type="text" class="form-control" id="assigned_user" name="assigned_user" value="<?php echo $task['assigned_user']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="estimated_time" class="form-label">Estimated Time:</label>
                            <input type="text" class="form-control" id="estimated_time" name="estimated_time" value="<?php echo $task['estimated_time']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Task</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

