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
    
    
    if (is_array($dados) || is_object($dados)) 
    {
        
        $saida = ['usuariosLista' => $dados];
        
        header('Content-Type: application/json');
        echo json_encode($saida);
    } else {
        // Retorne um erro caso os dados não sejam válidos
        echo json_encode(['error' => 'Dados inválidos']);
    }
    exit();
}