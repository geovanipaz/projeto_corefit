<?php

require_once '../Model/database.php';
require_once '../Model/usuarioModel.php';




$acao = $_REQUEST['acao'];

if (!empty($acao)) {
    $usuario = new UsuarioModel();
}


//var_dump($_POST);
//die;

if ($acao === "getusuarios") {




    $dados = $usuario->todosUsuarios();


    if (is_array($dados) || is_object($dados)) {

        $saida = ['usuariosLista' => $dados];

        header('Content-Type: application/json');
        echo json_encode($saida);
    } else {
        // Retorne um erro caso os dados não sejam válidos
        echo json_encode(['error' => 'Dados inválidos']);
    }
    exit();
}



if ($acao == 'addusuario' && !empty($_POST)) {

    //var_dump($_POST);



    $nome = filter_var($_POST['nome-usuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS);

    $senha = filter_var($_POST['senha'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $senha_repetida = filter_var($_POST['senha-repetida'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);



    $tipo = filter_var($_POST['tipo'], FILTER_SANITIZE_SPECIAL_CHARS);


    //validacao dos inputs

    if (!$nome) {
        $res = [
            'status' => 404,
            'mensagem' => "Insira o nome"
        ];
        echo json_encode($res);
        exit();
    } elseif (!$username) {
        $res = [
            'status' => 404,
            'mensagem' => "Insira o Username"
        ];
        echo json_encode($res);
        exit();
    } elseif (!$email) {
        $res = [
            'status' => 404,
            'mensagem' => "Insira o Email"
        ];
        echo json_encode($res);
        exit();
    }
    elseif (!$senha) {
        $res = [
            'status' => 404,
            'mensagem' => "Insira uma Senha."
        ];
        echo json_encode($res);
        exit();
    }
    elseif (!$senha_repetida) {
        $res = [
            'status' => 404,
            'mensagem' => "Repita a Senha."
        ];
        echo json_encode($res);
        exit();
    }
     elseif (strlen($senha) < 3 || strlen($senha_repetida) < 3) {
        $res = [
            'status' => 404,
            'mensagem' => "Senha deve ter mais 3 caracteres"
        ];
        echo json_encode($res);
        exit();
    } else {
        //checa se as senhas não conferem
        if ($senha !== $senha_repetida) {
            $res = [
                'status' => 404,
                'mensagem' => "As senhas Não São Iguais"
            ];
            echo json_encode($res);
            exit();
        } else {
            $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

            $checa_usuario = $usuario->checaUsuarioExistente($username);

            if (!$checa_usuario) {
                $res = [
                    'status' => 404,
                    'mensagem' => "Usuario já existe"
                ];
                echo json_encode($res);
                exit();
            } else {
                $usuarioId = $usuario->addUsuario($nome,$username,$email,$hashed_password,$tipo);

                if ($usuarioId) {

                    $res = [
                        'status' => 200,
                        'mensagem' => "Usuário Cadastrado com Sucesso!"
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
    }
}
