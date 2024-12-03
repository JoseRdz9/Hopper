<?php

include('conexion.php');

$usuario = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$pass = $_POST['contra'];

$verificacion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

$r = mysqli_num_rows($verificacion);

if ($r > 0) {
    echo '
        <script>
        alert("El nombre de usuario ya esta siendo utilizado");
        location.href = "../login.php"
        </script>
    ';
    exit;
}

$insertar = mysqli_query($conexion, "INSERT INTO usuarios (usuario, contraseña, correo, telefono, rol)
VALUES ('$usuario', '$pass', '$correo', '$telefono', 'cliente')" );

if ($insertar) {
    echo '
        <script>
        alert("Registro exitoso");
        location.href = "../login.php"
        </script>
    ';
}

mysqli_close($conexion);

?>