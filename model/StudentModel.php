<?php

require_once(__DIR__ . '/../Db/Dbh.php');
require_once(__DIR__ . '/Model.php');

class StudentModel extends Model
{
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

    public function __construct($data)
    {
        parent::__construct(); // Call the constructor of the parent class (Model)

        // Initialize the student object with data
        $this->firstName = $data['FirstName'];
        $this->lastName = $data['LastName'];
        $this->gender = $data['Gender'];
        $this->dateOfBirth = $data['DateOfBirth'];
        $this->religion = $data['Religion'];
        $this->grade = $data['Grade'];
        $this->classID = $data['ClassID'];
        $this->admissionID = $data['AdmissionID'];
        $this->parentID = $data['ParentID'];
        $this->phoneNumber = $data['PhoneNumber'];
        $this->email = $data['Email'];
        $this->password = $data['Password'];
    }

    public function insertStudent()
    {
        $data = [
            'FirstName' => "mohamed",
            'LastName' => "mohamed",
            'Gender' => "mohamed",
            'DateOfBirth' => "11/6/2003",
            'Religion' => "mohamed",
            'Grade' => "10",
            'ClassID' => "1",
            'AdmissionID' => "2003",
            'ParentID' => "1",
            'PhoneNumber' => "1111111111111",
            'Email' => "nourr@gmail",
            'Password' => "this->password",
        ];

        $this->insert('Students', $data);
    }
}

?>
