<?php

require_once 'database.php';



class UsuarioModel extends Database
{

    public function addUsuario($nome, $username, $email, $senha, $tipo)
    {
        $insert_user_query = "INSERT INTO usuarios (nome, username, email, senha, tipo) 
        VALUES ('$nome','$username','$email', '$senha','$tipo')";

        $stmt = $this->conexao->prepare($insert_user_query);
        try {
            $this->conexao->beginTransaction();
            $stmt->execute();
            
            $this->conexao->commit();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            $this->conexao->rollback();
            return false;
        }
    }


    public function checaUsuarioExistente($username)
    {
        $user_check_query = "SELECT * FROM usuarios WHERE username='$username'";

        $stmt = $this->conexao->prepare($user_check_query);
        $stmt->execute();

        $count = $stmt->rowCount();
        if ($count > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function todosUsuarios()
    {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {

            $results = [];
        }
        return $results;
    }

    public function trocaSenha($senha, $id_user)
    {
        $query = "UPDATE usuarios SET senha='$senha' WHERE id=$id_user";
        $stmt = $this->conexao->prepare($query);
        try {
            $this->conexao->beginTransaction();
            $stmt->execute();
            //$lastInsertedId = $this->conexao->lastInsertId();
            $this->conexao->commit();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            $this->conexao->rollback();
            return false;
        }
    }

    public function login($username, $senha_digitada)
    {

        $sql = "SELECT * FROM usuarios WHERE username = :username";
        $stmt = $this->conexao->prepare($sql);


        
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);

        $stmt->execute();

        if ($stmt->rowCount() === 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $db_password = $row['senha'];
           
            if (password_verify($senha_digitada, $db_password)) {
                
                
                $_SESSION['id-usuario'] = $row['id'];
                $_SESSION['nome-usuario'] = $row['nome'];
                
                if ($row['tipo'] == 'root') {
                    $_SESSION['user_is_admin'] = true;
                }

                header("Location:" . ROOT_URL );
                exit(); // Importante para parar a execução após redirecionar
            } else {
                $_SESSION['signin']['senha-incorreta'] = "Senha Incorreta";
            }
        } else {
            $_SESSION['signin'] = "Usuário não encontrado";
        }
    }

    public function getUsuarioPorId($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id=:id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute([':id' => $id]);
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } else {
            return false;
        }
    }

    
}
