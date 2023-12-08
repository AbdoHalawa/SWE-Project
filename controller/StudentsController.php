<?php

require_once(__DIR__ . '/../model/StudentModel.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

class StudentsController {
    private $model;

    public function __construct(StudentModel $model) {
        error_log("Constructing Studentcont with data: " . print_r($model, true));
        $this->model = $model;
    }

    public function handleFormSubmission() {
        var_dump($_POST);

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

            // Create a new StudentModel object
            $studentModel = new StudentModel($studentData);

            // Check if the model is successfully constructed
            if ($studentModel) {
                // Insert the student into the database
                $result = $studentModel->insertStudent();

                // Render the appropriate view based on the result
                $this->renderView($result);
            } else {
                // Handle the case where the model construction failed
                $this->renderView(false);
            }
        } else {
            echo 'console.error("Error: Form not submitted.");';
        }
    }

    private function renderView($result) {
        echo '<script>';
        if ($result) {
            echo 'console.log("Student inserted successfully.");';
        } else {
            echo 'console.error("Error: Unable to insert student into the database.");';
        }
        echo '</script>';
    }
}

?>
