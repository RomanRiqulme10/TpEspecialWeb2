<?php
class ClubModel {
   private $db ;
        
            function __construct() {
                $this->db = new PDO('mysql:host=localhost;dbname=estadisticas_futbol;charset=utf8', 'root', '');
            }
        
            public function getClubes() {
                
                $query = $this->db->prepare('SELECT * FROM clubes');
                $query->execute();
                $clubes  = $query->fetchAll(PDO::FETCH_OBJ); 
                
                return $clubes;
                
            }
        }
?>
       