# Task-master
PHP TaskMaster is a lightweight task management system built using PHP. It provides a user-friendly interface for users to manage their tasks efficiently. Users can create, update, delete, and prioritize tasks, ensuring better organization and productivity. 

# Technologies used.
-  Frontend: HTML, CSS (Bootstrap for styling), JavaScript
- Backend: PHP
- Database: MySQL
- Server: Apache (XAMPP/WAMP/LAMP)

# Features
- Task Creation and Management: Easily create, edit, and delete tasks.
- Prioritization and Categorization: Assign priorities and categories to tasks for better organization.
-  Due Dates and Notifications: Set due dates for tasks and receive notifications to keep on track.
- Collaboration: Assign tasks to team members and collaborate seamlessly. 

# local Setup
Follow these steps to set up the project locally on your machine

# Prerequisites
- Ensure you have PHP and MySQL installed on your system. The easiest way to get these is by installing XAMPP, WAMP (for Windows), or LAMP (for Linux).
- A code editor (like VSCode or php storm) and a web browser.

# Installation
# 1. Setup the database

- Start your XAMPP/WAMP/LAMP application and ensure both Apache and MySQL services are running.
- Access phpMyAdmin from your web browser (usually by visiting http://localhost/phpmyadmin).
- Create a new database named task_manager.
- Import the provided .sql file (found within the cloned repository) to set up the tables.

# 2. Configure Application settings

- Navigate to the project folder and find the config.php file. Adjust the database connection settings if necessary, matching them to your environment setup.

Example:
```php
<?php
$pdo = new PDO('mysql:host=localhost;dbname=task_manager', 'yourUsername', 'yourPassword');
?>
```
# 4. Run the Application

- Place the project folder in your server's document root directory (e.g., htdocs for XAMPP).
- Open a web browser and go to http://localhost/task-manager to access the application.