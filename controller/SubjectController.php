<?php
require_once(__DIR__ . '/../model/SubjectModel.php');
require_once(__DIR__ . '/../model/Model.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

class SubjectController
{

    public function handleRequest()
    {
        $action = $_POST['action'] ?? '';
        echo 'Action from POST: ' . $action; // Debugging

            switch ($action) {
                case 'Add':
                    $this->addSubject();
                    break;
                case 'deleteSubject':
                    $this->deleteSubject();
                    break;
                default:
                    break;
            }

    }

    public function deleteSubject()
    {
        $subjectId = $_POST['subjectId'] ?? '';

        if (empty($subjectId)) {
            // Handle error - subjectId is required
            return;
        }

        $subjectModel = new SubjectModel();
        $result = $subjectModel->deleteSubject($subjectId);

        if ($result) {
            header("Location: ../views/AdminView/listSubjects.php?deleteSuccess=1");
            exit();
        } else {
            // Handle error - deletion failed
            echo 'Error deleting subject';
        }
    }

    public function addSubject()
{
    echo 'Action: ' . $_POST['action'] . '<br>'; // Debugging

    $subjectData = [
        'SubjectID' => $_POST['subjectID'],
        'SubjectName' => $_POST['subjectName']
    ];

    // Debugging
    var_dump($subjectData);

    $subjectModel = new SubjectModel($subjectData);

    $result = $subjectModel->addSubject();
    if ($result) {
        header("Location: ../views/AdminView/addSubjects.php?success=1");
        exit();
    } else {
        echo 'Error adding subject.';
    }
}

}

// Instantiate the controller
$subjectController = new SubjectController();
$subjectController->handleRequest();
