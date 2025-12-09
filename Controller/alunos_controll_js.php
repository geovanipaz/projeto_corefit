<?php

require_once '../Model/database.php';
require_once '../Model/alunoModel.php';




$acao = $_REQUEST['acao'];

if (!empty($acao)) {
    $aluno = new AlunoModel();
}



//add produto
if ($acao == 'addaluno' && !empty($_POST)) {

   //var_dump($_POST);
   
   

    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cpf = filter_var($_POST['cpf'], FILTER_SANITIZE_SPECIAL_CHARS);
    $data_nascimento = filter_var($_POST['nascimento'], FILTER_SANITIZE_SPECIAL_CHARS);

    $profissao = filter_var($_POST['profissao'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $peso = $_POST['peso'];

    $data_matricula = date('Y-m-d');

    $imagem = $_FILES['foto-aluno'];
    
    $plano = filter_var($_POST['plano'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $valor_pagamento = $_POST['pagamento'];

    if($plano==='mensal'){
        $vencimento = 30;
    }else if($plano==='trimestral'){
        $vencimento = 90;
    }else if($plano='anual'){
        $vencimento = 360;
    }


    //validacao dos inputs

    if (!$nome) {
        $res = [
            'status' => 404,
            'mensagem' => "Insira o nome"
        ];
        echo json_encode($res);
        exit();
    } elseif (!$data_nascimento) {
        $res = [
            'status' => 404,
            'mensagem' => "Insira a Data de Nacimento"
        ];
        echo json_encode($res);
        exit();
    }
    elseif (!$valor_pagamento) {
        $res = [
            'status' => 404,
            'mensagem' => "Insira um Valor de Pagamento"
        ];
        echo json_encode($res);
        exit();
    }
    elseif (!$plano) {
        $res = [
            'status' => 404,
            'mensagem' => "Insira o Tipo de Plano"
        ];
        echo json_encode($res);
        exit();
    }  
    elseif (!$imagem['name']) {
        $res = [
            'status' => 404,
            'mensagem' => "Insira uma Foto"
        ];
        echo json_encode($res);
        exit();
    } else {

        

       
        $imagem_renomeada = $aluno->carregaFoto($imagem);

        $alunoId = $aluno->addAluno2($nome,$data_nascimento,$data_matricula, $peso, $profissao, $cpf,$imagem_renomeada,$plano,
        $vencimento,$valor_pagamento,$data_matricula);

        if ($alunoId) {

            $res = [
                'status' => 200,
                'mensagem' => "Aluno Cadastrado com Sucesso!"
            ];
            echo json_encode($res);
        } else {
            $res = [
                'status' => 500,
                'mensagem' => "Erro ao Cadastrar"
            ];
            echo json_encode($res);
        }
        exit();
    }
}