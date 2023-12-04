<?php

class ProductController{
    
    public function index() {
        require_once 'views/layouts/header.php';
        require_once 'views/Products/products.php';
        require_once 'views/layouts/footer.php';
    }
}

