
<?php 


require_once 'Controller/UsuariosController.php';
require_once 'Controller/AlunosController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);



// Remove o prefixo "/PHP_MVC_blog" da URL
$basePath = '/projeto_corefit';
if (strpos($url, $basePath) === 0) {
    $url = substr($url, strlen($basePath));
}

// Quebra a URL em partes
$parts = explode('/', trim($url, '/'));


$controller = $parts[0] ?? '';
$action = $parts[1] ?? '';
$param = $parts[2] ?? NULL;
//var_dump($controller);
//var_dump($action);
//var_dump($param);
//die;
// Roteamento


//var_dump($_SESSION);


switch ($controller) {

    
    //-----Usuários----------
    case 'login':
        
        UsuariosController::index();
        break;
    
    case 'entrar':
        UsuariosController::login();
        break;
    
    case '':
       
        AlunosController::index();
        break;

    default:
        echo "Erro 404 - Página não encontrada";
        break;
}

/*
switch ($controller) {
    
    //-----Usuários----------
    case 'login':
        UsuarioController::index();
        break;

    case 'entrar':
        UsuarioController::login();
        break;

    case 'cadusuario':
        UsuarioController::cadastrarUsuario();
        break; 
    case 'sign':
        UsuarioController::sign();
        break;
        
    case 'editasenha':
        UsuarioController::trocarSenha();
        break;
    case 'editasenhasave':
        UsuarioController::trocarSenhaSave();
        break;
    case 'sair':
       UsuarioController::sair();
       break;
    //------Perícias----------
    case 'pericias':
        if ($action=='pericia' && $param) {
            
            PericiaController::ver($param);
            break;
        }
         else if ($action === 'add' && $param) {
            
            PericiaController::formAddPericiaRequerente($param);
            break;
        }
        else if ($action==='edit' && $param) {
            
            PericiaController::formEditaPericia($param);
            break;
        }
         if ($action=='historicopericias' && $param) {
            
            PericiaController::historico($param);
            break;
        }
        else if ($action === 'add') {
            
            PericiaController::formAddPericia();
            break;
        }
         else if ($action === 'filtroretorno') {
            
            PericiaController::filtroretorno();
            break;
        } 
        PericiaController::index();
        break;
    //controller/action/param    
    //posts/post/2
    //posts/add
    //posts/edit/2
    //posts/delete/2  
    //posts/save  
    case 'requerentes':
        
        if ($action=='requerente' && $param) {
            
            RequerenteController::ver($param);
            break;
        }
        else if ($action==='edit' && $param) {
            
            RequerenteController::formEditaRequerente($param);
            break;
        }
       
         else if ($action === 'add') {
            
            RequerenteController::formAddRequerente();
            break;
        } 
        elseif ($action === 'delete' && $param) {
            
            $pc = new PostsController();
            $pc->ver2($param);
        }
        
        elseif ($action === 'save') {
            
            ControllerPosts::cadastrar();
            break;
        }  
        RequerenteController::index();
        break;
     
    case 'relatorios':
        
        if ($action=='relatorio' && $param) {
            
            RelatorioController::ver($param);
            break;
        }
        else if ($action=='geraportaria' && $param) {
            
            RelatorioController::geraPortaria($param);
            break;
        }
        else if ($action=='evolucaoclinica' && $param) {
            
            RelatorioController::evolucaoClinica($param);
            break;
        }
         else if ($action=='laudopericial' && $param) {
            
            RelatorioController::laudopericial($param);
            break;
        }
        else if ($action=='anotacaoclinica' && $param) {
            
            RelatorioController::anotacaoClinica($param);
            break;
        }
        RelatorioController::index();
        break;
   
    

   

    default:
        echo "Erro 404 - Página não encontrada";
        break;
}

*/