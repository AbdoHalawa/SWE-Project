<?php
session_start();

// Include your database connection file
require_once('../db/Dbh.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get user input from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user input (you can add more validation)
    if (empty($email) || empty($password)) {
        // Handle validation errors
        echo "Please enter both email and password.";
    } else {
        // Check if the user is a teacher
        $db = new Dbh();
        $conn = $db->connect();

        // Assuming you have a 'Teachers' table
        $teacherQuery = "SELECT * FROM Teachers WHERE TeacherName = ? AND Password = ?";
        $stmt = mysqli_prepare($conn, $teacherQuery);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            $teacherResult = mysqli_stmt_get_result($stmt);

            if ($teacherResult) {
                // Check if a matching teacher record is found
                if (mysqli_num_rows($teacherResult) > 0) {
                    $teacherData = mysqli_fetch_assoc($teacherResult);

                    // Store user information in sessions
                    $_SESSION['user_id'] = $teacherData['TeacherID'];
                    $_SESSION['user_name'] = $teacherData['TeacherName'];
                    $_SESSION['user_type'] = $teacherData['TeacherType'];

                    if ($teacherData['TeacherType'] == 'Head') {
                        // Teacher is a head teacher, redirect to head teacher dashboard
                        header("Location: head-teacher-dashboard.php");
                        exit();
                    } else {
                        // Teacher is a normal teacher, redirect to normal teacher dashboard
                        header("Location: teacher-dashboard.php");
                        exit();
                    }
                }
            }
        }

        // Check if the user is a student
        $studentQuery = "SELECT * FROM Students WHERE StudentName = ? AND Password = ?";
        $stmt = mysqli_prepare($conn, $studentQuery);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            $studentResult = mysqli_stmt_get_result($stmt);

            if ($studentResult && mysqli_num_rows($studentResult) > 0) {
                // User is a student, redirect to student dashboard
                $studentData = mysqli_fetch_assoc($studentResult);

                // Store user information in sessions
                $_SESSION['user_id'] = $studentData['StudentID'];
                $_SESSION['user_name'] = $studentData['StudentName'];
                $_SESSION['user_type'] = 'Student';

                header("Location: StudentView/studentView.php");
                exit();
            }
        }

        // Check if the user is a parent
        $parentQuery = "SELECT * FROM Parents WHERE ParentName = ? AND Password = ?";
        $stmt = mysqli_prepare($conn, $parentQuery);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            $parentResult = mysqli_stmt_get_result($stmt);

            if ($parentResult && mysqli_num_rows($parentResult) > 0) {
                // User is a parent, redirect to parent dashboard
                $parentData = mysqli_fetch_assoc($parentResult);

                // Store user information in sessions
                $_SESSION['user_id'] = $parentData['ParentID'];
                $_SESSION['user_name'] = $parentData['ParentName'];
                $_SESSION['user_type'] = 'Parent';

                header("Location: parent-dashboard.php");
                exit();
            }
        }

        // Invalid credentials
        echo "Invalid email or password.";

        // Close the prepared statement
        mysqli_stmt_close($stmt);

        // Close the database connection
        mysqli_close($conn);
    }
} else {
    // Redirect to the login page if accessed directly
    header("Location: login.php");
    exit();
}
?>
