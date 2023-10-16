<?php
class JugadorView {

    public function showJugador($jugador, $club){
        require './templates/jugador.phtml' ;
    }

    public function showJugadores($jugadores){

        require './templates/jugadores.phtml';

    }

    public function showJugadoresClub($jugadores, $club){
        require './templates/jugadoresClub.phtml' ;
    }
}
?>