<?php

require_once 'Model/usuarioModel.php';
//include 'Controller/Controller.php';
class UsuariosController
{

   

    public static function index()
    {

        
        include_once 'Views/Usuarios/formLogin.php';
    }

    public static function listaUsuarios()
    {

        validaUsuario();
        include_once 'Views/Usuarios/listaUsuarios.php';
    }

    public static function addUsuario()
    {

        validaUsuario();
        //validaAdmin();
        include_once 'Views/Usuarios/addUsuario.php';
    }

    public static function login()
    {
        $usuario = new UsuarioModel();

       
        if (isset($_POST['submit'])) {
            
            
            $username_email = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $password = filter_var($_POST['senha'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

           
            if (!$username_email) {
                $_SESSION['signin']['usuario'] = "Username exigido";
            } elseif (!$password) {
                $_SESSION['signin']['senha'] = "Senha exigida";
            } else {

                $usuario->login($username_email,$password);
                
            }
            if (isset($_SESSION['signin'])) {
                $_SESSION['signin-data'] = $_POST;
                header('Location:' . ROOT_URL . 'login');
                die;
            }
        } else {
            header('Location:' . ROOT_URL . 'login');
            die;
        }
    }

    public static function sair(){
        session_destroy();
        header('Location:' . ROOT_URL . 'login');
        die;
    }
}