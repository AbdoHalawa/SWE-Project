<?php
//define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__DIR__ . '../../Db/Dbh.php');
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
    private $studentID;
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
        $this->studentID = $data['StudentID'] ?? '';
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
        $formattedDob = date('Y-m-d', strtotime($this->dateOfBirth));
        $data = [
            'FirstName' => $this->firstName,
            'LastName' => $this->lastName,
            'Gender' => $this->gender,
            'DateOfBirth' => $formattedDob,
            'Religion' => $this->religion,
            'Grade' => $this->grade,
            'ClassID' =>  $this->classID,
            'StudentID' => $this->studentID,
            'ParentID' => $this->parentID,
            'PhoneNumber' => $this->phoneNumber, // Assuming this is the parent's phone number
            'Email' => $this->email,
            'Password' => password_hash($this->password, PASSWORD_DEFAULT),
        ];
    
        $sql = 'INSERT INTO Students (FirstName, LastName, Gender, DateOfBirth, Religion, Grade, ClassID, StudentID, ParentID, PhoneNumber, Email, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
    
        // Extract values from the associative array to create the parameter array for bind_param
        $values = array_values($data);
    
        // Insert data into the database
        $this->executeQuery($sql, $values);
    }
    public function editStudent()
    {
        $formattedDob = date('Y-m-d', strtotime($this->dateOfBirth));
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
    
        $sql = 'UPDATE Students SET
                FirstName = ?,
                LastName = ?,
                Gender = ?,
                DateOfBirth = ?,
                Religion = ?,
                Grade = ?,
                ClassID = ?,
                ParentID = ?,
                PhoneNumber = ?,
                Email = ?,
                Password = ?
                WHERE StudentID = ?';
    
        // Prepare the values array
        $values = [
            $this->firstName,
            $this->lastName,
            $this->gender,
            $formattedDob,
            $this->religion,
            $this->grade,
            $this->classID,
            $this->parentID,
            $this->phoneNumber,
            $this->email,
            $hashedPassword,
            $this->studentID
        ];
    
        try {
            // Execute the query
            $result = $this->executeQuery($sql, $values);
    
            // If update was successful, return true
            if ($result !== false && $result->affected_rows > 0) {
                return true;
            } else {
                // Consider throwing an exception or logging an error
                // based on the specific situation/error.
                throw new Exception("Error: Student not updated.");
            }
        } catch (mysqli_sql_exception $exception) {
            // Echo the error message, and re-throw the exception
            echo "Error: " . $exception->getMessage();
            throw $exception;
        }
    
       
    }
    public function deleteStudent($studentID)
    {
        $sql = 'DELETE FROM Students WHERE StudentID = ?';

        try {
            $result = $this->executeQuery($sql, [$studentID]);

            // If deletion was successful, return true
            if ($result !== false && $result->affected_rows > 0) {
                return true;
            } else {
                throw new Exception("Error: Student not deleted.");
            }
        } catch (mysqli_sql_exception $exception) {
            // Echo the error message, and re-throw the exception
            echo "Error: " . $exception->getMessage();
            throw $exception;
        }

        return false;
    }

    public function getStudents()
{
    $sql = "SELECT Students.*, Classes.ClassName, Classes.Grade, Parents.ParentName 
            FROM Students
            JOIN Classes ON Students.ClassID = Classes.ClassID
            JOIN Parents ON Students.ParentID = Parents.ParentID";
    $stmt = $this->executeQuery($sql);

    if ($stmt) {
        $result = $stmt->get_result();

        if ($result) {
            // Use fetch_assoc to fetch each row as an associative array
            $students = array();
            while ($row = $result->fetch_assoc()) {
                $students[] = $row;
            }

            // Close the result set and the statement
            $result->close();
            $stmt->close();

            return $students;
        } else {
            // Handle the case where get_result is not available
            die("Error getting result set: " . $this->db->error);
        }
    } else {
        // Handle the case where the query execution failed
        die("Error executing query: " . $this->db->error);
    }
}
    public function checkAdmissionID($admissionID) {
        $sql = "SELECT * FROM Students WHERE StudentID = ?";
        $values = [$admissionID];

        return $this->executeQuery($sql, $values);
    }
    function getSubjectsForStudent()
    {
        // Include your database connection file
        require_once('../../Db/Dbh.php');

        $db = new Dbh();
        $conn = $db->connect();

        // Get the student ID from the session
        $studentID = $_SESSION['user_id'];

        // Sanitize the student ID to prevent SQL injection
        $studentID = mysqli_real_escape_string($conn, $studentID);

        $query = "SELECT Subjects.SubjectID, Subjects.SubjectName
                  FROM Subjects
                  INNER JOIN Grades ON Subjects.SubjectID = Grades.SubjectID
                  WHERE Grades.StudentID = $studentID";

        $result = mysqli_query($conn, $query);

        // Check for errors
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $subjects = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $subjects[] = $row;
        }

        // Close the database connection
        mysqli_close($conn);

        return $subjects;
    }
    public function getStudentByID($studentID)
    {
        $sql = "SELECT Students.*, Parents.ParentID as ParentID, Parents.ParentName, Parents.Email as ParentEmail, Parents.Password as ParentPassword
                FROM Students
                JOIN Parents ON Students.ParentID = Parents.ParentID
                WHERE Students.StudentID = ?";
        $values = [$studentID];

        $stmt = $this->executeQuery($sql, $values);

        if ($stmt) {
            $result = $stmt->get_result();

            if ($result) {
                // Fetch the student and parent details as an associative array
                $data = $result->fetch_assoc();
                $result->close();
                $stmt->close();

                // Split the data into student and parent data
                $studentData = [
                    'FirstName' => $data['FirstName'],
                    'LastName' => $data['LastName'],
                    'Gender' => $data['Gender'],
                    'DateOfBirth' => $data['DateOfBirth'],
                    'Religion' => $data['Religion'],
                    'Grade' => $data['Grade'],
                    'ClassID' => $data['ClassID'],
                    'StudentID' => $data['StudentID'],
                    'ParentID' => $data['ParentID'],
                    'PhoneNumber' => $data['PhoneNumber'],
                    'Email' => $data['Email'],
                    'Password' => $data['Password'],
                ];

                $parentData = [
                    'ParentID' => $data['ParentID'],
                    'ParentName' => $data['ParentName'],
                    'Email' => $data['ParentEmail'],
                    'Password' => $data['ParentPassword'],
                ];

                return ['studentData' => $studentData, 'parentData' => $parentData];
            } else {
                // Handle the case where get_result is not available
                die("Error getting result set: " . $this->db->error);
            }
        } else {
            // Handle the case where the query execution failed
            die("Error executing query: " . $this->db->error);
        }
    }

    function getSubjectNameById($subjectID)
    {
        // Include your database connection file
        require_once('../../Db/Dbh.php');

        $db = new Dbh();
        $conn = $db->connect();

        // Sanitize the subject ID to prevent SQL injection
        $subjectID = mysqli_real_escape_string($conn, $subjectID);

        $query = "SELECT SubjectName FROM Subjects WHERE SubjectID = $subjectID";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $row = mysqli_fetch_assoc($result);

        // Close the database connection
        mysqli_close($conn);

        return $row['SubjectName'];
    }

    function getGradesForStudent()
    {
        require_once('../../Db/Dbh.php');

        $db = new Dbh();
        $conn = $db->connect();

        $studentID = $_SESSION['user_id'];
        $studentID = mysqli_real_escape_string($conn, $studentID);

        $query = "SELECT Subjects.SubjectID, Subjects.SubjectName, Grades.Grade
                  FROM Subjects
                  INNER JOIN Grades ON Subjects.SubjectID = Grades.SubjectID
                  WHERE Grades.StudentID = $studentID";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $grades = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $grades[] = $row;
        }

        mysqli_close($conn);

        return $grades;
    }

}
?>
