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
        $this->cod = $cod;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function setPrice($price): void {
        $this->price = $price;
    }
    
    public function getAll() {
        return $this->db->query("SELECT * FROM products;");
    }
}