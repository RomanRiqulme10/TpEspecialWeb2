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
    case 'menu': //pagina principal
        $controller = new ClubController() ;
        $controller->showMenu() ;
        break;
    case 'show_jugador': //estadisticas de jugador especifico
        showJugador();
        break;
        case 'auth' : 
            $controller = new LoginController() ;
            $controller->checkLogin() ;
    case 'login': //seccion login
        $controller = new LoginController();
        $controller->showLogin();
        break;
    case 'show_jugadores_club': //muestra todos los jugadores de un club en especifico
        $controller = new ClubController();
        $controller->showJugadoresClub($params[1]);
        break;
    case 'show_jugadores': //muestra todos los jugadores de todos los clubes
        showJugadores();
    break;
    default: //error 404
        echo('404 Page not found');
        break;
}
      
