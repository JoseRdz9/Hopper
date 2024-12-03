<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CotiEx</title>
    <link rel="stylesheet" type="text/css" href="vista/styles/style.css">
    <link rel="stylesheet" href="vista/styles/navbar.css">
    

    <!--box icons link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!--google fonts link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&family=MuseoModerno:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="vista/styles/loader.css">
    <link rel="stylesheet" href="vista/styles/footer.css">

     <!-- Estilos de Font Awesome, carrito de compras -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
     <!--  Estilos de Font Awesome, icono usuario  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

</head>

<body>
    
   <!--Header-->

   <header>
    <a href="index.php" class="logo"><i class='bx bxs-diamond'></i> Hopper</a>

    <ul class="navlist">
        <!-- <li><a href="index.html" class="active">Inicio</a></li> -->
        <li><a href="vista/acercade.php">Acerca de nosotros</a></li>
        <li><a href="vista/pantalla_cop.php">Tienda</a></li>
        <li><a href="vista/panel_administrador.php">Administración</a></li>
        <!-- <li><a href="Log.html">Iniciar Sesión</a></li> -->
        <!-- Iconos del navbar -->
        <li><a href="controlador/carrito_cop.php"><i class="fas fa-shopping-cart"></i></a></li>  
        <li><a href="vista/login.php"><i class="fas fa-user"></i> </a></li>
    </ul>

    <div class="h-main">
        <a href="vista/producto_cop.php" class="h-btn">Cotizar</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        
    </div>
</header>
<!--header end-->

    <!--Hero section-->
    <section class="hero">
        <div class="hero-text">
            <h1>Eleva tu productividad</h1>
            <h4>Cotiza tu equipo.</h4>
            <p>Descubre un mundo de posibilidades con Hopper, tu tienda de cotizaciones de computadoras.</p>
            <div class="hero-in">
                
                <div class="card">
                    <div class="face front">
                        <img src="vista/img/prefab1-rem.png" alt="">
                        <h3>Turbo 1</h3>
                    </div>
                    <div class="face back">
                        <h3>Turbo 1</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </p>
                        <div class="link">
                            <a href="vista/html_pantalla_de_inf.php">Comprar</a>
                        </div>
                    </div>
                </div>
            
                <div class="card">
                    <div class="face front">
                        <img src="vista/img/prefab2-rem.png" alt="">
                        <h3>Turbo 2</h3>
                    </div>
                    <div class="face back">
                        <h3>Turbo 1</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        </p>
                        <div class="link">
                            <a href="vista/html_pantalla_de_inf.php">Comprar</a>
                        </div>
                    </div>
                </div>
            
                <div class="card">
                    <div class="face front">
                        <img src="vista/img/prefab3-rem.png" alt="">
                        <h3>Turbo 3</h3>
                    </div>
                    <div class="face back">
                        <h3>Turbo 1</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </p>
                        <div class="link">
                            <a href="vista/html_pantalla_de_inf.php">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-container">
            <div class="slider position"></div>
        </div>
        
    </section>
    <div class="loading-page">
        <svg id="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
            <path d="M445.3 224H510C495.6 108.2 403.8 16.4 288 2V66.7C368.4 80.1 431.9 143.6 445.3 224zM510 288H445.3C431.9 368.4 368.4 431.9 288 445.4V510c115.8-14.4 207.6-106.2 222-222zM2 288C16.4 403.8 108.2 495.6 224 510V445.4C143.6 431.9 80.1 368.4 66.7 288H2zm0-64H66.7C80.1 143.6 143.6 80.1 224 66.7V2C108.2 16.4 16.4 108.2 2 224zm206-64c0-17.7-14.3-32-32-32s-32 14.3-32 32V352c0 17.7 14.3 32 32 32s32-14.3 32-32V288h96v64c0 17.7 14.3 32 32 32s32-14.3 32-32V160c0-17.7-14.3-32-32-32s-32 14.3-32 32v64H208V160z"/>
        </svg>


        <div class="name-container">
            <div class="logo-name">Bienvenido!</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"
    integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="controlador/loader.js"></script>

</html>