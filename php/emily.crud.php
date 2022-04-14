<?php

    require_once("connection.php");

    /* Create Start */
        function cadastrarMedia($nome){
            $con = getConnection();
            $sql = "insert into media (nome) values (:nome)";
            $result = $con->prepare($sql);
            $result->bindParam(":nome", $nome);
            $execute = $result->execute();
            unset($con);
            unset($result);
            if($execute)
                return true;
            return false;
        }

        function cadastrarPortifolio($imagem, $title, $text){
            $con = getConnection();
            $sql = "insert into portifolio (imagem, title, text) values (:imagem, :title, :text)";
            $result = $con->prepare($sql);
            $result->bindParam(":imagem", $imagem);
            $result->bindParam(":title", $title);
            $result->bindParam(":text", $text);
            $execute = $result->execute();
            unset($con);
            unset($result);
            if($execute)
                return true;
            return false;
        }
    /* Create End */

    /* Retrieve Start */
        function listarMedia(){
            $con = getConnection();
            $sql = "select * from media";
            $result = $con->query($sql);
            $listaMedia = array();
            while($media = $result->fetch(PDO::FETCH_OBJ))
            {
                array_push($listaMedia, $media);
            }
            unset($con);
            unset($result);
            return $listaMedia;
        }

        function listarPortifolio(){
            $con = getConnection();
            $sql = "select * from portifolio";
            $result = $con->query($sql);
            $listaPortifolio = array();
            while($portifolio = $result->fetch(PDO::FETCH_OBJ))
            {
                array_push($listaPortifolio, $portifolio);
            }
            unset($con);
            unset($result);
            return $listaPortifolio;
        }
        /* Search Start */
            function buscarMedia(){
                $con = getConnection();
                $sql = "select * from media where id = :id";
                $result = $con->prepare($sql);
                $result->bindParam(":id", $id);
                $execute = $result->execute();
                $media = $result->fetch(PDO::FETCH_OBJ);
                unset($con);
                unset($result);
                return $media;
            }

            function buscarPortifolio(){
                $con = getConnection();
                $sql = "select * from portifolio where id = :id";
                $result = $con->prepare($sql);
                $result->bindParam(":id", $id);
                $execute = $result->execute();
                $media = $result->fetch(PDO::FETCH_OBJ);
                unset($con);
                unset($result);
                return $media;
            }
        /* Search End */
    /* Retrieve End */

    /* Update Start */
        function atualizarMedia($id, $nome){
            $con = getConnection();
            $sql = "update media set nome = :nome where id = :id";
            $result = $con->prepare($sql);
            $result->bindParam(":id", $id);
            $result->bindParam(":nome", $nome);
            $execute = $result->execute();
            unset($con);
            unset($result);
            if($execute)
                return true;
            return false;
        }

        function atualizarPortifolio(){
            $con = getConnection();
            $sql = "update portifolio set imagem = :imagem, title = :title, texto = :texto where id = :id";
            $result = $con->prepare($sql);
            $result->bindParam(":id", $id);
            $result->bindParam(":imagem", $imagem);
            $result->bindParam(":title", $title);
            $result->bindParam(":texto", $texto);
            $execute = $result->execute();
            unset($con);
            unset($result);
            if($execute)
                return true;
            return false;
        }
    /* Update End */

    /* Delete Start */
        function deletarMedia(){
            $con = getConnection();
            $sql = "delete from media where id = :id";
            $result = $con->prepare($sql);
            $result->bindParam(":id", $id);
            $execute = $result->execute();
            unset($con);
            unset($result);
            if($execute)
                return true;
            return false;
        }

        function deletarPortifolio(){
            $con = getConnection();
            $sql = "delete from portifolio where id = :id";
            $result = $con->prepare($sql);
            $result->bindParam(":id", $id);
            $execute = $result->execute();
            unset($con);
            unset($result);
            if($execute)
                return true;
            return false;
        }
    /* Delete End */