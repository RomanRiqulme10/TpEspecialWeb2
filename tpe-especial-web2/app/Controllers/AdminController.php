<?php 
require_once './app/Visual/AdminView.php';
require_once './app/Models/AdminModel.php';

class AdminController{
    private $model ;
    private $view ;

    public function __construct(){
        $this->view = new AdminView();
        $this->model = new AdminModel();
    }
        


    public function showAdmin() {
        $this->view->showAdmin() ;
    }
    
    public function adminClubes(){
        $clubes = $this->model->getClubes() ;
        $this->view->adminClubes($clubes) ;
        
    }

    public function eliminarClub($id){

        $this->model->eliminarClub($id) ;
        header('Location: ' . BASE_URL . 'admin_clubes');

    }

    public function eliminarJugador($id){

        $this->model->eliminarJugador($id) ;
        header('Location: ' . BASE_URL . 'admin_clubes');

    }
    
    public function adminJugadores(){
        $club = $this->model->getClubes() ;
        $jugadores = $this->model->getJugadores() ;
        $this->view->adminJugadores($jugadores,$club);
    }

    public function agregarClub(){
        $club = $_POST['clubName'];
        
        $clubes = $this->model->getClubes() ;
        if(empty($club) || strlen($club) < 3){
            $error = 'Completa el campo';
            $this->view->adminClubes($clubes,$error);
        }
        else {
            $this->model->agregarClub($club) ;
            header('Location: ' . BASE_URL . 'admin_clubes');
        }
        
        
    }

    public function editarClub($id){
        $club = $_POST['clubName'];
        
         $clubes = $this->model->getClubes();

        if(empty($club || strlen($club) < 3)){
            $error = 'Completa el campo';
            $this->view->adminClubes($clubes,$error);
        }
            else {
                $this->model->editarClub($club, $id);
                header('Location: ' . BASE_URL . 'admin_clubes');
            }
    }

    public function showEditarJugador($id){
        $jugador = $this->model->getJugador($id);
        $this->view->showEditarJugador(null, $jugador);
    }
    
    public function editarJugador(){
        $edad = $_POST['edad'];
        $goles = $_POST['goles'];
        $jugadorName = $_POST['jugadorName'];
        $clubName = $_POST['clubName'] ;
        $club_id = $_POST['club_id'] ;
        $jugador_id = $_POST['jugador_id'] ;
    
        if(empty ($jugadorName) || empty($edad) || empty($goles) || empty ($clubName)){
            $error = 'Complete todos los campos para poder editar un Jugador' ;
            $this->view->showEditarJugador($error,null) ;
        }
        else {

            if (!$this->model->clubInvalido($clubName))  {
                $error = 'El club enviado no es valido';
                $this->view->showEditarJugador($error,null) ;
            }
            else {
                $club = $this->model->getClub($clubName) ;
                $this->model->editarJugador($jugadorName,$edad,$goles,$club, $club_id,$jugador_id);
                header('Location: ' . BASE_URL . 'admin_jugadores');
            }

        }

    }
    
    function showAgregarJugador(){

        $this->view->showAgregarJugador();
    
    }

    function agregarJugador(){

        $edad = $_POST['edad'];
        $goles = $_POST['goles'];
        $jugadorName = $_POST['jugadorName'];
        $clubName = $_POST['clubName'];

        if(empty ($jugadorName) || empty($edad) || empty($goles) || empty ($clubName)){
            $error = 'Complete todos los campos para poder agregar un Jugador' ;
            $this->view->showEditarJugador($error,null) ;
        }

        if($this->model->clubInvalido($clubName)) {
            $error= 'Club invalido' ;
            $this->view->showAgregarJugador($error);
        }

        $this->model->agregarJugador($edad,$goles,$jugadorName,$clubName);
    }

    }
    

