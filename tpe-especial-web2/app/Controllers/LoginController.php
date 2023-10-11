<?php 

require_once './app/Models/LoginModel.php';
require_once './app/Visual/LoginView.php';
require_once './app/Controllers/AuthHelper.php';

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

        $user = $this->model->getByUser($usuario);
        if ($user && $user->password == $password) {
            AuthHelper::login($user);
            header('Location: ' . BASE_URL);
            

        } else {
            $this->view->showLogin('Usuario inválido');
            die ;
            
        }

    }
    
    public function logout() {
        AuthHelper::logout();
        header('Location: ' . BASE_URL);    
    }
    
}