<?php

class Client{
    private $id;
    private $name;
    private $description;
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

    public function getDescription() {
        return $this->description;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM clients ORDER BY name;");
    }

    public function save() {
        $sql = "INSERT INTO clients VALUES(NULL, '{$this->getName()}', '{$this->getDescription()}');";
        $save = $this->db->query($sql);
        $result = false;
        
        if($save){
            $result = true;
        }
        return $result;
    }
}
