<?php

// Include your database connection file
require_once('../Db/Dbh.php');

class LoginController
{
    public function processLogin($email, $password)
    {
        // Validate user input (you can add more validation)
        if (empty($email) || empty($password)) {
            // Handle validation errors
            return "Please enter both email and password.";
        }

        // Check if the user is a teacher
        $db = new Dbh();
        $conn = $db->connect();

        // Assuming you have a 'Teachers' table
        $teacherQuery = "SELECT * FROM Teachers WHERE TeacherName = ? AND Password = ?" ;
        $stmt = mysqli_prepare($conn, $teacherQuery);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            $teacherResult = mysqli_stmt_get_result($stmt);

            if ($teacherResult && mysqli_num_rows($teacherResult) > 0) {
                $teacherData = mysqli_fetch_assoc($teacherResult);
                $this->handleSuccessfulLogin($teacherData);
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
                $studentData = mysqli_fetch_assoc($studentResult);
                $this->handleSuccessfulLogin($studentData);
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
                $parentData = mysqli_fetch_assoc($parentResult);
                $this->handleSuccessfulLogin($parentData);
            }
        }

        // Invalid credentials
        return "Invalid email or password.";

        // Close the prepared statement
        mysqli_stmt_close($stmt);

        // Close the database connection
        mysqli_close($conn);
    }

    private function handleSuccessfulLogin($userData)
    {
        // Check if the required keys exist in the $userData array
        if (isset($userData['StudentID'], $userData['StudentName'])) {
            // Store user information in sessions
            $_SESSION['user_id'] = $userData['StudentID'];
            $_SESSION['user_name'] = $userData['StudentName'];
            $_SESSION['user_type'] = 'Student';  // Since it's a student
    
            // Redirect to the appropriate student view
            header("Location: ../views/StudentView/studentView.php");
            exit();
        } else if (isset($userData['TeacherID'], $userData['TeacherName'])) {
            // Store user information in sessions
            $_SESSION['user_id'] = $userData['TeacherID'];
            $_SESSION['user_name'] = $userData['TeacherName'];
            $_SESSION['user_type'] = $userData['TeacherType'];
    
            // Redirect based on user type
            if ($userData['TeacherType'] == 'Head') {
                // Teacher is a head teacher, redirect to head teacher dashboard
                header("Location: ../views/AdminView/adminindex.php");
                exit();
            } else {
                // Teacher is a normal teacher, redirect to normal teacher dashboard
                header("Location: ../views/TeacherView/teacherView.php");
                exit();
            }
           
            exit();
        } else if (isset($userData['ParentID'], $userData['ParentName'])) {
            // Store user information in sessions
            $_SESSION['user_id'] = $userData['ParentID'];
            $_SESSION['user_name'] = $userData['ParentName'];
            $_SESSION['user_type'] = 'Parent';
    
            // Redirect to the parent view
            header("Location: ParentsView/parentsView.php");
            exit();
        } else {
            // Debugging: Print the structure of $userData
            echo "Unexpected user data format. Debugging Info:<pre>";
            print_r($userData);
            echo "</pre>";
            exit();
        }
    }
    
    
};
