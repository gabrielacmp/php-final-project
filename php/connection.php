<?php

    define("HOSTNAME", "us-cdbr-east-05.cleardb.net");
    define("USERNAME", "ba60eec6f1c0e0");
    define("PASSWORD", "ce4ca2da");
    define("SCHEMA", "heroku_8bba7033b881672");
    define("PORT", 5432);

    function getConnection()
    {
        try
        {
            $key = "strval";
            $con = new PDO("pgsql:host={$key(HOSTNAME)};dbname={$key(SCHEMA)};port={$key(PORT)}", USERNAME, PASSWORD);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $con;
        }
        catch (PDOException $error)
        {
            echo "Erro ao conectar ao banco de dados. Erro: {$error->getMessage()}";
            exit;
        }
    }