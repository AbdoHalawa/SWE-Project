<?php
require_once(__DIR__ . '/../model/Model.php');
require_once(__ROOT__ . "model/Model.php");
require_once(__ROOT__ . "model/StudentModel.php");
class Parents extends Model
{
    private $ParentName;
    private $ParentID;
    private $Password;
    private $Email;
    public $Student;
    public $fees;
    public $grades;

    public function __construct($id, $name = "")
    {
        parent::__construct();
        $this->ParentID = $id;

        // Fetch parent data
        $this->readParent($id);

        // Fetch associated student data
        $this->fetchStudentData();

        if ("" !== $name) {
            $this->ParentName = $name;
        }
    }

    private function fetchStudentData()
{
    $sql = "SELECT * FROM Students WHERE ParentID = " . $this->ParentID;

    $result = $this->db->query($sql);

    if (!$result) {
        // Handle the case when the query fails
        return;
    }

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $this->Student = new StudentModel($row);
    } else {
        // Handle the case when no student record is found
        // You might want to set default values or handle this case as appropriate
        $this->Student = new StudentModel();
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
        $sql = "SELECT * FROM parents WHERE ParentID = " . $this->db->getConn()->real_escape_string($id);
    
        $result = $this->db->query($sql);
    
        if (!$result) {
            // Handle the case when the query fails
            return;
        }
    
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
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
    $studentID = $this->Student->getID();
    $sql = "SELECT * FROM Fees WHERE StudentID = " . $studentID;

    $result = $this->db->query($sql);

    if (!$result) {
        // Handle the case when the query fails
        return [];
    }

    $this->fees = [];

    while ($row = $result->fetch_assoc()) {
        $this->fees[] = [
            'amount' => $row['Amount'],
            'payment_status' => $row['PaymentStatus'],
            'Due'=> $row['Due'],
        ];
    }

    //return $fees[];
}
    public function getGrades()
    {
        $studentID = $this->Student->getID(); // Replace getStudentID with the actual method in StudentModel
    
        // Prepare and execute the SQL query
        $sql = "SELECT * FROM Grades WHERE StudentID = " . $studentID;
        $result = $this->db->query($sql);

    if (!$result) {
        // Handle the case when the query fails
        return [];
    }
    
        $this->grades = [];
    
        // Fetch grades
        while ($row = $result->fetch_assoc()) {
            $this->grades[] = [
                'class_id' => $row['ClassID'],
                'subject_id' => $row['SubjectID'],
                'grade' => $row['Grade'],
            ];
        }
    
        //return $grades;
    }
    

}

?>
