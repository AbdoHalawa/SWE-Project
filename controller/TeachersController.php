<?php
require_once(__DIR__ . '/../model/TeacherModel.php');
require_once(__DIR__ . '/../model/Model.php');

class TeachersController
{
    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_GET['action'] ?? ''; // Get the action parameter from the URL

            // Check which action is requested and call the corresponding function
            switch ($action) {
                case 'addTeacher':
                    $this->addTeacher(); // Call the addTeacher method
                    break;
                case 'editTeacher':
                    $this->editTeacher(); // Call the deleteTeacher method
                    break;
                case 'searchTeachers':
                    $this->searchTeachers(); // Call the searchTeachers method
                    break;
                default:
                    break;
            }
        }
    }
    public function addTeacher()
    {
        // Validate and sanitize the input data (perform input validation here)

        $teacherData = [
            'TeacherId' => $_POST['teacherId'],
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
            header("Location: ../views/AdminView/addTeachers.php?success=1");
            exit();
        } else {
            echo "Error adding teacher.";
            // Render an error view or handle the error appropriately
        }
    }
    public function searchTeachers()
    {
        $searchID = $_POST['searchID'] ?? '';
        $searchName = $_POST['searchName'] ?? '';
        $searchPhone = $_POST['searchPhone'] ?? '';

        $teacherModel = new TeacherModel();

        $searchResults = $teacherModel->searchTeachers($searchID, $searchName, $searchPhone);

        // Set search results in the session
        $_SESSION['searchResults'] = $searchResults;

        // Redirect back to the same page
        header("Location: ../views/AdminView/listTeachers.php");
        exit();
    }
    public function editTeacher()
    {
        $TeacherId = $_POST['teacherId'];
        $teacherData = [
            'TeacherId' => $_POST['teacherId'] ?? '',
            'TeacherName' => $_POST['teacherName'] ?? '',
            'Gender' => $_POST['gender'] ?? '',
            'DateOfBirth' => $_POST['DOB'] ?? '',
            'PhoneNumber' => $_POST['mobile'] ?? '',
            'JoiningDate' => $_POST['joiningDate'] ?? '',
            'Experience' => $_POST['experience'] ?? '',
            'Email' => $_POST['email'] ?? '',
        ];
        var_dump($teacherData);
        // Create TeacherModel instance
        $teacherModel = new TeacherModel($teacherData);

        // Add the teacher
        $result = $teacherModel->editTeacher($TeacherId);

        if ($result) {
            echo 'Teacher updated successfully';
            // Redirect or render a success view
            header("Location: ../views/AdminView/listTeachers.php");
            exit();
        } else {
            echo "Error updating teacher.";
            // Render an error view or handle the error appropriately
        }
    }
}


// Create an instance of TeachersController and call handleRequest method
$teachersController = new TeachersController();
$teachersController->handleRequest();
