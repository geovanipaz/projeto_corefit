<?php

require_once '../Model/database.php';
require_once '../Model/alunoModel.php';




$acao = $_REQUEST['acao'];

if (!empty($acao)) {
    $aluno = new AlunoModel();
}



//add produto
if ($acao == 'addaluno' && !empty($_POST)) {

   var_dump($_POST);
   
   die;

    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $data_nascimento = filter_var($_POST['nascimento'], FILTER_SANITIZE_SPECIAL_CHARS);

    $profissao = filter_var($_POST['profissao'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $peso = $_POST['peso'];

    $imagem = $_FILES['foto-aluno'];
    $ativo = filter_var($_POST['ativo'], FILTER_SANITIZE_NUMBER_INT);
    $categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_NUMBER_INT);



    //validacao dos inputs

    if (!$nome) {
        $res = [
            'status' => 404,
            'mensagem' => "Insira o nome"
        ];
        echo json_encode($res);
        exit();
    } elseif (!$descricao) {
        $res = [
            'status' => 404,
            'mensagem' => "Insira a Descrição"
        ];
        echo json_encode($res);
        exit();
    }
    elseif (!$preco) {
        $res = [
            'status' => 404,
            'mensagem' => "Insira o Preço"
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

        $pre_slug = implode("-", explode(" ",$nome))."-".time();

       
        $imagem_renomeada = $prod->carregaFoto($imagem);

        $produtoId = $prod->addProduto($nome,$descricao,$preco,$pre_slug,$imagem_renomeada, $ativo,$categoria);

        if ($produtoId) {

            $res = [
                'status' => 200,
                'mensagem' => "Produto Inserido com sucesso!"
            ];
            echo json_encode($res);
        } else {
            $res = [
                'status' => 500,
                'mensagem' => "Erro ao adicionar"
            ];
            echo json_encode($res);
        }
        exit();
    }
}