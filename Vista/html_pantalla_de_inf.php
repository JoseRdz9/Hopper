

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CotiEx</title>
    <link rel="stylesheet" type="text/css" href="styles/css_pantalla_de_inf.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">

    <!--box icons link-->
      <!--box icons link-->
      <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
     <!--google fonts link-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Michroma&family=MuseoModerno:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

      <!-- Estilos de Font Awesome, carrito de compras -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
      <!--  Estilos de Font Awesome, icono usuario  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>

     <!--Header-->

   <header>
    <a href="../index.php" class="logo"><i class='bx bxs-diamond'></i> Hopper</a>

    <ul class="navlist">
        <!-- <li><a href="index.html" class="active">Inicio</a></li> -->
        <li><a href="acercade.php">Acerca de nosotros</a></li>
        <li><a href="pantalla_cop.php">Tienda</a></li>
        <li><a href="panel_administrador.php">Administración</a></li>
        <!-- <li><a href="regist.html">Registrate</a></li> -->
        <!-- <li><a href="Log.html">Iniciar Sesión</a></li> -->
        <!-- Iconos del navbar -->
        <li><a href="../controlador/carrito_cop.php"><i class="fas fa-shopping-cart"></i></a></li>  
        <li><a href="login.php"><i class="fas fa-user"></i> </a></li>
    </ul>

    <div class="h-main">
        <a href="producto_cop.php" class="h-btn">Cotizar</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        
    </div>
</header>
<!--header end-->
<body>
<div class="container">

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

// Recuperar el ID del producto de la URL
$idProducto = $_GET['id'];

// Obtener detalles del producto desde la base de datos
$sql = "SELECT nombre, descripcion, precio, stock, imagen FROM productos WHERE id_producto = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idProducto);
$stmt->execute();
$stmt->bind_result($nombre, $descripcion, $precio, $stock, $imagen);
$stmt->fetch();
$stmt->close();
?>

<h1><?php echo $nombre; ?></h1>
<div class="product-info">
    <p>Precio</p>
    <p><h2>$<?php echo $precio; ?></h2></p>
    <p>Descripción</p>
    <p><?php echo $descripcion; ?></p>

    <div class="datos-producto">
        <p class="datos">Stock: <br> <?php echo $stock; ?></p>
    </div>

    <form action="../controlador/carrito_cop.php" method="POST">
        <!-- Incluye más campos del producto que desees enviar al carrito -->
        <input type="hidden" name="id_producto" value="<?php echo $idProducto; ?>">
        <input type="hidden" name="nombre_producto" value="<?php echo $nombre; ?>">
        <input type="hidden" name="precio_producto" value="<?php echo $precio; ?>">
        <!-- Agrega más campos según sea necesario -->
        <button type="submit">Agregar al carrito</button>
    </form>
</div>

<div class="product-image">
    <?php
    // Verifica si hay datos de imagen
    if ($imagen) {
        // Convierte los datos binarios a base64
        $imagenBase64 = base64_encode($imagen);

        // Genera la URL de la imagen
        $imagenUrl = "data:image/jpeg;base64,{$imagenBase64}";

        // Muestra la imagen
        echo '<img src="' . $imagenUrl . '" alt="Imagen del Producto" width="200">';
    } else {
        echo '<p>No hay imagen disponible</p>';
    }
    ?>
</div>

</div>

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
            <li><a href="#">Home</a></li>
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
