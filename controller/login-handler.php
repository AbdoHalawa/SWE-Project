<?php
session_start();

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
        $teacherQuery = "SELECT * FROM Teachers WHERE TeacherName = ? AND Password = ?";
        $stmt = mysqli_prepare($conn, $teacherQuery);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            $teacherResult = mysqli_stmt_get_result($stmt);

            if ($teacherResult && mysqli_num_rows($teacherResult) > 0) {
                $teacherData = mysqli_fetch_assoc($teacherResult);
                $this->handleSuccessfulLogin($teacherData, 'Teacher');
            }
        }

        // Check if the user is a student
        $studentQuery = "SELECT * FROM Students WHERE FirstName = ? AND Password = ?";
        $stmt = mysqli_prepare($conn, $studentQuery);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            $studentResult = mysqli_stmt_get_result($stmt);

            if ($studentResult && mysqli_num_rows($studentResult) > 0) {
                $studentData = mysqli_fetch_assoc($studentResult);
                $this->handleSuccessfulLogin($studentData, 'Student');
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
                $this->handleSuccessfulLogin($parentData, 'Parent');
            }
        }

        // Invalid credentials
        return "Invalid email or password.";

        // Close the prepared statement
        mysqli_stmt_close($stmt);

        // Close the database connection
        mysqli_close($conn);
    }

    private function handleSuccessfulLogin($userData, $userType)
    {
        // Store user information in sessions
        $_SESSION['user_id'] = $userData[$userType . 'ID'];
        $_SESSION['user_name'] = $userData[$userType . 'Name'];
        $_SESSION['user_type'] = $userType;

        // Redirect to the appropriate view based on user type
        switch ($userType) {
            case 'Student':
                header("Location: ../views/StudentView/studentView.php");
                exit();
            case 'Teacher':
                if ($userData['TeacherType'] == 'Head') {
                    header("Location: ../views/AdminView/adminindex.php");
                    exit();
                } else {
                    header("Location: ../views/TeacherView/teacherView.php");
                    exit();
                }
            case 'Parent':
                header("Location: ../views/ParentsView/parentsView.php");
                exit();
            default:
                // Handle unexpected user type
                echo "Unexpected user type. Debugging Info:<pre>";
                print_r($userData);
                echo "</pre>";
                exit();
        }
    }
}

// Check if the request method is POST
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
