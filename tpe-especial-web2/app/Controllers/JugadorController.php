<?php 
require_once './app/Visual/JugadorView.php';
require_once './app/Models/JugadorModel.php';

class JugadorController{

    private $model;
    private $view;

    public function __construct() {

        $this->model = new JugadorModel();
        $this->view = new JugadorView();

    }

    public function show_info_jugador($id) {
        
        $jugador = $this->model->getJugador($id);
        $this->view->showJugador($jugador);

    }

    public function showJugadores(){

        $jugadores = $this->model->getJugadores();
        $this->view->showJugadores($jugadores);

    }
    
}

?>