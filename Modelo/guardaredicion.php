<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_error()) {
    die("Conexion fallida: ".$conn->connect_error);
}

$id_usuario = $_POST['id_usuario'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];


// Actualizar el usuario en la base de datos
$sqlupdate = "UPDATE usuario SET
    usuario='$usuario',
    correo='$correo',
    contrasena='$contrasena'
    WHERE id_usuario='$id_usuario'";

if ($conn->query($sqlupdate) === TRUE) {
    echo "Usuario actualizado correctamente";
} else {
    echo "Error al actualizar usuario: " . $conn->error;
}

$conn->close();
?>
