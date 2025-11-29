<?php



//require_once 'Model/periciaModel.php';
//require_once 'Model/requerenteModel.php';
//include 'Controller/Controller.php';
class AlunosController
{



    public static function index()
    {
        if (!isset($_SESSION['id-usuario'])) {
            echo "------------";
            header('Location:' . ROOT_URL . 'login');
        }
        include_once 'Views/Alunos/index.php';
    }

}