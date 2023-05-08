<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "php_auth";
    private $conn;

    protected function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    protected function getConnection() {
        return $this->conn;
    }
}
