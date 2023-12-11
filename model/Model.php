<?php
session_start();
// define('__ROOT__', dirname(dirname(__FILE__)));

require_once( "/xampp/htdocs/SWE/m/SWE-project/Db/Dbh.php");

abstract class Model
{
    protected $db;

    public function __construct()
    {
        try {
            $this->db = $this->connect();
        } catch (PDOException $e) {
            // Handle the exception, you can log or display an error message
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function connect()
    {
        if (null === $this->db) {
            $this->db = new Dbh();
        }
        return $this->db;
    }

    // Common method to execute SQL queries using MySQLi
    protected function executeQuery($sql, $params = [])
    {
        $stmt = $this->db->getConn()->prepare($sql);
        if (!$stmt) {
            throw new Exception("Error preparing SQL statement: " . $this->db->getConn()->error);
        }

        // Bind parameters if there are any
        if (!empty($params)) {
            $types = str_repeat('s', count($params)); // Assuming all parameters are strings, adjust accordingly
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        return $stmt;
    }

    // Select records from the database using MySQLi
    protected function select($table, $columns = "*", $where = "", $params = [])
    {
        $sql = "SELECT $columns FROM $table";
        if (!empty($where)) {
            $sql .= " WHERE $where";
        }

        $stmt = $this->executeQuery($sql, $params);
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Insert a record into the database using MySQLi
    protected function insert($table, $data)
    {
        $columns = implode(", ", array_keys($data));
        $values = rtrim(str_repeat("?, ", count($data)), ", ");

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $this->executeQuery($sql, array_values($data));
    }

    // Update records in the database using MySQLi
    protected function update($table, $data, $where, $params = [])
    {
        $setClause = implode(" = ?, ", array_keys($data)) . " = ?";
        $sql = "UPDATE $table SET $setClause WHERE $where";

        $this->executeQuery($sql, array_merge(array_values($data), $params));
    }
}
?>
