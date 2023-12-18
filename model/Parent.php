<?php
;
require_once(__DIR__ .  "/../model/Model.php");
require_once(__DIR__ .  "/../model/StudentModel.php");
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

    // Check if $id is an associative array (assuming 'ParentID' is a key in the array)
    if (is_array($id) && isset($id['ParentID'])) {
        $this->initializeFromDataArray($id);
    } 
    else {
        // Check if ParentID exists in the database
        if ($this->parentExists($id)) {
            // Parent exists, retrieve the rest of the info
            $this->readParent($id);
            $this->fetchStudentData();
        } else {
            
            $this->ParentName = $name;
            
        }
    }

    if ("" !== $name) {
        $this->ParentName = $name;
    }
}

// Check if ParentID exists in the database
private function parentExists($id)
{
    $sql = "SELECT COUNT(*) AS count FROM parents WHERE ParentID = " . $this->db->getConn()->real_escape_string($id);
    $result = $this->db->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        return $row['count'] > 0;
    }

    return false;
}

    private function initializeFromDataArray($data)
    {
        // Initialize object properties from the associative array
        $this->ParentID = $data['ParentID'];
        $this->ParentName = $data['ParentName'] ?? "";
        $this->Email = $data['Email'] ?? "";
        $this->Password = $data['Password'] ?? "";

        
    }

    public function insertParent($id,$name, $email, $password)
    {
        // Hash the password using PHP's password_hash function
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        // SQL query to insert a new parent record
        $sql = 'INSERT INTO Parents (ParentID,ParentName, Email, Password) VALUES (?,?, ?, ?)';
    
        // Execute the query with the provided values
        $this->executeQuery($sql, [$id,$name, $email, $hashedPassword]);
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
            'amount2'=>$row['Amount2'],
            'payment_status' => $row['PaymentStatus'],
            'Due'=> $row['Due'],
            'Due2'=> $row['Due2'],
            'payment_status2'=>$row['PaymentStatus2'],

        ];
    }

    //return $fees[];
}
public function getGrades()
{
    $studentID = $this->Student->getID();

    // Prepare and execute the SQL query with a join on Subjects table
    $sql = "SELECT Grades.ClassID, Grades.SubjectID, Subjects.SubjectName, Grades.Grade FROM Grades
            JOIN Subjects ON Grades.SubjectID = Subjects.SubjectID
            WHERE Grades.StudentID = " . $studentID;

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
            'subject_name' => $row['SubjectName'], // Include the subject name
            'grade' => $row['Grade'],
        ];
    }
}

public function updatePaymentStatus($updateAmount1=false , $updateAmount2=false )
{
    $studentID = $this->Student->getID();

    
    if ($updateAmount1 && !$updateAmount2) {
        $sql = "UPDATE Fees SET PaymentStatus = 1 WHERE StudentID = $studentID";
        $this->db->query($sql);
        
    }
    // Update payment_status2 for amount2
    elseif (!$updateAmount1 && $updateAmount2) {
        $sql = "UPDATE Fees SET PaymentStatus2 = 1 WHERE StudentID = $studentID";
        $this->db->query($sql);
     
    }
    // Update both payment_status and payment_status2
    elseif ($updateAmount1 && $updateAmount2) {
        $sql = "UPDATE Fees SET PaymentStatus = 1, PaymentStatus2 = 1 WHERE StudentID = $studentID";
        $this->db->query($sql);
        
    }
   

}
}

?>
