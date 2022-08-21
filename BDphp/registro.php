<?php
include("con_db.php"); 

if (isset($_POST['registro'])) {
    if (strlen($_POST['nombres']) >=1 &&
strlen($_POST['apellidos']) >=1 &&
strlen($_POST['email']) >=1 &&
strlen($_POST['contraseña']) >=1) {
    $nombres = trim($_POST['nombres']);
    $apellidos = trim($_POST['apellidos']);
    $email = trim($_POST['email']);
    $contraseña = trim($_POST['contraseña']);
    $fecha_reg = date("d/m/y");
    $consulta = "INSERT INTO datos(nombres, apellidos, correo, contraseña, fecha_reg) VALUES ('$nombres','$apellidos','$email','$contraseña','$fecha_reg')";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
        ?>
        <h3 class="bien">¡Te has registrado correctamente!</h3>
        <?php 
      header('location:../HTML/Paginas/Ingreso.html');
        ?>
        <?php
    } else {
        ?>
        <h3 class="mal">¡Parece que algo salio mal!</h3>
        <?php
    }
} else {
    ?>
    <h3 class="mal"> ¡Quedan campos por rellenar!</h3>
    <?php
}

}
?>
