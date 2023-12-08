<?php

require_once(__DIR__ . "/../controller/Controller.php");
require_once(__DIR__ . '/../model/StudentModel.php');

class StudentsController extends Controller
{
    public function __construct(StudentModel $model)
    {
        parent::__construct($model);
    }

    public function handleFormSubmission()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            // Validate and process user input
            $studentData = [
                'FirstName' => $_POST['first_name'],
                'LastName' => $_POST['last_name'],
                'Gender' => $_POST['gender'],
                'DateOfBirth' => $_POST['date_of_birth'],
                'Religion' => $_POST['religion'],
                'Grade' => $_POST['grade'],
                'ClassID' => $_POST['class_id'],
                'AdmissionID' => $_POST['admission_id'],
                'ParentID' => $_POST['parent_id'],
                'PhoneNumber' => $_POST['phone_number'],
                'Email' => $_POST['email'],
                'Password' => $_POST['password'],
            ];

            // Create a new Student object
            $student = new Student($studentData);

            // Insert the student into the database
            $result = $this->model->insertStudent($student);

            // Render the appropriate view based on the result
            if ($result) {
                // Display success message
                $this->renderView('success_view');
            } else {
                // Display error message
                $this->renderView('error_view');
            }
        } else {
            // Handle cases where the form wasn't submitted
            // or display an error message
        }
    }

    private function renderView($viewName)
    {
        // Logic to render the view (HTML output)
        // You can include a separate view file or use a template engine
        include($viewName . '.php');
    }
}

// Example usage:
$model = new StudentModel();
$controller = new StudentsController($model);

$controller->handleFormSubmission();
?>
