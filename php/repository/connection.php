<?php
    class Connection extends PDO {

        const HOSTNAME = "ec2-34-192-210-139.compute-1.amazonaws.com";
        const USERNAME = "loaenwzmqtgtob";
        const PASSWORD = "ca045e38f16f66de9b027cdee2c7b09fc469e702e58790d5f43d4501aa0802e5";
        const SCHEMA = "d1lhob8ahpbmbs";
        const PORT = 5432;
        
        private $conn;

        # magic method
        public function __construct() {
            $key = "strval";
            $dsn = "pgsql:host={$key(self::HOSTNAME)};dbname={$key(self::SCHEMA)};port={$key(self::PORT)}";
            $this->conn = new PDO($dsn, self::USERNAME, self::PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }

        public function getConnection() {
            $this->conn->query("SET timezone TO 'America/Sao_Paulo'");
            return $this->conn;
        }
    }