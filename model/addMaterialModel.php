<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/addMaterialModel.php"); 

class Materials extends Model {
    private $materials;

    function __construct() {
        $this->fillArray();
    }

    function fillArray() {
        $this->materials = array();
        $this->db = $this->connect();
        $result = $this->readMaterials();
        while ($row = $result->fetch_assoc()) {
            array_push($this->materials, new Material($row["MaterialID"], $row["Title"], $row["Content"], $row["SubjectID"], $row["TeacherID"]));
        }
    }

    function getMaterials() {
        return $this->materials;
    }

    function readMaterials() {
        $sql = "SELECT * FROM Materials"; 
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    function insertMaterial($title, $content, $subjectID, $teacherID) {
        $sql = "INSERT INTO Materials (Title, Content, SubjectID, TeacherID) VALUES ('$title','$content', '$subjectID', '$teacherID')"; 
        if ($this->db->query($sql) === true) {
            echo "Material inserted successfully.";
            $this->fillArray();
        } else {
            echo "ERROR: Could not able to execute $sql. " . $this->db->error;
        }
    }
}
?>
