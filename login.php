<?php
session_start();
// Assume you have a user database to verify the credentials
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verify the username and password (hashed, in a real-world scenario)
    if ($username === 'user' && $password === 'securepassword') {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit();
    } else {
        echo 'Incorrect username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
