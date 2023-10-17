<?php
require_once './app/Models/Model.php' ;
class JugadorModel extends Model {
 
        
            
            public function getJugador($id) {

                $query = $this->db->prepare('SELECT * FROM jugadores WHERE id_jugador = ?');
                $query->execute([$id]);

                $jugador = $query->fetch(PDO::FETCH_OBJ);

                return $jugador;
            }

            public function getJugadores(){

                $query = $this->db->prepare('SELECT * FROM jugadores');
                $query->execute();

                $jugadores = $query->fetchAll(PDO::FETCH_OBJ);

                return $jugadores;

            }
            
            public function getJugadoresClub($id){
                
                $query = $this->db->prepare('SELECT * FROM  jugadores WHERE club_id = ?');
                $query->execute([$id]);
                $jugadores = $query->fetchAll(PDO::FETCH_OBJ);
                
               
                return $jugadores;
            }
        }
?>