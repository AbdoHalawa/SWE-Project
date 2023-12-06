<?php

require_once(__ROOT__ . "controller/Controller.php");

class ParentController extends Controller {
    public function viewFees() {
        $studentId = $_REQUEST['student_id']; 
        $this->model->getFees($studentId);
        
    }

    public function viewAssignments() {
        $studentId = $_REQUEST['student_id']; 
        $this->model->getAssignments($studentId);
       
    }

    public function viewGrades() {
        $studentId = $_REQUEST['student_id']; 
        $this->model->getGrades($studentId);
        
    }
}
?>
