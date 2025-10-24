<?php
session_start(); // Start session

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login if not
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manager Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <p>This is the HR Manager dashboard. Functionality will be added here.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>