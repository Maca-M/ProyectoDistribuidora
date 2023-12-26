<?php
require_once 'entity/sale.php';

class SaleController{
    
    public function index() {
        $sale = new Sale();
        
        $sales = $sale->getAll();
        
        require_once 'views/layouts/header.php';
        require_once 'views/Sales/sales.php';
        require_once 'views/Sales/new.php';
        require_once 'views/layouts/footer.php';
    }

    public function new() {
        require_once 'views/Sales/new.php';
    }

    public function save() {
        if(isset($_POST)) {
            $sale = new Sale();
            $sale->setClient($_POST['client']);
            $sale->setUser($_POST['user']);
            $sale->setTotal($_POST['total']);
            $sale->save();
        }
        header("Location:".base_url."sale/index");
    }
}

