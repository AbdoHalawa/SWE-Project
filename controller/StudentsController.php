<?php

require_once(__DIR__ . '/../model/StudentModel.php');
require_once(__DIR__ . '/../model/Parent.php'); // Add the path to your ParentModel

class StudentsController {
    private $studentModel;
    private $parentModel;

    public function __construct(StudentModel $studentModel, Parents $parentModel) {
        $this->studentModel = $studentModel;
        $this->parentModel = $parentModel;
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
    public function handleFormSubmission()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_GET['action'] ?? ''; // Get the action parameter from the URL

            // Check which action is requested and call the corresponding function
            switch ($action) {
                case 'addStudent':
                    $this->addStudent(); // Call the addTeacher method
                    break;
                case 'editStudent':
                    $this->editStudent(); // Call the deleteTeacher method
                    break;
                
                default:
                    break;
            }
        }
    }
    public function editStudent() {}
    public function addStudent() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            // Validate and process user input for parent
            $parentData = [
                'ParentID' => $_POST['parent_id'],
                'ParentName' => $_POST['parent_name'],
                'Email' => $_POST['parent_email'],
                'Password' => $_POST['parent_password'],
            ];

            // Create a new ParentModel object with $parentData as an argument
            $parentModel = new Parents($parentData);

            // Check if the model is successfully constructed
            if ($parentModel) {
                // Insert the parent into the database
                    $parentModel->insertParent($parentData['ParentID'], $parentData['ParentName'], $parentData['Email'], $parentData['Password']);
            } else {
                // Handle the case where the model construction failed
                echo 'console.error("Error: Unable to construct ParentModel.");';
            }
            

            // Validate and process user input for student
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
    public function getStudentByAdmissionID($admissionID)
    {
        // Instantiate the StudentModel
        $studentModel = new StudentModel();

        // Get the student details by AdmissionID
        $studentData = $studentModel->getStudentByAdmissionID($admissionID);

        if ($studentData) {
            // Return the student details as an array
            return $studentData;
        } else {
            // Return an empty array or handle the case where the student is not found
            return [];
        }
    }

    public function checkAdmissionID() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["admissionID"])) {
            $admissionID = $_POST["admissionID"];

            // Check if the admission ID is taken
            $result = $this->studentModel->checkAdmissionID($admissionID);

            
            echo ($result->num_rows > 0) ? 'taken' : 'available';
        } else {
            echo 'invalid_request';  // Handle the case where the request is not valid
        }
    }
    
    
}

// Instantiate the controller with StudentModel and ParentModel objects
$studentModelData = [
    'FirstName' => '',
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

$parentModelData = [
    'ParentID' => '',
    'ParentName' => '',
    'Email' => '',
    'Password' => '',
];

$studentModel = new StudentModel($studentModelData);
$parentModel = new Parents($parentModelData);

$controller = new StudentsController($studentModel, $parentModel);

// Call the method to handle form submission
$controller->handleFormSubmission();
?>
