<?php
require_once(__ROOT__ . "controller/addMaterialController.php");

class AddMaterialController extends Controller {
    public function addMaterial($title, $content, $subjectID, $teacherID) {
        $this->model->insertMaterial($title, $content, $subjectID, $teacherID);
    }
}
?>
