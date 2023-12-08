<?php

require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/Student.php");

class Parent extends Model
{
    private $ParentName;
    private $ParentID;
    private $Password;
    private $Email;
    private $Student; 

    public function __construct($id, $name = "")
    {
        parent::__construct();
        $this->ParentID = $id;
        $sql = Select * from Student Where ParentID = $this->ParentID;
        $this->Student = new Student($row[0]); // Instantiated the Student object here
        $this->Student->readUser($id,true)
        if ("" === $name) {
            $this->readParent($id);
        } else {
            $this->ParentName = $name;
        }
    }

    public function getParentName()
    {
        return $this->ParentName;
    }

    public function setParentName($name)
    {
        $this->ParentName = $name;
    }

    public function getParentID()
    {
        return $this->ParentID;
    }

    public function getPassword()
    {
        return $this->Password;
    }

    public function setEmail($email)
    {
        $this->Email = $email;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function readParent($id)
    {
        $sql = "SELECT * FROM parents WHERE ParentID = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->ParentName = $row["ParentName"];
            $this->Email = $row["Email"];
            $this->Password = $row["Password"];
        } else {
            // Handle the case when no parent record is found
            $this->ParentName = "";
            $this->Email = "";
            $this->Password = "";
        }
    }

    public function getFees()
    {
        $Student_ID=$this->Student->getID();
        $sql = "SELECT * FROM Fees WHERE StudentID = :$Student_ID";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $fees[] = [
                'amount' => $row['Amount'],
                'payment_status' => $row['PaymentStatus'],
            ];
        }

        return $fees;
    }
    

    public function getAssignments($studentId)
    {
        // Your implementation here
    }

    public function getGrades($studentId)
{
    $studentID = $this->Student->getID();

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM Grades WHERE StudentID = :studentID";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':studentID', $studentID, PDO::PARAM_INT);
    $stmt->execute();

    $grades = [];

    // Fetch grades
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $grades[] = [
            'class_id' => $row['ClassID'],
            'subject_id' => $row['SubjectID'],
            'grade' => $row['Grade'],
        ];
    }

    return $grades;
}

}

?>
