<?php
//define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__DIR__ . '/../Db/Dbh.php');
require_once(__DIR__ . '/Model.php');
 error_reporting(E_ALL);
ini_set('display_errors', 1);
class StudentModel extends Model
{
   private $id;
    private $firstName;
    private $lastName;
    private $gender;
    private $dateOfBirth;
    private $religion;
    private $grade;
    private $classID;
    private $admissionID;
    private $parentID;
    private $phoneNumber;
    private $email;
    private $password;

    public function __construct($data = [])
    {
        parent::__construct(); // Call the constructor of the parent class (Model)
         $this->id = $data['StudentID']?? '';
        // Initialize the student object with data or set default values
        $this->firstName = $data['FirstName'] ?? '';
        $this->lastName = $data['LastName'] ?? '';
        $this->gender = $data['Gender'] ?? '';
        $this->dateOfBirth = $data['DateOfBirth'] ?? '';
        $this->religion = $data['Religion'] ?? '';
        $this->grade = $data['Grade'] ?? '';
        $this->classID = $data['ClassID'] ?? '';
        $this->admissionID = $data['AdmissionID'] ?? '';
        $this->parentID = $data['ParentID'] ?? '';
        $this->phoneNumber = $data['PhoneNumber'] ?? '';
        $this->email = $data['Email'] ?? '';
        $this->password = $data['Password'] ?? '';
    }
    public function getID()
    {
return $this->id;
    }
    public function insertStudent()
    {
        $data = [
            'FirstName' => $this->firstName,
            'LastName' => $this->lastName,
            'Gender' => $this->gender,
            'DateOfBirth' => $this->dateOfBirth,
            'Religion' => $this->religion,
            'Grade' => $this->grade,
            'ClassID' =>  $this->classID,
            'AdmissionID' => $this->admissionID,
            'ParentID' => $this->parentID,
            'PhoneNumber' => $this->phoneNumber, // Assuming this is the parent's phone number
            'Email' => $this->email,
            'Password' => password_hash($this->password, PASSWORD_DEFAULT),
        ];
    
        $sql = 'INSERT INTO Students (FirstName, LastName, Gender, DateOfBirth, Religion, Grade, ClassID, AdmissionID, ParentID, PhoneNumber, Email, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
    
        // Extract values from the associative array to create the parameter array for bind_param
        $values = array_values($data);
    
        // Insert data into the database
        $this->executeQuery($sql, $values);
    }
    

}
?>
