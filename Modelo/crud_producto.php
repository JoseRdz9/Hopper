

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CotiEx</title>
    <link rel="stylesheet" type="text/css" href="../vista/styles/crud_producto.css">
    <link rel="stylesheet" href="../vista/styles/navbar.css">
    

    <!--box icons link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!--google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&family=MuseoModerno:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <link rel="stylesheet" href="../vista/styles/footer.css">

     <!-- Estilos de Font Awesome, carrito de compras -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
     <!--  Estilos de Font Awesome, icono usuario  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

</head>

<body>

<!--Header-->

<header>
    <a href="../index.php" class="logo"><i class='bx bxs-diamond'></i> Hopper</a>

    <ul class="navlist">
        <!-- <li><a href="index.html" class="active">Inicio</a></li> -->
        <li><a href="../vista/acercade.php">Acerca de nosotros</a></li>
        <li><a href="../vista/pantalla_cop.php">Tienda</a></li>
        <li><a href="../vista/panel_administrador.php">Administración</a></li>
        <!-- <li><a href="regist.html">Registrate</a></li> -->
        <!-- <li><a href="Log.html">Iniciar Sesión</a></li> -->
        <!-- Iconos del navbar -->
        <li><a href="../controlador/carrito_cop.php"><i class="fas fa-shopping-cart"></i></a></li>  
        <li><a href="../vista/login.php"><i class="fas fa-user"></i> </a></li>
    </ul>

    <div class="h-main">
        <a href="../producto_cop.php" class="h-btn">Cotizar</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        
    </div>
</header>
<!--header end-->
    <div class="container">
        <h1>Control de Inventario</h1>

        <!-- Lista de productos en el inventario -->
        <h2>Inventario</h2>
        <?php include 'read_productos.php'; ?>

        <!-- Formulario para agregar producto -->
        <h2>Agregar Producto</h2>
        <form action="create_producto.php" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required></textarea>

            <label for="precio">Precio:</label>
            <input type="number" name="precio" required>

            <label for="stock">Stock:</label>
            <input type="number" name="stock" required>

            <!-- Campo para la imagen -->
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" accept="image/*" required>

            <button type="submit">Agregar Producto</button>
        </form>


        

        <!-- Formulario para actualizar producto -->
        <h2>Actualizar Producto</h2>
        <form action="update_producto.php" method="post" enctype="multipart/form-data">
            <label for="id_producto">ID del Producto a Actualizar:</label>
            <input type="number" name="id_producto" required>

            <label for="nombre">Nuevo Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="descripcion">Nueva Descripción:</label>
            <textarea name="descripcion" required></textarea>

            <label for="precio">Nuevo Precio:</label>
            <input type="number" name="precio" required>

            <label for="stock">Nuevo Stock:</label>
            <input type="number" name="stock" required>

            <!-- Campo para la nueva imagen -->
            <label for="nueva_imagen">Nueva Imagen:</label>
            <input type="file" name="nueva_imagen" accept="image/*">

            <button type="submit">Actualizar Producto</button>
        </form>


        <!-- Formulario para eliminar producto -->
        <h2>Eliminar Producto</h2>
        <form action="delete_producto.php" method="post">
            <label for="id_producto">ID del Producto a Eliminar:</label>
            <input type="number" name="id_producto" required>

            <button type="submit">Eliminar Producto</button>
        </form>
    </div>
</body>

</html>
