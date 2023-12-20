<?php
require_once(__DIR__ . '/../model/SubjectModel.php');
require_once(__DIR__ . '/../model/TeacherModel.php'); // Include TeacherModel
require_once(__DIR__ . '/../model/Model.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

class SubjectController
{
    public function handleRequest()
    {
        $action = $_POST['action'] ?? ''; // Debugging

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
        var_dump($_POST);
        $subjectData = [
            'SubjectID' => $_POST['subjectID'],
            'SubjectName' => $_POST['subjectName'],
            'TeacherID' => $_POST['teacherId'] // Correct key here
        ];
    
        // Create an instance of TeacherModel
        $teacherModel = new TeacherModel();
    
        // Check if the provided TeacherID exists
        if (!$teacherModel->teacherIdExists($subjectData['TeacherID'])) {
            // Display an alert using JavaScript
            echo '<script>alert("Error: Teacher with ID ' . $subjectData['TeacherID'] . ' not found."); ';
           
        }
    
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
?>
