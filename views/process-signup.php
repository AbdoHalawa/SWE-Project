
<?php
// Define the expected email and password
$expectedEmail = '1';
$expectedPassword = '2';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the entered email and password
    $enteredEmail = $_POST['email'];
    $enteredPassword = $_POST['password'];

    if ($enteredEmail == "1" && $enteredPassword == "1") {
        // Redirect to admin.php if the credentials match
        header('Location: /Ragy_Website/SWE_project/SWE-project/views/TeacherView/teacherView.php');
        exit();
    }
    else if ($enteredEmail === "2" && $enteredPassword === "2") {
        // Redirect to admin.php if the credentials match
        header('Location: /Ragy_Website/SWE_project/SWE-project/views/StudentView/studentView.php');
        exit();
    }
    else if ($enteredEmail === "3" && $enteredPassword === "3") {
        // Redirect to admin.php if the credentials match
        header('Location: /Ragy_Website/SWE_project/SWE-project/views/ParentsView/parentsView.php');
        exit();
    } else {
        // Redirect back to the login form with an error message
        header('Location: login-form.php?error=1');
        exit();
    }
}
?>
