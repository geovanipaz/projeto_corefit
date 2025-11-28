<?php

require_once __DIR__.'/../constants.php'; 


try {
    // Conexão com a porta e definição do charset
    $dsn = "mysql:host=".DB_HOST.";port=3306;dbname=".DB_NAME.";charset=utf8";
    $conexao = new PDO($dsn, DB_USER, DB_PASS);

    // Configura o modo de erro do PDO
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Definindo o charset como utf8mb4 para suporte completo de Unicode
    $conexao->exec("set names utf8mb4");

    //echo "Conexão com banco de dados realizada com sucesso!";
} catch(PDOException $err) {
    die("Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado: " . $err->getMessage());
}


class Database
{
    
    protected $conexao;
 
    public function __construct()
    {
        try {
            $dsn = "mysql:host=".DB_HOST."; dbname=".DB_NAME."; charset=utf8";
            $options = array(PDO::ATTR_PERSISTENT);
            $this->conexao = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
 
    }
}