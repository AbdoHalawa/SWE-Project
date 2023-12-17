<?php
require_once(__DIR__ . '/../model/SubjectModel.php');

class SubjectController
{

    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $action = $_POST['action'] ?? ''; // Use POST for action

            switch ($action) {
                case 'addSubject':
                    $this->addSubject();
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

        if ($result) {
            header("Location: ../views/AdminView/addSubjects.php?success=1");
            exit();
        } else {
            echo 'Error adding subject: ';
        }
    }
}

// Instantiate the controller
$subjectController = new SubjectController();

// Call the addSubject method
$subjectController->addSubject();
