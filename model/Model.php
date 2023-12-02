<?php
session_start();
require_once(__ROOT__ ."/Db/Dbh.php");
abstract class Model{
    protected $db;
    protected $conn;

    public function __construct()
    {
        $this->db = $this->connect();
    }

    public function connect(){
        if(null === $this->conn ){
            $this->db = new Dbh();
        }
        return $this->db;
    }
}
?>