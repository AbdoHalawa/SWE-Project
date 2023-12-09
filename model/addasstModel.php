<?php
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/addasstModel.php"); 


class addasstModel
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addAssignment($title, $subjectID, $content, $uploadDate, $deadline, $teacherID, $classID)
    {
        $sql = "INSERT INTO Assignments (Title, SubjectID, Content, UploadDate, Deadline, TeacherID, ClassID) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sissiii", $title, $subjectID, $content, $uploadDate, $deadline, $teacherID, $classID);
        
        if ($stmt->execute()) {
            return true;
        } else {
        
            return false;
        }
    }
}
