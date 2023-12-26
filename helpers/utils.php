<?php

class Utils{
    
    public static function deleteSession($name) {
        if($_SESSION[$name]){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }
    
    public static function isAdmin() {
        if(!isset($_SESSION['admin'])) {
            header("Location:".base_url);
        }else{
            return true;
        }
    }

    public static function showClients() {
        require_once 'entity/client.php';
        $client = new Client();
        $clients = $client->getAll();
        return $clients;
    }

    public static function showProducts() {
        require_once 'entity/product.php';
        $product = new Product();
        $products = $product->getAll();
        return $products;
    }
}
