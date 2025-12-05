<?php 

require_once 'database.php';



class AlunoModel extends Database{

   
    
    public function addAluno($nome,$nascimento, $data_matricula, $peso, $profissao, $cpf,$plano)
    {
        $query = "INSERT INTO aluno (nome, nascimento, data_matricula, peso, profissao, cpf, plano)
         VALUES ('$nome', '$nascimento','$data_matricula','$peso','$profissao','$cpf','$plano')";
        
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

    public function editRequerente($nome,$telefone, $telefone2,$cpf,$matricula,$lotacao,$cargo,$id_requerente)
    {
        $query = "UPDATE pericias_medicas_requerente SET nome='$nome', telefone='$telefone',
         telefone2='$telefone2', cpf='$cpf',matricula=$matricula, cargo='$cargo', lotacao='$lotacao'
         WHERE id=$id_requerente LIMIT 1";
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

    public function todosAlunos()
    {
        $sql = "SELECT * FROM alunos";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
 
            $results = [];
        }
        return $results;
    }

    public function getAlunoPorId($id)
    {
 
        $sql = "SELECT * FROM aluno WHERE id=$id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } else{
            return false;
        }
 
        
    }

    public function buscaRequerentePorCPF($termo)
    {
        $sql = "SELECT * FROM pericias_medicas_requerente  WHERE pericias_medicas_requerente.cpf LIKE '%$termo%'";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else{
            return false;
        }
    }

    public function buscaRequerentePorNome($termo)
    {
        $sql = "SELECT * FROM pericias_medicas_requerente  WHERE pericias_medicas_requerente.nome LIKE '%$termo%'";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else{
            return false;
        }
    }

    public function buscaRequerentePorMatricula($termo)
    {
        $sql = "SELECT * FROM pericias_medicas_requerente  WHERE pericias_medicas_requerente.matricula LIKE '%$termo%'";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else{
            return false;
        }
    }

    public function todosRequerentesPaginacao($porPagina, $deslocamento)
    {
        $sql = "SELECT * FROM pericias_medicas_requerente LIMIT $porPagina OFFSET $deslocamento";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } else {
 
            $results = [];
        }
        return $results;
    }

    public function totalLinhas(){
        $sqlTotal = "SELECT COUNT(*) as total FROM pericias_medicas_requerente";
        $stmtTotal = $this->conexao->prepare($sqlTotal);
        $stmtTotal->execute();
        $total = $stmtTotal->fetch(PDO::FETCH_ASSOC)['total'];

        return $total;
        
    }


    public function verifica_cpf_requerente($cpf)
    {
        $sql = "SELECT * FROM pericias_medicas_requerente WHERE cpf='$cpf'";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            return true;
        } else {
 
            return false;
        }
        
    }


    public function carregaFoto($file)
    {
        $time = time();
        $thumbnail_name = $time . $file['name'];
        $thumbnail_tmp_name = $file['tmp_name'];
        $thumbnail_destination_path = '../uploads/alunos' . $thumbnail_name;

        $allowed_files = ['png', 'jpeg', 'jpg'];

        $extension = explode('.', $thumbnail_name);
        $extension = end($extension);
        if (in_array($extension, $allowed_files)) {
            move_uploaded_file($thumbnail_tmp_name, $thumbnail_destination_path);
            return $thumbnail_name;
        } else {
            $_SESSION['add-post'] = "A imagem deve ter extensão jpg, jpeg ou png";
        }
    }

}