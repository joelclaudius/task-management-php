<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "TaskMaster";
// Create a PDO instance
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: Database connection failed. " . $e->getMessage());
}
?>
