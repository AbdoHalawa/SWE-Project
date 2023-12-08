<?php
session_start();

define('__ROOT__', dirname(dirname(__FILE__)));

require_once(__ROOT__ . "/Db/Dbh.php");

abstract class Model
{
    protected $db;
    protected $conn;

    public function __construct()
    {
        $this->db = $this->connect();
    }

    public function connect()
    {
        if (null === $this->conn) {
            $this->db = new Dbh();
        }
        return $this->db;
    }

    // Common method to execute SQL queries
    protected function executeQuery($sql, $params = [])
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
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
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insert a record into the database
    protected function insert($table, $data)
    {
        $columns = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $this->executeQuery($sql, $data);
    }

    // Update records in the database
    protected function update($table, $data, $where, $params = [])
    {
        $setClause = implode(" = ?, ", array_keys($data)) . " = ?";
        $sql = "UPDATE $table SET $setClause WHERE $where";
        $this->executeQuery($sql, array_merge(array_values($data), $params));
    }

    // Delete records from the database
    protected function delete($table, $where, $params = [])
    {
        $sql = "DELETE FROM $table WHERE $where";
        $this->executeQuery($sql, $params);
    }
}
?>
