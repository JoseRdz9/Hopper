<?php
// Conexión a la base de datos (ajusta estos valores según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener productos desde la base de datos
$sql = "SELECT id_producto, nombre, descripcion, precio, stock, imagen FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Imagen</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_producto"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["descripcion"] . "</td>";
        echo "<td>" . $row["precio"] . "</td>";
        echo "<td>" . $row["stock"] . "</td>";

        // Verificar si la imagen es nula antes de intentar mostrarla
        if ($row['imagen'] !== null) {
            echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['imagen']) . "' height='100' width='100'></td>";
        } else {
            echo "<td>No hay imagen</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No hay productos en el inventario.";
}

$conn->close();
?>
