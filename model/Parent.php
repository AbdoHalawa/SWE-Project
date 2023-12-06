<?php
require_once(__ROOT__ . "model/Model.php");

class Parent extends Model {
    private $id;
    private $name;

    function __construct($id, $name = "") {
        $this->id = $id;
        $this->db = $this->connect();

        if ("" === $name) {
            $this->readParent($id);
        } else {
            $this->name = $name;
        }
    }

    function getName() {
        return $this->name;
    }

    function setName($name) {
        return $this->name = $name;
    }

    function getID() {
        return $this->id;
    }

    function readParent($id) {
        $sql = "SELECT * FROM parents WHERE ParentID=" . $id;
        $db = $this->connect();
        $result = $db->query($sql);

        if ($result->num_rows == 1) {
            $row = $db->fetchRow();
            $this->name = $row["ParentName"];
            $_SESSION["ParentName"] = $row["ParentName"];
        } else {
            $this->name = "";
        }
    }

    
    function getFees($studentId) {
        
    }

    
    function getAssignments($studentId) {
      
    }

    function getGrades($studentId) {
     
    }
}
?>
