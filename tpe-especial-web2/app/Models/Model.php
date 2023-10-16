<?php
require_once './config.php' ;
class Model {
    protected $db ;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=estadisticas_futbol;charset=utf8', 'root', '');
        $this->deploy();
    }

    function deploy () {
        $query = $this->db->query('SHOW TABLES');
        $tables = $query->fetchAll(); 
        if(count($tables)==0){

        }
    }
}