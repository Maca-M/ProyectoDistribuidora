<?php
require_once 'entity/product.php';

class ProductController{
    
    public function index() {
        $product = new Product();
        
        $products = $product->getAll();
        
        require_once 'views/layouts/header.php';
        require_once 'views/Products/products.php';
        require_once 'views/Products/new.php';
        require_once 'views/Products/edit.php';
        require_once 'views/layouts/footer.php';
    }

    public function new() {
        require_once 'views/Products/new.php';
    }

    public function save() {
        if(isset($_POST)) {
            $product = new Product();
            $product->setCod($_POST['cod']);
            $product->setName($_POST['name']);
            $product->setDescription($_POST['description']);
            $product->setPrice($_POST['price']);
            $product->save();
        }
        header("Location:".base_url."product/index");
    }

    public function edit() {
        require_once 'views/Products/new.php';
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $prod = new Product();
            $prod->setId($id);
            $prod->delete();
        }
        header("Location:".base_url."product/index");
    }
}

