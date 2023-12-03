<?php
session_start();

// Include your LoginController class
require_once('../controller/LoginController.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Instantiate LoginController
    $loginController = new LoginController();

    // Call processLogin method
    $result = $loginController->processLogin($email, $password);

    // Handle the result (e.g., display error message)
    echo $result;
} else {
    // Redirect to the login page if accessed directly
    header("Location: login.php");
    exit();
}
?>
