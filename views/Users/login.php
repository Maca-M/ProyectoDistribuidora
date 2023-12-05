<h1>Iniciar sesion</h1>

<form action="<?=base_url?>User/login">
    <label for="name">Nombre de usuario:</label>
    <input type="text" id="name" name="name" required>

    <label for="pass">Contraseña:</label>
    <input type="password" id="pass" name="pass" required>

    <button type="submit">Iniciar Sesión</button>
 </form>