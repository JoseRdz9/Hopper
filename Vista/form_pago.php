
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form_pago.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/form_pago.css">
    <link rel="stylesheet" type="text/css" href="CSS/navbar.css">

    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <script src="js/form_pago.js"></script>
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
        <a href="index.php" class="logo"><i class='bx bxs-diamond'></i> Hopper</a>

        <ul class="navlist">
            <!-- <li><a href="index.html" class="active">Inicio</a></li> -->
            <li><a href="acercade.php">Acerca de nosotros</a></li>
            <li><a href="pantalla_cop.php">Tienda</a></li>
            <li><a href="panel_administrador.php">Administración</a></li>
            <!-- <li><a href="regist.html">Registrate</a></li> -->
            <!-- <li><a href="Log.html">Iniciar Sesión</a></li> -->
            <!-- Iconos del navbar -->
            <li><a href="carrito_cop.php"><i class="fas fa-shopping-cart"></i></a></li>  
            <li><a href="Login.php"><i class="fas fa-user"></i> </a></li>
        </ul>

        <div class="h-main">
            <a href="producto_cop.php" class="h-btn">Cotizar</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            
        </div>
    </header>
    <!--header end-->

<body>
    <main><br><br><br>
        <section class="contact">
            <div class="contact-form-container">
                <div class="contact-form-box">
                    <h3>Formulario de Pago</h3>
                    <form action="#" method="post" class="contact-form">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" required>
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" id="correo" name="correo" required>
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" id="telefono" name="telefono" required>
                        <label for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" required>
                        <label for="metodo-pago">Método de Pago:</label>
                        <select id="metodo-pago" name="metodo-pago" required>
                            <option value="none" selected disabled hidden>Seleccione un método de pago</option>
                            <option value="tarjeta">Tarjeta de Crédito</option>
                            <option value="paypal">PayPal</option>
                        </select>
                        <div id="tarjeta-fields" style="display: none;">
                            <label for="nombre-tarjeta">Nombre:</label>
                            <input type="text" id="nombre-tarjeta" name="nombre-tarjeta">
                            <label for="numero-tarjeta">Número de Tarjeta:</label>
                            <input type="text" id="numero-tarjeta" name="numero-tarjeta">
                            <label for="fecha-vencimiento">Fecha de Vencimiento:</label>
                            <input type="text" id="fecha-vencimiento" name="fecha-vencimiento">
                            <label for="atras-tarjeta">Número de Atrás de la Tarjeta:</label>
                            <input type="text" id="atras-tarjeta" name="atras-tarjeta">
                        </div>
                        <div id="paypal-fields" style="display: none;">
                            <label for="paypal-correo">Correo Electrónico de PayPal:</label>
                            <input type="email" id="paypal-correo" name="paypal-correo">
                        </div>
                        <button type="submit" class="submit-button">Realizar Pago</button>
                    </form><br><br><br><br>
                </div>
            </div>
        </section>
    </main>
    <!-- footer -->
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

    <script src="JS/form_pago.js"></script>
</body>

</html>

