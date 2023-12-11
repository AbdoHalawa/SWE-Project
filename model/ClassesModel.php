<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__DIR__ . '/../Db/Dbh.php');
require_once(__DIR__ . '/Model.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
class ClassesModel extends Model
{

    private $classId;
    private $className;
    private $grade;
    
    public function __construct($data = [])
    {
        parent::__construct(); // Call the constructor of the parent class (Model)

        // Initialize the student object with data or set default values
        $this->className = $data['ClassName'] ?? '';
        $this->grade = $data['grade'] ?? '';
    }

    public function addClass(): bool
    {
        $data = [
            'ClassId'=>$this->classId, 
            'ClassName' => $this->className,
            'Grade' => $this->grade,
        ];


        $sql = "INSERT INTO Classes (ClassId, ClassName, Grade) VALUES (?, ?, ?)";

        // Extract values from the associative array to create the parameter array for bind_param
        $values = array_values($data);

        // Insert data into the database
        $result = $this->executeQuery($sql, $values);

        // Return true if the insertion was successful, false otherwise
        return $result;
    }
    
}
?>
