<h1>Iniciar sesion</h1>

<form action="index.php?controller=user&action=validate" method="POST">
    <label for="name">Nombre</label>
    <input type="text" name="name" required/>
    
    <label for="pass">Contraseña</label>
    <input type="password" name="pass" required/>
    
    <input type="submit" value="Ingresar"/>
</form>