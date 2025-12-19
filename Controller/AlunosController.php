<?php



//require_once 'Model/periciaModel.php';
//require_once 'Model/requerenteModel.php';
//include 'Controller/Controller.php';
class AlunosController
{



    public static function index()
    {
        validaUsuario();
        include_once 'Views/Alunos/index.php';
    }

    public static function alunoGeral(){
        validaUsuario();
        include_once 'Views/Alunos/alunosGeral.php';
    }

    public static function ver(){
        validaUsuario();
        include_once 'Views/Alunos/alunoDetalhe.php';
    }

    public static function formAddAluno(){
        validaUsuario();
        include_once 'Views/Alunos/matriculaAluno.php';
    }

}