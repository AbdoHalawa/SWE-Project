<?php
require_once(__DIR__ . '/Model.php');


class StudentModel extends Model
{
    public function insertStudent($student)
    {
        // Your logic to insert a student into the database
        $sql = "INSERT INTO Students (FirstName, LastName, Gender, DateOfBirth, Religion, Grade, ClassID, AdmissionID, ParentID, PhoneNumber, Email, Password)
                VALUES (
                    '{$student->getFirstName()}',
                    '{$student->getLastName()}',
                    '{$student->getGender()}',
                    '{$student->getDateOfBirth()}',
                    '{$student->getReligion()}',
                    '{$student->getGrade()}',
                    '{$student->getClassID()}',
                    '{$student->getAdmissionID()}',
                    '{$student->getParentID()}',
                    '{$student->getPhoneNumber()}',
                    '{$student->getEmail()}',
                    '{$student->getPassword()}'
                )";

        $result = $this->db->query($sql);

        if ($result) {
            echo $sql;
            // Insert successful
            return true;
        } else {
            echo "Error: " . $this->db->getConn()->error;
            return false;
        }
    }

    // Add other methods as needed
}
?>
