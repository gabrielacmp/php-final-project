<?php

    class MediaRepository{
        private $conn;

        public function __construct() {

            $connection = new Connection();
            $this->conn = $connection->getConnection();
        }
        
        function fnAddMedia(Media $media): bool{
            try {

                $query = "insert into media (nome) values (:pnome) on conflict do nothing";

                $stmt = $this->conn->prepare($query);
                $stmt->bindValue(":pnome", $media->getNome());

                if ($stmt->execute())
                    return true;

                return false;
            } catch (PDOException $error) {
                echo "Erro ao inserir a categoria no banco. Erro: {$error->getMessage()}";
                return false;
            } finally {
                unset($this->conn);
                unset($stmt);
            }
        }
    }