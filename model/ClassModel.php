<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__DIR__ . '/../Db/Dbh.php');
require_once(__DIR__ . '/Model.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
class TeacherModel extends Model
{

    private $id;
    private $teacherName;
    private $gender;
    private $dateOfBirth;
    private $phoneNumber;
    private $joiningDate;
    private $experience;
    private $email;
    private $password;
    private $teacherType;

    public function __construct($data = [])
    {
        parent::__construct(); // Call the constructor of the parent class (Model)

        // Initialize the student object with data or set default values
        $this->teacherName = $data['TeacherName'] ?? '';
        $this->gender = $data['Gender'] ?? '';
        $this->dateOfBirth = $data['DateOfBirth'] ?? '';
        $this->phoneNumber = $data['PhoneNumber'] ?? '';
        $this->religion = $data['Religion'] ?? '';
        $this->joiningDate = $data['JoiningDate'] ?? '';
        $this->experience = $data['Experience'] ?? '';
        $this->email = $data['Email'] ?? '';
        $this->password = $data['Password'] ?? '';
        $this->teacherType = $data['EeacherType'] ?? '';
    }

    public function insertTeacher(): bool
    {
        $data = [
            // 'TeacherID'=>'2',  //do not know what is 2
            'TeacherName' => $this->teacherName,
            'Gender' => $this->gender,
            'DateOfBirth' => $this->dateOfBirth,
            'PhoneNumber' => $this->phoneNumber,
            'JoiningDate' => $this->joiningDate,
            'Experience' => $this->experience,
            'Email' => $this->email,
            'Password' => password_hash($this->password, PASSWORD_DEFAULT),
            'TeacherType' => $this->teacherType,
        ];


        $sql = "INSERT INTO Teacher (TeacherName, Gender, DateOfBirth,PhoneNumber, JoiningDate, Experience, Email, Password, TeacherType) VALUES (?, ?, ?, ?, ?, ?, ?,?, ?)";

        // Extract values from the associative array to create the parameter array for bind_param
        $values = array_values($data);

        // Insert data into the database
        $result = $this->executeQuery($sql, $values);

        // Return true if the insertion was successful, false otherwise
        return $result;
    }
    
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
