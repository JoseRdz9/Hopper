<?php
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el ID del producto desde el formulario
    $idProducto = $_POST["id_producto"];

    // Verificar si el carrito de compras está vacío
    if (!isset($_SESSION["carrito"])) {
        $_SESSION["carrito"] = array();
    }

    // Verificar si el producto ya está en el carrito
    if (!isset($_SESSION["carrito"]) || !is_array($_SESSION["carrito"])) {
        $_SESSION["carrito"] = array();
    }
    $productoEnCarrito = false;

    foreach ($_SESSION["carrito"] as &$producto) {
        if ($producto["id"] == $idProducto) {
            // Incrementar la cantidad si el producto ya está en el carrito
            $producto["cantidad"] += 1;
            $productoEnCarrito = true;
            break;
        }
    }

    // Agregar el producto al carrito si no está presente
    if (!$productoEnCarrito) {
        $nuevoProducto = array(
            "id" => $idProducto,
            "cantidad" => 1
        );
        $_SESSION["carrito"][] = $nuevoProducto;
    }

    echo "Producto agregado al carrito correctamente.";
} else {
    echo "Error al procesar la solicitud.";
}
?>
