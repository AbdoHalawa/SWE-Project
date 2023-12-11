<?php
require_once "/xampp/htdocs/SWE/m/SWE-project/model/TeacherModel.php";

class TeachersController {
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_GET['action'] ?? ''; // Get the action parameter from the URL

            // Check which action is requested and call the corresponding function
            switch ($action) {
                case 'addTeacher':
                    $this->addTeacher(); // Call the addTeacher method
                    break;
                // Add cases for other actions if needed
                default:
                    // Handle default case or invalid action
                    break;
            }
        }
    }
    public function addTeacher() {
              // Validate and sanitize the input data (perform input validation here)
        $teacherData = [
            'TeacherId'=>$_POST['teacherId'],
            'TeacherName' => $_POST['teacherName'] ?? '',
            'Gender' => $_POST['gender'] ?? '',
            'DateOfBirth' => $_POST['DOB'] ?? '',
            'PhoneNumber' => $_POST['mobile'] ?? '',
            'JoiningDate' => $_POST['joiningDate'] ?? '',
            'Experience' => $_POST['experience'] ?? '',
            'Email' => $_POST['email'] ?? '',
            'Password' => $_POST['password'] ?? '',
            'TeacherType' => $_POST['teacherType'] ?? ''
        ];
        // var_dump($teacherData);

        // Create TeacherModel instance
        $teacherModel = new TeacherModel($teacherData);
        
        // Add the teacher
        $result = $teacherModel->addTeacher();

        if ($result) {
            echo 'Teacher added successfully';
            // Redirect or render a success view
            // header("Location: success_page.php");
            exit();
        } else {
            echo "Error adding teacher.";
            // Render an error view or handle the error appropriately
        }
    }

}

// Create an instance of TeachersController and call handleRequest method
$teachersController = new TeachersController();
$teachersController->handleRequest();
?>
