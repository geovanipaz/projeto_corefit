<?php

session_start();



define('ROOT_URL', '/projeto_corefit/');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
//define('DB_NAME', 'django_db');
define('DB_NAME', 'core_fit2');


function validaUsuario(){
    if (!isset($_SESSION['id-usuario'])) 
    {
        header('Location:' . ROOT_URL . 'login');
    }
}

function validaAdmin(){
    if (!isset($_SESSION['id-usuario']) || !isset($_SESSION['user_is_admin']))
    {
        header('Location:' . ROOT_URL );
    }
}