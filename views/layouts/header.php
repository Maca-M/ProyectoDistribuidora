<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css"/>
    </head>
    
    <body id="header">
        
        <nav id="menu">
            <ul class="menu_ul">
                <?php if(isset($_SESSION['identity'])): ?>
                <li>
                    <?=$_SESSION['identity']->name?>
                </li>
                <?php endif; ?>
                <li>
                    <div class="option">
                        <ul>
                            <li>
                                <a href="<?=base_url?>Product/index">
                                    Productos
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url?>Client/index">
                                    Clientes
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url?>Sale/index">
                                    Ventas
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
            </ul>
        </nav>
        <div id="contenido">
        
