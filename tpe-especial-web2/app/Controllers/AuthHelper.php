<?php

class AuthHelper {

    public static function init() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function login($user) {
        AuthHelper::init();
        $_SESSION['USER_ID'] = $user->id_usuario;
        $_SESSION['USER_NAME'] = $user->usuario; 
    }

    public static function logout() {
        AuthHelper::init();
        session_destroy();
    }

    public static function verify(){
    
        AuthHelper::init();
        return isset($_SESSION['USER_ID']);
    }
}

