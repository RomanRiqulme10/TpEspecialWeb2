<?php 

require_once './app/Models/LoginModel.php';
require_once './app/Visual/LoginView.php';
require_once './app/Helper/AuthHelper.php';

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
            return;
        }   
            else {
               
                $user = $this->model->getByUser($usuario);
                
                
                if ($user && password_verify($password,($user->password))) {
                   
                    
                    AuthHelper::login($user);
                    header('Location: ' . BASE_URL);
            }
            else {
            
                $this->view->showLogin('Usuario invalido');
                
            }
            }
    }
    
    public function logout() {
        AuthHelper::logout();
        header('Location: ' . BASE_URL);    
    }
    
}