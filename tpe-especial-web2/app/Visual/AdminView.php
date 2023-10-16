<?php

class AdminView {
    
    public function showAdmin(){
        require './templates/admin.phtml';
    }
  
    public function adminClubes($clubes = null, $error = null) {
        require './templates/adminClubes.phtml';
    }

    public function adminJugadores($jugadores , $clubes){
        require './templates/adminJugadores.phtml';
    }

    public function showEditarJugador($error= null ,$jugador = null){
        require './templates/formJugadores.phtml';
    }

    public function showAgregarJugador($error = null){
        require './templates/formAgregarJugador.phtml';
    }

}

?>