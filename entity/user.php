<?php

class User{
    private $id;
    private $name;
    private $pass;
    private $rol;
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }


    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPass() {
        return password_hash($this->db->real_escape_string($this->pass), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function getRol() {
        return $this->rol;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setName($name): void {
        $this->name = $this->db->real_escape_string($name);
    }

    public function setPass($pass): void {
        $this->pass = $pass;
    }

    public function setRol($rol): void {
        $this->rol = $rol;
    }

    public function save() {
        $sql = "INSERT INTO users VALUES(NULL, '{$this->getName()}', '{$this->getPass()}', 'user');";
        $save = $this->db->query($sql);
        $result = false;
        
        if($save){
            $result = true;
        }
        return $result;
    }
    
    public function login() {
        $name = $this->name;
        $pass = $this->pass;
        
        $sql = "SELECT * FROM users WHERE name = '$name'";
        $login = $this->db->query($sql);
        $result = false;
        
        if($login && $login->num_rows == 1){
            $user = $login->fetch_object();
            
            $verify = password_verify($pass, $user->pass);
            
            if($verify){
                $result = $user;
            }
        }
        return $result;
    }
}
