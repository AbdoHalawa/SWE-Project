<?php
// index.php or entry point

require_once '../controller/LogoutController.php';

$authController = new LogoutController();

// Check for actions, e.g., logout
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'logout':
            $authController->logout();
            break;

        // Add more cases for other actions if needed

        default:
            // Default action, redirect to the home page
            header("Location: views/Home.php");
            exit();
    }
}
?>
