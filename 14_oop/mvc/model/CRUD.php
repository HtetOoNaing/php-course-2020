<?php

class CRUD {
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'php_course';
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass,$this->dbname);
    }

    public function executeQuery($sql) {
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
   
    public function __destruct() {
        $this->conn->close();
    }
}

?>