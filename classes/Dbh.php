<?php
    class Dbh{
        public function connection()
        {
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "php_auth";
            $conn = null;
            
            try {
                $dsn = "mysql:host={$host};dbname={$database}";
                $conn = new PDO($dsn, $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }

