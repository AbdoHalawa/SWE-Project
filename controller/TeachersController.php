<?php
require_once(__ROOT__ . "controller/Controller.php");

class TeachersController extends Controller {
    public function addMaterial() {
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $subjectID = $_REQUEST['subjectID'];
        $teacherID = $_SESSION['ID'];

        $this->model->insertMaterial($title, $content, $subjectID, $teacherID);
    }
}
?>
