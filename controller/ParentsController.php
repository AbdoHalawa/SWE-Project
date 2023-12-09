<?php

require_once(__ROOT__ . "controller/Controller.php");

class ParentController extends Controller {
    public function viewFees($studentID) {
    
        $this->model->getFees($studentID);
        
    }


    public function viewGrades($studentID) {
        $this->model->getGrades($studentID);
        
    }
}
?>
