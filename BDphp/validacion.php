<?php
    //session_start();
    include("con_db.php");
    
    if (!isset($_POST['correo'])) {
        header('location:../HTML/Paginas/Ingreso.html');
    }
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];
    $sql= "SELECT * FROM datos WHERE correo='$correo' and contraseña='$contraseña'";
    $resultado=mysqli_query($conex,$sql);
    $existe=mysqli_num_rows($resultado);
    if ($existe>0) {
        /*$user=mysqli_fetch_array($resultado);
        $_SESSION['usuario']=$user['usuario'];*/
        header('location:../HTML/Paginas/Index.html');
    }else {
       header('location:../HTML/Paginas/Ingreso.html');
       
    }
   
?>