<?php
define('__ROOT__', dirname(dirname(__FILE__)));
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

        // Initialize the student object with data or set default values
        $this->subjectName = $data['SubjectName'] ?? '';
        
    }

    public function addSubject(): bool
    {
        $data = [
            'SubjectName' => $this->subjectName,
        ];


        $sql = "INSERT INTO subjects ( SubjectName) VALUES (?)";

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

}
?>