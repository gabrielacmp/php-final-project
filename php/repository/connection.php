<?php
    class Connection extends PDO {

        const HOSTNAME = "ec2-52-71-69-66.compute-1.amazonaws.com";
        const USERNAME = "gvsaryfeqtkpgz";
        const PASSWORD = "f94a82e7c31c4f906ee0939c738ee4bd501292d5ccb287308ce6d6368122efd4";
        const SCHEMA = "d65tj8kq6hp0mm";
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