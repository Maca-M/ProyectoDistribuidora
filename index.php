<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';


if(isset($_GET['controller'])){
    $controller_name = $_GET['controller'].'Controller';
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $controller_name = controller_default;
}else{
    echo "Pagina inexistente";
    exit();
}

if(class_exists($controller_name)){
    $controller = new $controller_name();
    
    if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){
        $action = $_GET['action'];
        $controller->$action();
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $action_default = action_default;
        $controller->$action_default();
    }else{
        echo "Pagina inexistente";
    }
}else{
    echo "Pagina inexistente";
}
