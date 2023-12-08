<?php
require_once("/xampp/htdocs/Ragy_Website/SWE_project/SWE-project/model/Model.php");

class Student extends Model
{
    private $id;
    private $name;
    private $password;
    private $grade;
    private $class;

    function __construct($id, $name = "", $password = "", $grade = "", $class = "")
    {
        $this->id = $id;
        $this->db = $this->connect();

        if ("" === $name) {
            $this->readUser($id);
        } else {
            $this->name = $name;
            $this->password = $password;
            $this->grade = $grade;
            $this->class = $class;
        }
    }

    // ... (getter and setter functions)

    function readUser($id)
    {
        $sql = "SELECT * FROM user where ID=" . $id;
        $db = $this->connect();
        $result = $db->query($sql);
       
    }

    function editUser($name, $password, $class, $grade)
    {
        $sql = "update user set name='$name',password='$password', class='$class', grade='$grade' where id=$this->id;";
        if ($this->db->query($sql) === true) {
            echo "updated successfully.";
            $this->readUser($this->id);
        } else {
            echo "ERROR: Could not able to execute $sql. ";
        }
    }

    function deleteUser()
    {
        $sql = "delete from user where id=$this->id;";
        if ($this->db->query($sql) === true) {
            echo "deleted successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. ";
        }
    }

    // New functions added
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
