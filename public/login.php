<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform authentication (replace with your actual authentication logic)
    if ($username === 'mentai' && $password === '8888') {
        // Set the session variable to indicate a successful login
        $_SESSION['logged_in'] = true;

        // Redirect to the "/beranda" URL
        header('Location: /beranda');
        exit();
    } else {
        // Display an error message or handle invalid credentials
        $error = 'Invalid username or password';
    }
}
?>