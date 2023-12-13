<?php
require_once(__DIR__ . '../../Db/Dbh.php');
require_once(__DIR__ . '/Model.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
class TeacherModel extends Model
{

    private $teacherId;
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
        $this->teacherId = $data['TeacherId'] ?? '';
        $this->teacherName = $data['TeacherName'] ?? '';
        $this->gender = $data['Gender'] ?? '';
        $this->dateOfBirth = $data['DateOfBirth'] ?? '';
        $this->phoneNumber = $data['PhoneNumber'] ?? '';
        $this->joiningDate = $data['JoiningDate'] ?? '';
        $this->experience = $data['Experience'] ?? '';
        $this->email = $data['Email'] ?? '';
        $this->password = $data['Password'] ?? '';
        $this->teacherType = $data['TeacherType'] ?? '';
    }
    // Setters
    public function setId($id)
    {
        $this->teacherId = $id;
    }

    public function setTeacherName($teacherName)
    {
        $this->teacherName = $teacherName;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }


    public function setJoiningDate($joiningDate)
    {
        $this->joiningDate = $joiningDate;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setTeacherType($teacherType)
    {
        $this->teacherType = $teacherType;
    }

    // Getters
    public function getId()
    {
        return $this->teacherId;
    }

    public function getTeacherName()
    {
        return $this->teacherName;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }


    public function getJoiningDate()
    {
        return $this->joiningDate;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getTeacherType()
    {
        return $this->teacherType;
    }

    public function addTeacher(): bool
    {
        if ($this->teacherIdExists($this->teacherId)) {
            // Set an error message
            $_SESSION['error'] = 'TeacherID already exists.';
            echo 'user exists';
            // Redirect to the same page
            // header("Location: ../views/AdminView/addTeachers.php");
            exit();
        }
        $data = [
            'TeacherID' => $this->teacherId,
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
        $sql = "INSERT INTO Teachers (TeacherID,TeacherName, Gender, DateOfBirth,PhoneNumber, JoiningDate, Experience, Email, Password, TeacherType) VALUES (?, ?, ?, ?, ?, ?, ?,?, ?,?)";
        $values = array_values($data);
        try {
            $result = $this->executeQuery($sql, $values);

            // If insertion was successful, return true
            if ($result) {
                return true;
            }
        } catch (mysqli_sql_exception $exception) {
            // Check if it's a duplicate entry error
            if ($exception->getCode() === 1062) {
                // Handle the duplicate entry error (for example, redirecting to the same page)
                header("Location:#?error=duplicate_entry");
                exit();
            } else {
                // Handle other exceptions
                // Log the exception, display an error message, etc.
                echo "Error: " . $exception->getMessage();
            }
        }
        return false;
    }
    // Function to check if a TeacherID already exists in the database
    private function teacherIdExists($teacherId): bool
    {
        $sql = "SELECT COUNT(*) as count FROM Teachers WHERE TeacherID = ?";
        $stmt = $this->executeQuery($sql, [$teacherId]);
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        return ($row['count'] > 0);
    }
    public static function getTeachers()
    {
        $db = new Dbh(); // Assuming Dbh handles the database connection

        $sql = "SELECT * FROM Teachers";
        $stmt = $db->getConn()->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();
        $teachers = [];

        while ($row = $result->fetch_assoc()) {
            $teachers[] = $row;
        }

        return $teachers;
    }
    public static function getTeacherById($teacherId)
    {
        $db = new Dbh(); // Create a database connection object

        // Prepare the SQL statement
        $sql = "SELECT * FROM Teachers WHERE TeacherID = ?";

        // Create a prepared statement
        $stmt = $db->getConn()->prepare($sql);

        // Bind the parameter to the placeholder
        $stmt->bind_param("i", $teacherId); // Assuming TeacherID is an integer

        // Execute the query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Fetch the data as an associative array
        $teacher = $result->fetch_assoc();
        var_dump($teacher);
        // Return the teacher details
        return $teacher;
    }

    public function searchTeachers($searchID, $searchName, $searchPhone)
    {
        $whereConditions = [];
        $params = [];

        if (!empty($searchID)) {
            $whereConditions[] = "TeacherID = ?";
            $params[] = $searchID;
        }

        if (!empty($searchName)) {
            $whereConditions[] = "TeacherName LIKE ?";
            $params[] = "%$searchName%";
        }

        if (!empty($searchPhone)) {
            $whereConditions[] = "PhoneNumber LIKE ?";
            $params[] = "%$searchPhone%";
        }

        // Combine conditions with OR
        $where = implode(" OR ", $whereConditions);

        $teachers = $this->select('Teachers', '*', $where, $params);

        return $teachers;
    }
}
