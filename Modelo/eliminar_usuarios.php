<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "login";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if (mysqli_connect_error()) {
        die("Conexion fallida: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_usuario'])) {
        $id_usuario = $_POST['id_usuario'];

        // Eliminar el usuario
        $sql_delete = "DELETE FROM usuario WHERE id_usuario = $id_usuario";

        if ($conn->query($sql_delete) === TRUE) {
            echo "Usuario eliminado correctamente";

        // Reiniciar el contador AUTO_INCREMENT
    $conn->query("ALTER TABLE `usuario` AUTO_INCREMENT = 1");
        } else {
            echo "Error al eliminar usuario: " . $conn->error;
        }
    }

    $conn->close();
?>
