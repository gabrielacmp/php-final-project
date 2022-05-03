<?php
class BlogRepository
{
    private $conn;

    public function __construct() {

        $connection = new Connection();
        $this->conn = $connection->getConnection();
    }

    function fnAddBlog($blog): bool
    {
        try {

            $query = "INSERT INTO blog (titulo, descricao, categoria_id) ";
            $query .= "values (:ptitulo, :pdescricao, :pcategoriaId)";
            $query .= " on conflict do nothing";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":ptitulo", $blog->getTitulo());
            $stmt->bindValue(":pdescricao", $blog->getDescricao());
            $stmt->bindValue(":pcategoriaId", $blog->getCategoriaId());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir o blog no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    function fnUpdateBlog($blog): bool
    {
        try {

            $query = "UPDATE blog set titulo = :ptitulo, descricao = :pdescricao, categoria_id = :pcategoriaId WHERE id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":pid", $blog->getId());
            $stmt->bindValue(":ptitulo", $blog->getTitulo());
            $stmt->bindValue(":pdescricao", $blog->getDescricao());

            $stmt->bindValue(":pcategoriaId", $blog->getCategoriaId());

            if ($stmt->execute())
                return true;

            return false;
        } catch (PDOException $error) {
            echo "Erro ao inserir o blog no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnListBlogs($limit = 9999) {
        try {

            $query = "select id, titulo, descricao, categoria_id categoriaId, criado_em criadoEm from blog order by criado_em desc limit :plimit";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':plimit', $limit);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Blog');
                return  $stmt->fetchAll();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar os blogs no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }

    public function fnLocalizarBlogs($id) {
        try {

            $query = "select id, titulo, descricao, categoria_id categoriaId, criado_em criadoEm from blog where id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pid', $id);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Blog');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao listar os blogs no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
    
    public function fnDeletarBlog($id) {
        try {

            $query = "DELETE FROM blog WHERE id = :pid";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':pid', $id);

            if ($stmt->execute()) {
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Blog');
                return  $stmt->fetch();
            }

            return false;
        } catch (PDOException $error) {
            echo "Erro ao deletar o blog no banco. Erro: {$error->getMessage()}";
            return false;
        } finally {
            unset($this->conn);
            unset($stmt);
        }
    }
}
