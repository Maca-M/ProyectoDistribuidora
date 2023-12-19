<?php
require_once 'entity/client.php';

class ClientController{
    
    public function index() {
        $client = new Client();
        
        $clients = $client->getAll();
        
        require_once 'views/layouts/header.php';
        require_once 'views/Clients/clients.php';
        require_once 'views/layouts/footer.php';
    }
}

