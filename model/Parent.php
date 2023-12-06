<?php

require_once(__ROOT__ . "model/Model.php");

class Parent extends Model
{
    private $ParentName;
    private $ParentID;
    private $Password;
    private $Email;

    public function __construct($id, $name = "")
    {
        parent::__construct(); 
        $this->ParentID = $id;

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

    public function getFees($studentId)
    {
        $parentID = $this->getParentID();

        $sql = "SELECT Fees.Amount, Fees.PaymentStatus
                FROM Fees
                INNER JOIN Students ON Fees.StudentID = Students.StudentID
                WHERE Students.ParentID = :parentID";

    }

    public function getAssignments($studentId)
    {
        // Your implementation here
    }

    public function getGrades($studentId)
    {
        // Your implementation here
    }
}

?>
