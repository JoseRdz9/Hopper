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
    $idProducto = $_POST["id_producto"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $stock = $_POST["stock"];

    // Actualizar producto en la base de datos (sin imagen)
    $sql = "UPDATE productos SET nombre=?, descripcion=?, precio=?, stock=? WHERE id_producto=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdii", $nombre, $descripcion, $precio, $stock, $idProducto);

    if (!$stmt->execute()) {
        echo "Error al actualizar el producto: " . $stmt->error;
        $stmt->close();
        $conn->close();
        exit;  // Salir del script si hay un error
    }

    // Verificar si se cargó una nueva imagen
    if ($_FILES["nueva_imagen"]["error"] == 0) {
        $check = getimagesize($_FILES["nueva_imagen"]["tmp_name"]);
        if ($check !== false) {
            $imagen = $_FILES['nueva_imagen']['tmp_name'];
            $imgContent = addslashes(file_get_contents($imagen));

            // Actualizar la imagen en la base de datos
            $sqlUpdateImage = "UPDATE productos SET imagen=? WHERE id_producto=?";
            $stmtUpdateImage = $conn->prepare($sqlUpdateImage);
            $stmtUpdateImage->bind_param("bi", $imgContent, $idProducto);

            if ($stmt->execute()) {
                echo "Producto actualizado correctamente. Redireccionando...";
                // Agrega un script de JavaScript para redireccionar después de 2 segundos
                echo '<script>
                        setTimeout(function() {
                            window.location.href = "crud_producto.php";
                        }, 1000);
                      </script>';
            } else {
                echo "Error al agregar el producto: " . $stmt->error;
            }

            $stmtUpdateImage->close();
        } else {
            echo "La nueva imagen no es válida.";
        }
    }

    $stmt->close();
    $conn->close();
}
?>
