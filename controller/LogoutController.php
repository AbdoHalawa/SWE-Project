<?php

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
?>
