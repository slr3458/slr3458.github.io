<?php
session_start();

// Define the family username and password
$family_username = 'familyUser';
$family_password = 'familyPass123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the entered username and password match the family credentials
    if ($username === $family_username && $password === $family_password) {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit();
    } else {
        echo 'Incorrect username or password';
    }
}
?>
