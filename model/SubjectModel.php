<?php
require_once(__DIR__ . '/../Db/Dbh.php');
require_once(__DIR__ . '/Model.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
class SubjectModel extends Model
{

    private $subjectId;
    private $subjectName;
   private $teacherID;
    public function __construct($data = [])
    {
        parent::__construct(); // Call the constructor of the parent class (Model)

        $this->subjectId = $data['SubjectID'] ?? '';
        $this->subjectName = $data['SubjectName'] ?? '';
        $this->teacherID = $data['TeacherID'] ?? '';
    }


    public function deleteSubject($subjectId)
{
    $sql = "DELETE FROM subjects WHERE SubjectID = ?";
    var_dump($sql); // Debugging line
    $values = [$subjectId];

    $stmt = $this->executeQuery($sql, $values);

    return $stmt !== false;
}

public function addSubject(): bool
{
    $data = [
        'SubjectID' => $this->subjectId,
        'SubjectName' => $this->subjectName,
        'TeacherID' => $this->teacherID
    ];

    $sql = "INSERT INTO subjects (SubjectID, SubjectName,TeacherID) VALUES (?, ?,?)";
    $values = array_values($data);

    // Insert data into the database
    $stmt = $this->executeQuery($sql, $values);

    if ($stmt !== false) {
        return true;
    } else {
        // Log or handle the error
        echo 'Error adding subject: ' . $this->db->getLastError();
        return false;
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
