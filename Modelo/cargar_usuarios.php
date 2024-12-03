<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";


$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
	die("No hay conexión: ".$conn->connect_error);
}

$sql="SELECT * FROM usuario";
$result=$conn->query($sql);

// Generar la tabla de usuarios con acciones de edición y eliminación
if($result->num_rows > 0) {
    while ($row = $result -> Fetch_assoc()) {
        echo "<tr>
            <td>{$row['id_usuario']}</td>
            <td>{$row['usuario']}</td>
            <td>{$row['correo']}</td>
            <td>{$row['contrasena']}</td>
            
            <td>
                <button onclick='mostrarEditarUsuario(
                    \"{$row['id_usuario']}\", 
                    \"{$row['usuario']}\",
                    \"{$row['correo']}\",
                    \"{$row['contrasena']}\")'>Editar</button>
                <button onclick='eliminarUsuario(\"{$row['id_usuario']}\")'>Eliminar</button>
                
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='8'>No hay usuarios</td></tr>";
}
$conn->close();
?>
