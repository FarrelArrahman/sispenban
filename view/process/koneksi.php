<?php

class database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "dbsispenban";
    protected $conn;

    public function __construct() {    
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if (!$this->conn) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit;
        }
        return $this->conn;
    }

    public function getConnection() {
        return $this->conn;
    }   
}
?>