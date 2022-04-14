<?php

    define("HOSTNAME", "ec2-34-192-210-139.compute-1.amazonaws.com");
    define("USERNAME", "loaenwzmqtgtob");
    define("PASSWORD", "ca045e38f16f66de9b027cdee2c7b09fc469e702e58790d5f43d4501aa0802e5");
    define("SCHEMA", "d1lhob8ahpbmbs");
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