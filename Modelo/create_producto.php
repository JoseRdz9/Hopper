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

    // Obtener datos del formulario
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];

    // Procesar la imagen
    $imagen = $_FILES["imagen"];
    $imagenData = file_get_contents($imagen["tmp_name"]);

    // Insertar nuevo producto en la base de datos
    $sql = "INSERT INTO productos (nombre, descripcion, precio, stock, imagen) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdis", $nombre, $descripcion, $precio, $stock, $imagenData);

    if ($stmt->execute()) {
        echo "Producto agregado correctamente. Redireccionando...";
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
