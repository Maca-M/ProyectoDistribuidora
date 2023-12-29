<?php

class Sale{
    private $id;
    private $client;
    private $user;
    private $total;
    private $date;
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getClient() {
        return $this->client;
    }

    public function getUser() {
        return $this->user;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getDate() {
        return $this->date;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setClient($client): void {
        $this->client = $client;
    }

    public function setUser($user): void {
        $this->user = $user;
    }

    public function setTotal($total): void {
        $this->total = $total;
    }

    public function setDate($date): void {
        $this->date = $date;
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM sales;");
    }

    public function save() {
        $sql = "INSERT INTO sales VALUES(NULL, '{$this->getClient()}', '{$this->getUser()}', '{$this->getTotal()}', CURDATE());";
        $save = $this->db->query($sql);
        $result = false;
        
        if($save){
            $result = true;
        }
        return $result;
    }

    public function edit() {
        $sql = "UPDATE sales SET 'client' = '{$this->getClient()}', 'user' = '{$this->getUser()}', 'total' = '{$this->getTotal()}' WHERE id = {$this->getId()};";
        $save = $this->db->query($sql);
        $result = false;
        
        if($save){
            $result = true;
        }
        return $result;
    }

    public function delete() {
        $sql = "DELETE FROM sales WHERE id = {$this->getId()};";
        $delete = $this->db->query($sql);
        $result = false;
        
        if($delete){
            $result = true;
        }
        return $result;
    }
}
