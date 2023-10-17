<?php
class JugadorView {

    public function showJugador($jugador, $club){
        require './templates/jugador.phtml' ;
    }

    public function showJugadores($jugadores){

        require './templates/jugadores.phtml';

    }

    public function showJugadoresClub($jugadores = null, $club = null,$error = null){
        require './templates/jugadoresClub.phtml' ;
    }
}
?>