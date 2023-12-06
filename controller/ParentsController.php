<?php

require_once(__ROOT__ . "controller/Controller.php");

class ParentController extends Controller {
    public function viewFees() {
        $studentId = $_REQUEST['StudentID']; 
        $this->model->getFees($studentId);
        
    }

    public function viewAssignments() {
        $studentId = $_REQUEST['StudentID']; 
        $this->model->getAssignments($studentId);
       
    }

    public function viewGrades() {
        $studentId = $_REQUEST['StudentID']; 
        $this->model->getGrades($studentId);
        
    }
}
?>
