<?php
class JugadorView {

    public function showJugador($jugador){
        require './templates/jugador.phtml' ;
    }

    public function showJugadores($jugadores){

        require './templates/jugadores.phtml';

    }
}
?>