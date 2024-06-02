<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /login_system/login");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <a href="/login_system/logout">Logout</a>
</body>
</html>
