<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo php.css">
    <link rel="icon" href="Favicón.png">
    <title>Iniciar sesión a PEV</title>
</head>
<body>
    <form method="post">
        <img class="img" src="logo-confirmado.png">
        <h1>Registro</h1>
        <input type="text" name="nombres" placeholder="Escriba sus nombres">
        <input type="text" name="apellidos" placeholder="Escriba sus apellidos">
        <input type="email" name="email" placeholder="Escriba su Correo">
        <input type="password" name="contraseña" placeholder="Escriba una contraseña">
        <button name="registro"><a href="../Paginas/Ingreso.html">Registrarse</a></button>
         <Button class="link" name="LRegistro" value="¿Ya tienes una cuenta?"><a href="../HTML/Paginas/Ingreso.html">¿Ya tienes una cuenta?</a></Button>
    </form>
    <?php
    include("registro.php");
    include("LinkB.php");
    ?>
</body>
</html>