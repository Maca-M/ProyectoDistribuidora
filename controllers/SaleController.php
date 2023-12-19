<?php
require_once 'entity/sale.php';

class SaleController{
    
    public function index() {
        $sale = new Sale();
        
        $sales = $sale->getAll();
        
        require_once 'views/layouts/header.php';
        require_once 'views/Sales/sales.php';
        require_once 'views/layouts/footer.php';
    }
}

