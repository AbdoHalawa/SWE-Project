<?php


require_once(__DIR__ . '/../model/Model.php');
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/Teacher.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);
class Teacher extends Model {

    public function getSubjects() {
        $sql = "SELECT SubjectID, SubjectName FROM Subjects";
        return $this->db->query($sql);
    }

    public function getClasses() {
        $sql = "SELECT ClassID, ClassName FROM Classes";
        return $this->db->query($sql);
    }

    public function getDistinctGrades() {
        $sql = "SELECT DISTINCT Grade FROM Classes";
        return $this->db->query($sql);
    }

    public function addAssignment($title, $subjectID, $content, $uploadDate, $deadline, $teacherID, $grade, $classID) {
        if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = __DIR__ . '/uploads/';
            $uploadFile = $uploadDir . basename($_FILES['file']['name']);
    
            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
                $fileUploadPath = 'uploads/' . basename($_FILES['file']['name']);
                $sql = "INSERT INTO Assignments (Title, SubjectID, Content, FileUpload, UploadDate, Deadline, TeacherID, Grade, ClassID) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $this->db->prepare($sql);
                $stmt->bind_param("sissisiss", $title, $subjectID, $content, $fileUploadPath, $uploadDate, $deadline, $teacherID, $grade, $classID);
    
                if ($stmt->execute()) {
                    // Successful execution
                    return true;
                } else {
                    // Display the specific error message
                    echo "Error: " . $stmt->error;
                    return false;
                }
            } else {
                echo "File upload failed.";
                return false;
            }
        } else {
            echo "File upload error or no file uploaded.";
            return false;
        }
    }
    
}
    
    

?>
