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
public function getSubjectDetails($subjectId)
{
    try {"SELECT 
                    s.SubjectID, 
                    s.SubjectName, 
                    c.ClassName
                FROM Subjects s
                LEFT JOIN Classes c ON s.ClassID = c.ClassID
                WHERE s.SubjectID = ?";
        
        $values = [$subjectId];

        // Execute the query and get the result set
        $stmt = $this->executeQuery($sql, $values);

        if ($stmt !== false) {
            $result = [];

    $stmt->bind_result($subjectId, $subjectName, $className, $grade);

    while ($stmt->fetch()) {
        $result[] = [
            'SubjectID' => $subjectId,
            'SubjectName' => $subjectName,
            'ClassName' => $className,
            'Grade' => $grade,
        ];
    }

    return $result;
        }

        return false;
    } catch (PDOException $e) {
        // Log or handle the error as needed
        echo "Error: " . $e->getMessage();
        return false;
    }
}

// Add this helper method to fetch results from the statement

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
