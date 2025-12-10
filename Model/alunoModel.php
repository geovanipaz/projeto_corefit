<?php 

require_once 'database.php';



class AlunoModel extends Database{

   
    
    public function addAluno($nome,$nascimento, $data_matricula, $peso, $profissao, $cpf,$foto_aluno, $tipo,
     $vencimento, $valor, $data_pagamento)
    {
        $query = "START TRANSACTION;

        INSERT INTO aluno (nome, nascimento, data_matricula, peso, profissao, cpf,foto_aluno)
        VALUES ('$nome', '$nascimento','$data_matricula','$peso','$profissao','$cpf','$foto_aluno');
        
        SET @aluno_id = LAST_INSERT_ID();

        INSERT INTO plano (tipo, vencimento, situacao, id_aluno)
                VALUES ('$tipo', '$vencimento', 'adimplente', @aluno_id);

        SET @plano_id = LAST_INSERT_ID();

                
        INSERT INTO pagamento (valor, data_pagamento,id_plano)
        VALUES ('$valor', '$data_pagamento', @plano_id);

        COMMIT;
        ";
        /*
        $query2 = "START TRANSACTION;

                -- 1) Insere o aluno
                INSERT INTO aluno (nome, email)
                VALUES ('João Silva', 'joao@gmail.com');

                SET @aluno_id = LAST_INSERT_ID();

                -- 2) Insere o plano vinculado ao aluno
                INSERT INTO plano (aluno_id, tipo_plano, valor)
                VALUES (@aluno_id, 'Mensal', 120.00);

                SET @plano_id = LAST_INSERT_ID();

                -- 3) Insere o pagamento vinculado ao plano
                INSERT INTO pagamento (plano_id, valor_pago, data_pagamento)
                VALUES (@plano_id, 120.00, NOW());

                COMMIT;
                ";
        */
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

    public function addAluno2($nome, $nascimento, $data_matricula, $peso, $profissao, $cpf, $foto_aluno, 
                         $tipo, $vencimento, $valor, $data_pagamento)
{
    try {
        // ---- Inicia transação ----
        $this->conexao->beginTransaction();

        // 1) Inserir aluno
        $sql1 = "INSERT INTO aluno (nome, nascimento, data_matricula, peso, profissao, cpf, foto_aluno)
                 VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt1 = $this->conexao->prepare($sql1);
        $stmt1->execute([$nome, $nascimento, $data_matricula, $peso, $profissao, $cpf, $foto_aluno]);
        $aluno_id = $this->conexao->lastInsertId();

        // 2) Inserir plano
        $sql2 = "INSERT INTO plano (tipo, vencimento, situacao, id_aluno)
                 VALUES (?, ?, 'adimplente', ?)";
        $stmt2 = $this->conexao->prepare($sql2);
        $stmt2->execute([$tipo, $vencimento, $aluno_id]);
        $plano_id = $this->conexao->lastInsertId();

        // 3) Inserir pagamento
        $sql3 = "INSERT INTO pagamento (valor, data_pagamento, id_plano)
                 VALUES (?, ?, ?)";
        $stmt3 = $this->conexao->prepare($sql3);
        $stmt3->execute([$valor, $data_pagamento, $plano_id]);

        // ---- Finaliza a transação ----
        $this->conexao->commit();

        return true;

    } catch (PDOException $e) {
        // Se algo der errado, desfaz tudo
        $this->conexao->rollBack();
        echo "Erro: " . $e->getMessage();
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
        $sql = "SELECT * FROM aluno";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
 
            $results = [];
        }
        return $results;
    }

    public function todosAlunos2()
    {
        $sql = "SELECT a.*, p.* FROM aluno a JOIN plano p ON a.id = p.id_aluno;";
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
        $thumbnail_destination_path = '../uploads/alunos/' . $thumbnail_name;

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