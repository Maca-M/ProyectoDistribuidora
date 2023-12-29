<?php

class Product{
    private $id;
    private $cod;
    private $name;
    private $description;
    private $price;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getCod() {
        return $this->cod;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setCod($cod): void {
        $this->cod = $this->db->real_escape_string($cod);
    }

    public function setName($name): void {
        $this->name = $this->db->real_escape_string($name);
    }

    public function setDescription($description): void {
        $this->description = $this->db->real_escape_string($description);
    }

    public function setPrice($price): void {
        $this->price = $this->db->real_escape_string($price);
    }
    
    public function getAll() {
        return $this->db->query("SELECT * FROM products;");
    }

    public function save() {
        $sql = "INSERT INTO products VALUES(NULL, '{$this->getCod()}', '{$this->getName()}', '{$this->getDescription()}', '{$this->getPrice()}');";
        $save = $this->db->query($sql);
        $result = false;
        
        if($save){
            $result = true;
        }
        return $result;
    }

    public function edit() {
        $sql = "INSERT INTO products VALUES(NULL, '{$this->getCod()}', '{$this->getName()}', '{$this->getDescription()}', '{$this->getPrice()}');";
        $save = $this->db->query($sql);
        $result = false;
        
        if($save){
            $result = true;
        }
        return $result;
    }

    public function delete() {
        $sql = "DELETE FROM products WHERE id = {$this->getId()};";
        $delete = $this->db->query($sql);
        $result = false;
        
        if($delete){
            $result = true;
        }
        return $result;
    }
}