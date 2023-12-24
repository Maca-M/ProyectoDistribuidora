<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css"/>
    <link rel="stylesheet" href="<?=base_url?>assets/css/mystyles.css"/>
</head>
<body class="login">
    <?php if(isset($_SESSION['login']) && $_SESSION['login'] == "Acceso fallido"): ?>
        <p class="error">Acceso fallido</p>
        <?php Utils::deleteSession('login'); ?>
    <?php endif; ?>

    <div>
        <h1>Iniciar sesion</h1>

        <form action="<?= base_url ?>User/login" method="post">
            <label for="name">Nombre de usuario:</label>
            <input type="text" id="name" name="name" required>

            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required>

            <button type="submit" class="btn btn-outline-success btn-sm">
                Iniciar Sesion
            </button>
         </form>
    </div>
</body>