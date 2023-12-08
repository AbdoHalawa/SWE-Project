<?php
  require_once( __ROOT__ . "model/Model.php");
?>
<?php
class Student extends Model
{
    private $id;
    private $name;
    private $password;
    private $grade;
    private $class;
    private $ParentId;

    function __construct($id, $name = "", $password = "", $grade = "", $class = "",$ParentId)
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
            $this->ParentId = $ParentId;
        }
    }

    function getName()
    {
        return $this->name;
    }
    function setName($name)
    {
        return $this->name = $name;
    }
    function getParentId()
    {
        return $this->ParentId;
    }
    function setParentId($ParentId)
    {
        return $this->ParentId = $ParentId;
    }
    function getPassword()
    {
        return $this->password;
    }
    function setPassword($password)
    {
        return $this->password = $password;
    }

    function getGrade()
    {
        return $this->grade;
    }
    function setGrade($grade)
    {
        return $this->grade = $grade;
    }

    function getClass()
    {
        return $this->class;
    }
    function setClass($class)
    {
        return $this->class = $class;
    }

    function getID()
    {
        return $this->id;
    }

    public function readUser($id)
    {
            $sql = "SELECT * FROM user where StudentID=" . $id;
            $db = $this->connect();
            $result = $db->query($sql);
            if ($result->num_rows == 1) {
                $row = $db->fetchRow();
                $this->name = $row["StudentName"];
                $_SESSION["StudentName"] = $row["StudentName"];
                $this->password = $row["Password"];
                $this->grade = $row["Grade"];
                $this->class = $row["ClassID"];
                $this->ParentId=$row["ParentId"]
            } else {
                $this->name = "";
                $this->password = "";
                $this->grade = "";
                $this->class = "";
                $this->ParentId="";
            }
        }
    function editUser($name, $password, $class, $grade)
    {
        $sql = "update user set name='$name',password='$password', class='$class', grade='$grade' where id=$this->id;";
        if ($this->db->query($sql) === true) {
            echo "updated successfully.";
            $this->readUser($this->id);
        } else {
            echo "ERROR: Could not able to execute $sql. " ;
        }
    }

    function deleteUser()
    {
        $sql = "delete from user where id=$this->id;";
        if ($this->db->query($sql) === true) {
            echo "deletet successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " ;
        }
    }
}
