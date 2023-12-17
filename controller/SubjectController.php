<?php
require_once(__DIR__ . '/../model/SubjectModel.php');

class SubjectController
{

    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_GET['action'] ?? ''; // Get the action parameter from the URL

            switch ($action) {
                case 'addSubject':
                    $this->addSubject(); // Call the addTeacher method
                    break;
                default:
                    break;
            }
        }
    }

    public function addSubject()
    {
        $subjectData = [
            'SubjectID' => $_POST['subjectID'],
            'SubjectName' => $_POST['subjectName']
        ];

        $subjectmodel = new SubjectModel($subjectData);

        // Add the subject
        $result = $subjectmodel->addSubject();

        header("Location: ../views/AdminView/addSubjects.php?success=1");

    }
}

// Instantiate the controller
$subjectController = new SubjectController();

// Call the addSubject method
$subjectController->addSubject();
