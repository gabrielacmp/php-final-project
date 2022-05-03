<?php
    class Connection extends PDO {

        const HOSTNAME = "ec2-52-86-56-90.compute-1.amazonaws.com";
        const USERNAME = "hhznyzttbirvcr";
        const PASSWORD = "16febb246b033d4a086f8c455fc4214527df843bf1a4649e1e4d8d122eebfbbb";
        const SCHEMA = "d6m585u6u7322n";
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