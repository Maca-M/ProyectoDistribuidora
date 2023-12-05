<?php
require_once 'models/user.php';

class UserController{
    
    public function index() {
        require_once 'views/Users/login.php';
    }
    
    
    public function save() {
        if(isset($_POST)){
            $name = isset($_POST['name']) ? $_POST['name'] : false;
            $pass = isset($_POST['pass']) ? $_POST['pass'] : false;
            
            if($name && $pass){
                $user = new User();
                $user->setName($name)
                    ->setPass($pass);
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
            $user->setName($_POST['name'])
                ->setPass($_POST['pass']);
            
            $identity = $user->login();
        }
        header("Location:".base_url);
    }
    
}

