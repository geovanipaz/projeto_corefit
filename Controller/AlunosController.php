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

    public static function formAddAluno(){
        if (!isset($_SESSION['id-usuario'])) {
            header('Location:' . ROOT_URL . 'login');
        }
        include_once 'Views/Alunos/matriculaAluno.php';
    }

}