<?php

class ClientController{
    
    public function index() {
        require_once 'views/layouts/header.php';
        require_once 'views/Clients/clients.php';
        require_once 'views/layouts/footer.php';
    }
}

