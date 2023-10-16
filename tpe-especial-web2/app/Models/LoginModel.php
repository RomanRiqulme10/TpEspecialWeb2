<?php
require_once './app/Models/Model.php' ;
class LoginModel extends Model {
   
        
            public function getByUser($usuario) {
                $query = $this->db->prepare('SELECT * FROM usuarios WHERE usuario = ?');
                $query->execute([$usuario]);
               
        
                return $query->fetch(PDO::FETCH_OBJ);
            }
        }
?>
        
    

