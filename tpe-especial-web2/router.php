<?php

require_once 'app/Controllers/ClubController.php' ; 
require_once 'app/Controllers/LoginController.php';
require_once 'app/Controllers/JugadorController.php';
require_once 'app/Controllers/AdminController.php';

//LOS JUGADORES CUMPLEN EL ROL DE ITEM Y LOS CLUBES EL ROL DE CATEGORIA 

$action = 'menu'; 

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) ."/");

$params = explode('/', $action);

switch ($params[0]) {
    case 'menu': //pagina principal
        $controller = new ClubController() ;
        $controller->showMenu() ;
        break;
        case 'admin': //muestra todos los jugadores de un club en especifico
            $controller = new AdminController();
            $controller->showAdmin();
            break;
    case 'login': //seccion login
            $controller = new LoginController();
            $controller->showLogin();
        break;
    case 'logout': //Logout
        $controller = new LoginController() ;
        $controller->logout() ;

    case 'auth':  //VERIFICACION
            $controller = new LoginController() ;
            $controller->checkLogin() ;
        break;

    case 'jugadores': //muestra todos los jugadores de todos los clubes
        $controller = new JugadorController() ;
        $controller->showJugadores();
        break;
        
    case 'info_jugador': //estadisticas de jugador especifico
        $controller = new JugadorController();
        $controller->show_info_jugador($params[1]);
        break;
        
    case 'jugadores_club': //muestra todos los jugadores de un club en especifico
        $controller = new JugadorController();
        $controller->showJugadoresClub($params[1]);
        break;
   
    case'admin_jugadores':   //MUESTRA LA SECCION DE ADMINISTRACION DE LOS JUGADORES
        $controller = new AdminController();
        $controller->adminJugadores();  
        break;
    case'admin_clubes':   //MUESTRA LA SECCION DE ADMINISTRACION DE LOS CLUBES
        $controller = new AdminController();
        $controller->adminClubes() ;
        break;    
    case'eliminarClub': 
        $controller = new AdminController();
        $controller->eliminarClub($params[1]);
        break;
    case'agregarClub':   //AGREGA CLUB(CATEGORIA)
        $controller = new AdminController();
        $controller->agregarClub();
        break;
    case'showEditarJugador': //MUESTRA EL FORMULARIO PARA EDITAR JUGADOR(ITEM)
        $controller = new AdminController() ;
        $controller->ShowEditarJugador($params[1]);
        break;
    case'editarClub': // edita el nombre de club (Categoria)
        $controller = new AdminController() ;
        $controller->editarClub($params[1]);
        break;
    case'showAgregarJugador': //muestra el formulario para agregar JUGADOR(ITEM)
        $controller = new AdminController();
        $controller->showAgregarJugador();
        break;
    case'editarJugador': //EDITA JUGADOR
        $controller = new AdminController() ;
        $controller->editarJugador();
        break;
    case'agregarJugador': //AGREGA JUGADOR
        $controller = new AdminController() ;
        $controller->agregarJugador();
        break;
    case'eliminarJugador': //elimina jugador
        $controller = new AdminController() ;
        $controller->eliminarJugador($params[1]);
        break;
    default: //error 404
        echo('404 Page not found');
        break;
}
      
