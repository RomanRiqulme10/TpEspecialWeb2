<?php
class CLubView {
    
    public function showMenu($clubes) {
       
        require './templates/clubes.phtml';
    }

    public function showJugadoresClub($jugadores){
        require './templates/jugadoresClub.phtml' ;
    }
}
?>