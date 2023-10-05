<?php

include 'menu.php';


$action = 'menu'; 

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);

switch ($params[0]) {
    case 'menu':
        showMenu();
        break;
    case 'estadisticas_jugador':
        showJugador();
        break;
    case 'login':
        
        showLogin();
        break;
    default:
        echo('404 Page not found');
        break;
}
