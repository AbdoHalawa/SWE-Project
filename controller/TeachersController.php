<?php

require_once(__ROOT__ . "controller/Controller.php");
require_once(__ROOT__ . "model/Teacher.php");
class TeachersController extends Controller {
    public function addAssignment() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $subjectID = $_POST['subject'];
            $content = $_POST['content'];
            $uploadDate = $_POST['upload_date'];
            $deadline = $_POST['deadline'];
         
            $teacherID = $this->getCurrentTeacherID(); 

            $grade = $_POST['grade'];
            $classID = $_POST['class'];

            $teacherModel = new Teacher();
            $result = $teacherModel->addAssignment($title, $subjectID, $content, $uploadDate, $deadline, $teacherID, $grade, $classID);

            if ($result) {
                // Redirect or render a success view
                header("Location: success_page.php");
                exit();
            } else {
                // Render an error view or handle the error appropriately
                echo "Error adding assignment.";
            }
        }
    }

    // Example function to get the currently logged-in teacher's ID
    private function getCurrentTeacherID() {
        // Implement logic to retrieve the teacher ID based on the current session, authentication, etc.
        return 1; // Replace with the actual logic
    }
}
?>
