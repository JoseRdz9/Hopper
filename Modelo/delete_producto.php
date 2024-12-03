// delete_producto.php

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Obtener ID del producto desde el formulario
    $idProducto = $_POST["id_producto"];

    // Eliminar producto de la base de datos
    $sql = "DELETE FROM productos WHERE id_producto=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idProducto);

    if ($stmt->execute()) {
        echo "Producto elimminado. Redireccionando...";
        // Agrega un script de JavaScript para redireccionar después de 2 segundos
        echo '<script>
                setTimeout(function() {
                    window.location.href = "crud_producto.php";
                }, 1000);
              </script>';
    } else {
        echo "Error al agregar el producto: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
