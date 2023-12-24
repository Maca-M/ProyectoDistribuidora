<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <link rel="stylesheet" href="<?=base_url?>node_modules/bootstrap/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?=base_url?>assets/css/mystyles.css"/>
        <link rel="stylesheet" href="<?=base_url?>node_modules/bootstrap-icons/font/bootstrap-icons.css"/>
    </head>
    
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <?php if(isset($_SESSION['identity'])): ?>
                        <a class="navbar-brand text-capitalize">
                            <i class="bi bi-person-fill"></i>
                            <?=$_SESSION['identity']->name?>
                        </a>
                    <?php endif; ?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="<?=base_url?>Product/index">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?=base_url?>Client/index">Clientes</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ventas
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="<?=base_url?>Sale/index">Todas las ventas</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container p-5">
            
