<?php
require_once(__DIR__ . '/../Db/Dbh.php');
require_once(__DIR__ . '/Model.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
class SubjectModel extends Model
{

    private $subjectId;
    private $subjectName;

    public function __construct($data = [])
    {
        parent::__construct(); // Call the constructor of the parent class (Model)

        $this->subjectId = $data['SubjectID'] ?? '';
        $this->subjectName = $data['SubjectName'] ?? '';
    }

    public function addSubject(): bool
    {

        $data = [
            'SubjectID' => $this->subjectId,
            'SubjectName' => $this->subjectName
        ];

        $sql = "INSERT INTO subjects (SubjectID, SubjectName) VALUES (?, ?)";
        $values = array_values($data);

        // Insert data into the database
        $stmt = $this->executeQuery($sql, $values);

        // Check if the query execution was successful
        if ($stmt !== false) {
            return true; // Successful insertion
        } else {
            // Log or handle the error
            $this->errorMessage = "Error in addSubject: " . $this->db->error;
            error_log($this->errorMessage); // Log the error
            return false; // Failed insertion
        }
    }




    public function getSubjects()
    {
        $sql = "SELECT 
                    s.SubjectID, 
                    s.SubjectName, 
                    COUNT(g.StudentID) AS NumberOfStudents,
                    GROUP_CONCAT(st.FirstName, ' ', st.LastName) AS StudentList
                FROM Subjects s
                LEFT JOIN Grades g ON s.SubjectID = g.SubjectID
                LEFT JOIN Students st ON g.StudentID = st.StudentID
                GROUP BY s.SubjectID, s.SubjectName";

        return $this->db->query($sql);
    }
}
