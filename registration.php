<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input (simplified example)
    // Sanitize input if necessary

    // Hash password
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database (example assumes PDO for database connection)
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $passwordHash]);

    // Redirect to login page or show success message
    header("Location: login.php");
    exit();
}
?>
<!-- HTML form for registration -->
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>
