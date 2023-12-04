<?php

class UserController{
    
    public function index() {
        echo "Usuarios, index";
    }
    
    public function login() {
        require_once 'views/Users/login.php';
    }
    
    public function validate() {
        if(isset($_POST)){
            var_dump($_POST);
        }
    }
}

