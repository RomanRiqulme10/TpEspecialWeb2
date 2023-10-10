<?php 

require_once './app/Models/LoginModel.php';
require_once './app/Visual/LoginView.php';

class LoginController {
    
    private $model;
    private $view;

    public function __construct() {
        $this->model = new LoginModel();
        $this->view = new LoginView();
    }

    public function showLogin() {
        $this->view->showLogin();
    }


    public function checkLogin() {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        if (empty($usuario) || empty($password)) {
            $this->view->showLogin('Faltan completar datos');
            die;
        }

        // busco el usuario
        $user = $this->model->getByEmail($usuario);
        if ($user && $user->password == $password) {
            // ACA LO AUTENTIQUE
            header('Location: ' . BASE_URL); //redirecciona

        } else {
            $this->view->showLogin('Usuario inválido');
            die ;
            
        }
    }

    
}