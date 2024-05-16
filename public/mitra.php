<?php
session_start();
  if (isset($_POST['submit'])) {
    $_SESSION['submit'] = true;
    header('Location: /mitra');
    exit();
  }
  else {
    // Display an error message or handle invalid credentials
    $error = 'Invalid username or password';
}
?>