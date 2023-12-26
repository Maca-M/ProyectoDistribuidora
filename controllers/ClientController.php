<?php
require_once 'entity/client.php';

class ClientController{
    
    public function index() {
        $client = new Client();
        
        $clients = $client->getAll();
        
        require_once 'views/layouts/header.php';
        require_once 'views/Clients/clients.php';
        require_once 'views/Clients/new.php';
        require_once 'views/layouts/footer.php';
    }

    public function new() {
        require_once 'views/Clients/new.php';
    }

    public function save() {
        if(isset($_POST)) {
            $client = new Client();
            $client->setName($_POST['name']);
            $client->setDescription($_POST['description']);
            $client->save();
        }
        header("Location:".base_url."client/index");
    }
}

