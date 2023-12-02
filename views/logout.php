<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // User is logged in, destroy the session
    session_destroy();

    // Redirect to the login page or any other desired page after logout
    header("Location: ../views/Home.php");
    exit();
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: ../views/Home.php");
    exit();
}
?>
