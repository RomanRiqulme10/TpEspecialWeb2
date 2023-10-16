<?php 
require_once './app/Visual/JugadorView.php';
require_once './app/Models/JugadorModel.php';
require_once './app/Models/ClubModel.php';

class JugadorController{

    private $model;
    private $view;
    private $modelClub;

    public function __construct() {
     
        $this->model = new JugadorModel();
        $this->modelClub = new ClubModel() ;
        $this->view = new JugadorView();
       

    }

    public function show_info_jugador($id) {
        $jugador = $this->model->getJugador($id);
        $club = $this->modelClub->getClub($jugador->club_id);
        $this->view->showJugador($jugador, $club);
    }

    public function showJugadores(){

        $jugadores = $this->model->getJugadores();
        $this->view->showJugadores($jugadores);

    }
    public function showJugadoresClub($id){ 
        $jugadores = $this->model->getJugadoresClub($id);
        $club = $this->modelClub->getClub($jugadores[0]->club_id);
        $this->view->showJugadoresClub($jugadores, $club);
        
    }
}

?>