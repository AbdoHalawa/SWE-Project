<?php
// logout-handler.php

class LogoutController {
    public function logout() {
        session_start();

        // Check if the user is logged in
        if (isset($_SESSION['user_id'])) {
            // User is logged in, destroy the session
            session_destroy();
        }

        // Redirect to the home page or any other desired page after logout
        header("Location: ../views/Home.php");
        exit();
    }
}

// Check for actions, e.g., logout
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    $authController = new LogoutController();

    switch ($action) {
        case 'logout':
            $authController->logout();
            break;

        // Add more cases for other actions if needed

        default:
            // Default action, redirect to the home page
            header("Location: ../views/Home.php");
            exit();
    }
}
?>
