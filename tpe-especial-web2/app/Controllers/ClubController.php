<?php 
require_once './app/Visual/ClubView.php';
require_once './app/Models/ClubModel.php';

class ClubController{

    private $model;
    private $view;

    public function __construct() {

        $this->model = new ClubModel();
        $this->view = new CLubView();
       

    }

    public function showMenu() {

        $clubes = $this->model->getClubes();
        $this->view->showMenu($clubes);

    }
        
}
?>