<?php
session_start();
require_once(__DIR__ . "/../Db/Dbh.php");

abstract class Model
{
    protected $db;

    public function __construct()
    {
        try {
            $this->db = $this->connect();
        } catch (Exception $e) {
            // Handle the exception, you can log or display an error message
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function connect()
    {
        if (null === $this->db) {
            $this->db = (new Dbh(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE))->connect();
        }
        return $this->db;
    }

    protected function bindValues($stmt, $values)
    {
        $types = '';
        foreach ($values as $value) {
            if (is_int($value)) {
                $types .= 'i';  // Integer
            } elseif (is_double($value)) {
                $types .= 'd';  // Double
            } else {
                $types .= 's';  // String
            }
        }

        $stmt->bind_param($types, ...$values);
    }

    protected function executeQuery($sql, $values = [])
    {
        $stmt = $this->db->prepare($sql);

        if (!$stmt) {
            // Handle the error, e.g., log it or return an error response
            die("Error in the prepared statement: " . $this->db->error);
        }

        if (!empty($values)) {
            $this->bindValues($stmt, $values);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        return $result;
    }

    protected function select($table, $columns = "*", $where = "", $params = [])
    {
        $sql = "SELECT $columns FROM $table";
        if (!empty($where)) {
            $sql .= " WHERE $where";
        }

        $stmt = $this->executeQuery($sql, $params);
        $result = $stmt->fetch_all(MYSQLI_ASSOC);
        return $result;
    }

    protected function insert($table, $data)
    {
        $columns = implode(", ", array_keys($data));
        $values = rtrim(str_repeat("?, ", count($data)), ", ");

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $this->executeQuery($sql, array_values($data));
    }

    protected function update($table, $data, $where, $params = [])
    {
        $setClause = implode(" = ?, ", array_keys($data)) . " = ?";
        $sql = "UPDATE $table SET $setClause WHERE $where";

        $this->executeQuery($sql, array_merge(array_values($data), $params));
    }
}
?>
