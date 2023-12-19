<?php
require_once 'entity/product.php';

class ProductController{
    
    public function index() {
        $product = new Product();
        
        $products = $product->getAll();
        
        require_once 'views/layouts/header.php';
        require_once 'views/Products/products.php';
        require_once 'views/layouts/footer.php';
    }
}

