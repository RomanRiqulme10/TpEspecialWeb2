<?php
class LoginModel {
   private $db ;
        
            function __construct() {
                $this->db = new PDO('mysql:host=localhost;dbname=estadisticas_futbol;charset=utf8', 'root', '');
            }
        
            public function getByEmail($usuario) {
                $query = $this->db->prepare('SELECT * FROM usuarios WHERE usuario = ?');
                $query->execute([$usuario]);
               
        
                return $query->fetch(PDO::FETCH_OBJ);
            }
        }
?>
        
    

