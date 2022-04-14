<?php

    class PortifolioRepository{
        private $conn;

        public function __construct() {

            $connection = new Connection();
            $this->conn = $connection->getConnection();
        }

        function fnAddPortifolio($portifolio): bool{
            try {

                $query = "insert into portifolio (imagem, title, texto) values (:pimagem, :ptitle, :ptexto, :pportifolioId) on conflict do nothing";

                $stmt = $this->conn->prepare($query);
                $stmt->bindValue(":pimagem", $portifolio->getImagem());
                $stmt->bindValue(":ptitle", $portifolio->getTitle());
                $stmt->bindValue(":ptexto", $portifolio->getTexto());
                $stmt->bindValue(":pportifolioId", $portifolio->getPortifolioId());

                if ($stmt->execute())
                    return true;
                return false;
            } catch (PDOException $error) {
                echo "Erro ao inserir o dado no banco. Erro: {$error->getMessage()}";
                return false;
            } finally {
                unset($this->conn);
                unset($stmt);
            }
        }
    }