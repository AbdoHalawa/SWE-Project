<?php
session_start();
require_once(__ROOT__ . "/Db/Dbh.php");

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

    // Common method to execute SQL queries
    protected function executeQuery($sql, $params = [])
{
    $stmt = $this->db->getConn()->prepare($sql);

    if (!$stmt) {
        throw new Exception("Error preparing SQL statement: " . implode(" ", $this->db->getConn()->errorInfo()));
    }

    // Bind parameters if there are any
    foreach ($params as $key => &$value) {
        $stmt->bindParam(":$key", $value);
    }

    $stmt->execute();
    return $stmt;

}

    // Select records from the database
    protected function select($table, $columns = "*", $where = "", $params = [])
    {
        $sql = "SELECT $columns FROM $table";
        if (!empty($where)) {
            $sql .= " WHERE $where";
        }

        $stmt = $this->executeQuery($sql, $params);
        return $stmt->fetch_all(PDO::FETCH_ASSOC);
    }

    // Insert a record into the database
    protected function insert($table, $data)
    {
        $columns = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));
    
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
    
        // Prepare the statement
        $stmt = $this->db->getConn()->prepare($sql);
    
        if (!$stmt) {
            throw new Exception("Error preparing SQL statement: " . implode(" ", $this->db->getConn()->errorInfo()));
        }
    
        // Bind parameters
        foreach ($data as $key => $value) {
            $stmt->bind_param("s", $value); // Assuming all parameters are strings, adjust accordingly
        }
    
        // Execute the statement
        $stmt->execute();
    }

    // Update records in the database
    protected function update($table, $data, $where, $params = [])
{
    $setClause = implode(" = ?, ", array_keys($data)) . " = ?";
    $sql = "UPDATE $table SET $setClause WHERE $where";

    // Prepare the statement
    $stmt = $this->db->getConn()->prepare($sql);

    if (!$stmt) {
        throw new Exception("Error preparing SQL statement: " . implode(" ", $this->db->getConn()->errorInfo()));
    }

    // Bind parameters
    $types = str_repeat('s', count($data));  // Assuming all parameters are strings, adjust accordingly
    $stmt->bind_param($types, ...array_values($data));

    // Execute the statement
    $stmt->execute();
}
}
?>
