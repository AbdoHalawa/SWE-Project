<?php

// StudentsController.php

require_once(__DIR__ . '/../model/StudentModel.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

class StudentsController {
    private $model;


    public function __construct(StudentModel $model) {
        $this->model = $model;
    }
    private function getClassID($grade, $class) {
        $gradeMap = [
            '10' => 100,
            '11' => 110,
            '12' => 120,
        ];

        $classMap = [
            'A' => 1,
            'B' => 2,
            'C' => 3,
        ];

        // Check if grade and class are valid
        if (isset($gradeMap[$grade]) && isset($classMap[$class])) {
            return $gradeMap[$grade] + $classMap[$class];
        } else {
            // Return a default value or handle the error as needed
            return 0;
        }
    }


    public function handleFormSubmission() {
        var_dump($_POST);
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            // Validate and process user input
            $studentData = [
                'FirstName' => $_POST['first_name'],
                'LastName' => $_POST['last_name'],
                'Gender' => $_POST['gender'],
                'DateOfBirth' => $_POST['dob'],
                'Religion' => $_POST['religion'],
                'Grade' => $_POST['grade'],
                'ClassID' => $this->getClassID($_POST['grade'], $_POST['class']),
                'AdmissionID' => $_POST['admission_id'],
                'ParentID' => $_POST['parent_id'],
                'PhoneNumber' => $_POST['parent_phone'],
                'Email' => $_POST['email'],
                'Password' => $_POST['password'],
            ];

            // Create a new StudentModel object with $studentData as an argument
            $studentModel = new StudentModel($studentData);

            // Check if the model is successfully constructed
            if ($studentModel) {
                // Insert the student into the database
                $studentModel->insertStudent();
                header("Location: ../views/AdminView/addStudents.php");
                exit();
            } else {
                // Handle the case where the model construction failed
                echo 'console.error("Error: Unable to construct StudentModel.");';
            }
        } else {
            echo 'console.error("Error: Form not submitted.");';
        }
    }
}

// Instantiate the controller with a StudentModel object
$modelData = [
    'FirstName' => '',  // Provide default or empty values here
    'LastName' => '',
    'Gender' => '',
    'DateOfBirth' => '',
    'Religion' => '',
    'Grade' => '',
    'ClassID' => '',
    'AdmissionID' => '',
    'ParentID' => '',
    'PhoneNumber' => '',
    'Email' => '',
    'Password' => '',
];

$model = new StudentModel($modelData);
$controller = new StudentsController($model);

// Call the method to handle form submission
$controller->handleFormSubmission();
