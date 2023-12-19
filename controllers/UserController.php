<?php
require_once 'entity/user.php';

class UserController{
    
    public function index() {
        require_once 'views/Users/login.php';
    }
    
    
    public function save() {
        if(isset($_POST)){
            $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : false;
            $pass = isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : false;

            
            if($name && $pass){
                $user = new User();
                $user->setName($name);
                $user->setPass($pass);
                $save = $user->save();

                if($save){
                    $_SESSION['register'] = "complete";
                }else{
                    $_SESSION['register'] = "failed";
                }
            }else{
                $_SESSION['register'] = "failed";
            }
        }else{
            $_SESSION['register'] = "failed";
        }
        header("Location:".base_url."User/register");
    }
    
    public function login() {
        if(isset($_POST)){
            $user = new User();
            $user->setName($_POST['name']);
            $user->setPass($_POST['pass']);
            
            $identity = $user->login();
            
            if($identity && is_object($identity)){
                $_SESSION['identity'] = $identity;
                
                if($identity->rol == 'admin'){
                    $_SESSION['admin'] = true;
                }
                
                header("Location:".base_url."Product/index");
            }else{
                $_SESSION['login'] = 'Acceso fallido';
                header("Location:".base_url);
            }
        }else{
            $_SESSION['login'] = 'Acceso fallido';
            header("Location:".base_url);
        }
                
    }
    
}

