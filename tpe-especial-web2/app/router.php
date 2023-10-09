<?php
include 'Controllers/ClubController.php' ; 
include 'Controllers/LoginController.php';

include 'menu.php';

$action = 'menu'; 

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$params = explode('/', $action);

switch ($params[0]) {
    case 'menu':
        $controller = new ClubController() ;
        $controller->showMenu() ;
        break;
    case 'estadisticas_jugador':
        showJugador();
        break;
        case 'auth' : 
            $controller = new LoginController() ;
            $controller->checkLogin() ;
    case 'login':
        $controller = new LoginController();
        $controller->showLogin();
        break;
    case 'mostrar_jugadores':
        showJugadores();
        break;
    default:
        echo('404 Page not found');
        break;
}
      
