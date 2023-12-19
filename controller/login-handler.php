<?php
session_start();

// Include your database connection file
require_once('../Db/Dbh.php');

class LoginController
{
    public function processLogin($email, $password)
    {
        if (empty($email) || empty($password)) {
            return "Please enter both email and password.";
        }

        // Extract user type and first two digits of ID from the email
        $matches = [];
        if (preg_match('/^([a-zA-Z]+)(\d{2})\d*@nefertari\.com$/', $email, $matches)) {
            $name = $matches[1];
            $idPrefix = $matches[2];

            // Check user type based on the extracted ID prefix
            if ($idPrefix == '10') {
                return $this->checkUserType('Students', 'Email', $email, $password, 'Student');
            } elseif ($idPrefix == '20') {
                return $this->checkUserType('Parents', 'Email', $email, $password, 'Parent');
            } elseif ($idPrefix == '30') {
                return $this->checkUserType('Teachers', 'Email', $email, $password, 'Teacher');
            }
        }

        // Invalid email format
        return "Invalid email format or password.";
    }

    private function checkUserType($table, $columnName, $email, $password, $userType)
    {
        // Include your database connection file
        $db = new Dbh();
        $conn = $db->connect();

        $query = "SELECT * FROM $table WHERE $columnName = ? ";
        $stmt = mysqli_prepare($conn, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($result && mysqli_num_rows($result) > 0) {
                $userData = mysqli_fetch_assoc($result);

                // Retrieve the hashed password from the database
                $storedPassword = $userData['Password'];

                // Verify the entered password against the stored hashed password
                if (password_verify($password, $storedPassword)) {
                    $this->handleSuccessfulLogin($userData, $userType);
                    exit(); // Exit after successful login
                } else {
                    // Passwords do not match
                    return "Invalid password.";
                }
            } else {
                // Debugging: Output error message
                echo "Error: " . mysqli_error($conn);
            }

            // Close the prepared statement
            mysqli_stmt_close($stmt);

            // Close the database connection
            mysqli_close($conn);
        }

        // Invalid credentials
        return "Invalid email or password.";
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
                    $_SESSION['user_type']="Head";
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
