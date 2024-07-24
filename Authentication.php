<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Access user information
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

// Continue with authenticated user actions
?>
