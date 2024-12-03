<?php
// Inicia o reanuda la sesión
session_start();

// Verifica si se ha enviado información del producto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id_producto"])) {
        $idProducto = $_POST["id_producto"];

        // Verifica si ya hay un carrito en la sesión
        if (!isset($_SESSION["carrito"])) {
            $_SESSION["carrito"] = [];
        }

        // Agrega el producto al carrito con más información (puedes almacenar más campos)
        $producto = [
            'id_producto' => $idProducto,
            'nombre' => $_POST["nombre_producto"],
            'precio' => $_POST["precio_producto"],
            'cantidad' => 1,
            // Agrega más campos según sea necesario
        ];

        $_SESSION["carrito"][] = $producto;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..css/carrito_cop.css">
    <link rel="stylesheet" type="text/css" href="../vista/styles/navbar.css">
    <link rel="stylesheet" href="../vista/styles/footer.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&family=MuseoModerno:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Estilos de Font Awesome, carrito de compras -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <!--  Estilos de Font Awesome, icono usuario  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <title>Carrito de Compras</title>
</head>
<body>
     <!--Header-->
        <!-- <header>
            <a href="index.php" class="logo"><i class='bx bxs-diamond'></i> Hopper</a>
            <ul class="navlist">
                <li><a href="acercade.php">Acerca de nosotros</a></li>
                <li><a href="pantalla_cop.php">Tienda</a></li>
                <li><a href="panel_administrador.php">Administración</a></li>
                <li><a href="carrito_cop.php"><i class="fas fa-shopping-cart"></i></a></li>  
                <li><a href="Login.php"><i class="fas fa-user"></i> </a></li>
            </ul>
            <div class="h-main">
                <a href="producto_cop.php" class="h-btn">Cotizar</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header> -->
        <!--header end-->

        



        
    <table>
        
        <tbody>

        <?php
        // Verifica si hay un carrito en la sesión
        if (isset($_SESSION["carrito"]) && !empty($_SESSION["carrito"])) {
            echo "<h2>Carrito de Compras</h2>";
            echo "<table>";
            echo "<thead><tr><th>ID Producto</th><th>Nombre</th><th>Descripcion</th><th>Precio</th></tr></thead>";
            echo "<tbody>";

            // Itera sobre los productos en el carrito y muestra la información
            foreach ($_SESSION["carrito"] as $producto) {
                // Recuperar detalles del producto desde la base de datos
                $idProductoEnCarrito = $producto['id_producto'];
                $cantidadCarrito = $producto['cantidad'];

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

                $sqlStock = "SELECT stock FROM productos WHERE id_producto = ?";
                $stmtStock = $conn->prepare($sqlStock);
                $stmtStock->bind_param("i", $idProducto);
                $stmtStock->execute();
                $stmtStock->bind_result($stockActual);
                $stmtStock->fetch();
                $stmtStock->close();

                // Actualizar el stock en la base de datos
                $nuevoStock = $stockActual - $cantidadCarrito;
                $sqlUpdateStock = "UPDATE productos SET stock = ? WHERE id_producto = ?";
                $stmtUpdateStock = $conn->prepare($sqlUpdateStock);
                    $stmtUpdateStock->bind_param("ii", $nuevoStock, $idProducto);
                    $stmtUpdateStock->execute();
                    $stmtUpdateStock->close();

                
                

                // Obtener detalles del producto desde la base de datos
                $sql = "SELECT nombre, descripcion, precio FROM productos WHERE id_producto = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $idProductoEnCarrito);
                $stmt->execute();
                $stmt->bind_result($nombre, $descripcion, $precio);
                $stmt->fetch();
                $stmt->close();

                $producto['cantidad'] = 1;

                echo "<tr>";
                echo "<td>{$idProductoEnCarrito}</td>";
                echo "<td>{$nombre}</td>";
                echo "<td>{$descripcion}</td>";
                echo "<td>{$precio}</td>";
                echo "<td>{$producto['cantidad']}</td>";
                // Botón para eliminar
                echo "<td><form action='carrito_cop.php' method='POST'>
                    <input type='hidden' name='eliminar' value='{$producto['id_producto']}'>
                    <button type='submit'>Eliminar</button>
                </form></td>";

                echo "</tr>";
            }

            echo "</tbody></table>";

            // Botón de Pagar
            
            // Verifica si hay un carrito en la sesión
            if (isset($_SESSION["carrito"]) && !empty($_SESSION["carrito"])) {
                // Obtén los IDs de productos en el carrito
                $productosEnCarrito = array_column($_SESSION["carrito"], 'id_producto');
            
                // Consulta la base de datos para obtener el stock actual de los productos en el carrito
                $sqlStock = "SELECT id_producto, stock FROM productos WHERE id_producto IN (" . implode(",", $productosEnCarrito) . ")";
                $resultStock = $conn->query($sqlStock);
            
                // Crea un array asociativo con los ID de productos y su stock
                $stockDisponible = [];
                while ($rowStock = $resultStock->fetch_assoc()) {
                    $stockDisponible[$rowStock['id_producto']] = $rowStock['stock'];
                }
            
                // Verifica el stock para cada producto en el carrito
                $productosSinStock = [];
                foreach ($_SESSION["carrito"] as $producto) {
                    $idProductoEnCarrito = $producto['id_producto'];
                    $cantidadEnCarrito = $producto['cantidad'];
            
                    // Verifica si hay suficiente stock para el producto
                    if (!isset($stockDisponible[$idProductoEnCarrito]) || $stockDisponible[$idProductoEnCarrito] < $cantidadEnCarrito) {
                        $productosSinStock[] = $producto['nombre'];
                    }
                }
            
                // Si hay productos sin stock, muestra el mensaje y no permitas continuar
                if (!empty($productosSinStock)) {
                    echo "<p>Lo sentimos, no hay stock suficiente para los siguientes productos: " . implode(", ", $productosSinStock) . "</p>";
                } else {
                    // Aquí puedes colocar el código para procesar la compra y actualizar el inventario
                    // Obtener el stock actual del producto
                    // Limpiar el carrito después de la compra
                    // Actualizar el stock en la base de datos
                $nuevoStock = $stockActual - $cantidadCarrito;
                $sqlUpdateStock = "UPDATE productos SET stock = ? WHERE id_producto = ?";
                $stmtUpdateStock = $conn->prepare($sqlUpdateStock);
                    $stmtUpdateStock->bind_param("ii", $nuevoStock, $idProducto);
                    $stmtUpdateStock->execute();
                    $stmtUpdateStock->close();

                
                

                // Obtener detalles del producto desde la base de datos
                $sql = "SELECT nombre, descripcion, precio FROM productos WHERE id_producto = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $idProductoEnCarrito);
                $stmt->execute();
                $stmt->bind_result($nombre, $descripcion, $precio);
                $stmt->fetch();
                $stmt->close();
                     $_SESSION["carrito"] = [];
                    // Luego, redirige al usuario a la página de confirmación o agradecimiento
                    echo "<a href='form_pago.php'><button>Pagar</button></a>";
                }
            }

        } else {
            echo "<p>El carrito está vacío.</p>";
        }
        // Verifica si hay un carrito en la sesión


        // Verifica si se ha enviado información para eliminar un producto
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar"])) {
            $idProductoEliminar = $_POST["eliminar"];
            // Encuentra y elimina el producto del carrito
            foreach ($_SESSION["carrito"] as $indice => $producto) {
                if ($producto['id_producto'] == $idProductoEliminar) {
                    unset($_SESSION["carrito"][$indice]);
                    break;
                }
            }
        }
?>
        </tbody>
    </table>


    <footer>
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icon">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
        </ul>
        <ul class="menu">
            <li><a href="../vista/pantalla_cop.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <p>&copy Hopper team | Todos los derechos reservados</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        
</body>
</html>


