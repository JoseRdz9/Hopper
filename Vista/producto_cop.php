   <?php session_start(); ?>
   <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hopper</title>
        <link rel="stylesheet" type="text/css" href="styles/producto_cop.css">
        <link rel="stylesheet" type="text/css" href="styles/navbar.css">
        <link rel="stylesheet" href="styles/footer.css">
        
    

        <!--box icons link-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <!--google fonts link-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Michroma&family=MuseoModerno:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
            <!-- Iconos del navbar -->
        <head>
            <!-- Estilos de Font Awesome, carrito de compras -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
            <!--  Estilos de Font Awesome, icono usuario  -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        </head>
        
    </head>

    <body>
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
                <li><a href="Login.php"><i class="fas fa-user"></i> </a></li>
            </ul>

            <div class="h-main">
                <a href="Producto_cop.php" class="h-btn">Cotizar</a>
                <div class="bx bx-menu" id="menu-icon"></div>
                
            </div>
        </header>
        <!--header end-->
    <div class="accion">
        <h2>Selecciona un producto por categoria</h2>

    </div>
        <section class="home">

                
            <div class="boton-container">
                
                <!-- PROCESADORES -->
                <button class="boton" data-modal="modal-1">
                    <h2>PROCESADOR</h2>
                    <i class='bx bx-plus-circle'></i>
                    <ul id="selected-list-1" class="list"></ul>
                </button>

                <div id="modal-1" class="modal">
                    <div class="modal-content">
                        <span class="close-btn">&times;</span>
                        <h2>Selecciona un componente</h2>
                        <div class="carousel">
                            <div class="item">
                                <img src="img/CotiSnFondo/inteli9.1.png" data-description="Procesador Intel Core i9-10900, S-1200, 2.80GHz, 10 Core, 20MB, 10th Generation" alt="INTEL CORE I9" class="product-image" data-precio="5679">
                                <p class="product-description">Procesador Intel Core i9-10900</p>
                                <p class="precio">Precio: $5679</p>    
                            </div>
                            
                                                
                            <div class="item">
                                <img src="img/CotiSnFondo/ryzen7.png" data-description="Procesador AMD Ryzen 7 5700G, S-AM4, 3.80GHz, 8-Core, 16MB L3 Caché" alt="RYZEN 7" class="product-image" data-precio="2759">
                                <p class="product-description">Procesador AMD Ryzen 7 5700G</p>
                                <p class="precio">Precio: $2759</p>
                            </div>
                            <div class="item">
                                <img src="img/CotiSnFondo/ryzen9.png" data-description="Procesador AMD Ryzen 9 7950X Radeon Graphics, S-AM5, 4.50GHz, 16-Core, 64MB Cache" alt="RYZEN 9" class="product-image" data-precio="10309">
                                <p class="product-description">Procesador AMD Ryzen 9 7950X</p>
                                <p class="precio">Precio: $10309</p>
                            </div>
                            
                        </div>
                    </div>
                </div>

                
                <!-- TARJETAS MADRE -->
                <button class="boton" data-modal="modal-2">
                    <h2>TARJETA MADRE</h2>
                    <i class='bx bx-plus-circle'></i>
                    <ul id="selected-list-2" class="list"></ul>
                </button>

                <div id="modal-2" class="modal">
                    <div class="modal-content">
                        <span class="close-btn">&times;</span>
                        <h2>Selecciona un componente</h2>
                        <div class="carousel">
                            <div class="item">
                                <img src="img/CotiSnFondo/Tarjeta_Madre.png" data-description="Tarjeta Madre AORUS ATX B560 PRO AX, S-1200, Intel B560, HDMI, 128GB DDR4 para Intel" alt="TARJETA MADRE INTEL" class="product-image" data-precio="4199.00">
                                <p class="product-description">Tarjeta Madre AORUS ATX B560 PRO AX</p>
                                <p class="precio">Precio: $4199</p>
                            </div>                    
                            <div class="item">
                                <img src="img/CotiSnFondo/Tarjeta_Madre_ryzen1.png" data-description="Tarjeta Madre ASUS Micro ATX TUF GAMING A520M-PLUS WIFI, S-AM4, AMD A520, HDMI, 128GB DDR4 para AMD " alt="TARJETA MADRE AMD" class="product-image" data-precio="1659">
                                <p class="product-description">Tarjeta Madre ASUS Micro ATX TUF GAMING</p>
                                <p class="precio">Precio: $1659</p>
                            </div>
                            <div class="item">
                                <img src="img/CotiSnFondo/Tarjeta_Madre_ryzen2.png" data-description="Kit Tarjeta Madre Gigabyte Micro ATX B450M H, S-AM4, AMD B450, HDMI, 32GB DDR4 para AMD + Procesador AMD Ryzen 7Pro 4750G 3.60GHz" alt="TARJETA MADRE AMD"  class="product-image" data-precio="3759">
                                <p class="product-description">Kit Tarjeta Madre Gigabyte Micro ATX B450M H</p>
                                <p class="precio">Precio: $3759</p>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <!-- MEMORIAS RAM -->
                <button class="boton" data-modal="modal-3">
                    <h2>RAM</h2>
                    <i class='bx bx-plus-circle'></i>
                    <ul id="selected-list-3" class="list"></ul>
                </button>

                <div id="modal-3" class="modal">
                    <div class="modal-content">
                        <span class="close-btn">&times;</span>
                        <h2>Selecciona un componente</h2>
                        <div class="carousel">
                            <div class="item">
                                <img src="img/CotiSnFondo/Ram16.png" data-description="Memoria RAM Kingston FURY BEAST DDR4, 3200MHz, 16GB, Non-ECC, CL16, XMP" alt="RAM"  class="product-image" data-precio="639">
                                <p class="product-description">Memoria RAM 16GB</p>
                                <p class="precio">Precio: $639</p>
                            </div>
                                                
                            <div class="item">
                                <img src="img/CotiSnFondo/RAM32.1.png" data-description="Memoria RAM XPG Spectrix D50 Titanio DDR4, 3200MHz, 32GB, Non-ECC, CL16, XMP, Gris" alt="RAM"  class="product-image" data-precio="1179">
                                <p class="product-description">Memoria RAM 32GB</p>
                                <p class="precio">Precio: $1179</p>
                            </div>
                            <div class="item">
                                <img src="img/CotiSnFondo/RAM32.png" data-description="Kit Memoria Ram XPG Spectrix D50 DDR4, 3200MHz, 32GB (2 x 16GB), Non-ECC, CL16, XMP, Blanco" alt="RAM"  class="product-image" data-precio="1390">
                                <p class="product-description">Kit Memoria Ram (2 x 16GB)</p>
                                <p class="precio">Precio: $1390</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- ALMACENAMIENTO -->
                <button class="boton" data-modal="modal-4">
                    <h2>ALMACENAMIENTO</h2>
                    <i class='bx bx-plus-circle'></i>
                    <ul id="selected-list-4" class="list"></ul>
                </button>

                <div id="modal-4" class="modal">
                    <div class="modal-content">
                        <span class="close-btn">&times;</span>
                        <h2>Selecciona un componente</h2>
                        <div class="carousel">
                            <div class="item">
                                <img src="img/CotiSnFondo/SSD1TB.png" data-description="SSD XPG Spectrix S40G, 1TB, PCI Express 3.0, M.2" alt="ALMACENAMIENTO"  class="product-image" data-precio="829">
                                <p class="product-description">SSD XPG Spectrix S40G, 1TB</p> 
                                <p class="precio">Precio: $829</p> 
                            </div>
                                                
                            <div class="item">
                                <img src="img/CotiSnFondo/SSD1TB.1.png" data-description="SSD XPG GAMMIX S70, 1TB, PCI Express 4.0, NVMe, M.2" alt="ALMACENAMIENTO"  class="product-image" data-precio="1269">
                                <p class="product-description">SSD XPG GAMMIX S70, 1TB</p>
                                <p class="precio">Precio: $1269</p>
                            </div>
                            <div class="item">
                                <img src="img/CotiSnFondo/SSD1TB.2.png" data-description="SSD MSI SPATIUM M480 PLAY NVMe, 1TB, PCI Express 4.0, M.2" alt="ALMACENAMIENTO"  class="product-image" data-precio="1709">
                                <p class="product-description">SSD MSI SPATIUM M480 PLAY NVMe, 1TB</p>
                                <p class="precio">Precio: $1709</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- TARJETAS GRAFICAS -->
                <button class="boton" data-modal="modal-5">
                    <h2>TARJETA GRAFICA</h2>
                    <i class='bx bx-plus-circle'></i>
                    <ul id="selected-list-5" class="list"></ul>
                </button>

                <div id="modal-5" class="modal">
                    <div class="modal-content">
                        <span class="close-btn">&times;</span>
                        <h2>Selecciona un componente</h2>
                        <div class="carousel">
                            <div class="item">
                                <img src="img/CotiSnFondo/GPU1.png" data-description="Tarjeta de Video PNY NVIDIA GeForce RTX 4070 Ti 12GB XLR8 Gaming Verto TF OC, 12GB 192-bit GDDR6X, PCI Express 4.0 x16 " alt="TARJETA DE VIDEO"  class="product-image" data-precio="16369">
                                <p class="product-description">Tarjeta de Video PNY NVIDIA GeForce RTX 4070 Ti</p>
                                <p class="precio">Precio: $16369</p>
                            </div>
                                                
                            <div class="item">
                                <img src="img/CotiSnFondo/GPU2.png" data-description="Tarjeta de Video Gigabyte NVIDIA GeForce RTX 4080 16GB GAMING OC, 16GB 256-bit GDDR6X, PCI Express 4.0" alt="TARJETA DE VIDEO"  class="product-image" data-precio="24919">
                                <p class="product-description">Tarjeta de Video Gigabyte NVIDIA GeForce RTX 4080 16GB</p>
                                <p class="precio">Precio: $24919</p>
                            </div>
                            
                            <div class="item">
                                <img src="img/CotiSnFondo/GPU3.png" data-description="Tarjeta de Video ASUS NVIDIA ROG Strix GeForce RTX 4090 OC, 24GB 384-bit GDDR6X, PCI Express 4.0" alt="TARJETA DE VIDEO"  class="product-image" data-precio="38659">
                                <p class="product-description">Tarjeta de Video ASUS NVIDIA ROG Strix GeForce RTX 4090</p>
                                <p class="precio">Precio: $38659</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FUENTES DE PODER -->
                <button class="boton" data-modal="modal-6">
                    <h2>FUENTE DE PODER</h2>
                    <i class='bx bx-plus-circle'></i>
                    <ul id="selected-list-6" class="list"></ul>
                </button>

                <div id="modal-6" class="modal">
                    <div class="modal-content">
                        <span class="close-btn">&times;</span>
                        <h2>Selecciona un componente</h2>
                        <div class="carousel">
                            <div class="item">
                                <img src="img/CotiSnFondo/FUENTE1.png" data-description="Fuente de Poder EVGA 700-K1 80 PLUS Bronze, ATX, 120mm, 700W" alt="FUENTE DE PODER"  class="product-image" data-precio="1349">
                                <p class="product-description">Fuente de Poder EVGA 700-K1</p>
                                <p class="precio">Precio: $1349</p>
                            </div>
                                                
                            <div class="item">
                                <img src="img/CotiSnFondo/FUENTE2.png" data-description="Fuente de Poder Cooler Master MWE GOLD 850 V2 FULL MODULAR 80 PLUS Gold, 24-pines ATX, 120mm, 850W" alt="FUENTE DE PODER"  class="product-image" data-precio="1989">
                                <p class="product-description">Fuente de Poder Cooler Master MWE GOLD 850</p>
                                <p class="precio">Precio: $1989</p>
                            </div>
                            <div class="item">
                                <img src="img/CotiSnFondo/FUENTE3.png" data-description="Fuente de Poder XPG Cybercore 80 PLUS Platinum, 24-pin ATX, 120mm, 1000W" alt="FUENTE DE PODER"  class="product-image" data-precio="2889">
                                <p class="product-description">Fuente de Poder XPG Cybercore 80 PLUS Platinum 1000W</p>
                                <p class="precio">Precio: $2889</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- DISIPADORES -->
                <button class="boton" data-modal="modal-7">
                    <h2>DISIPADOR</h2>
                    <i class='bx bx-plus-circle'></i>
                    <ul id="selected-list-7" class="list"></ul>
                </button>

                <div id="modal-7" class="modal">
                    <div class="modal-content">
                        <span class="close-btn">&times;</span>
                        <h2>Selecciona un componente</h2>
                        <div class="carousel">
                            <div class="item">
                                <img src="img/CotiSnFondo/DISIPADOR1.png" data-description="Aerocool Mirage L120 Enfriamiento Líquido para CPU, 120mm, 600-1800RPM" alt="DISIPADOR"  class="product-image" data-precio="1169">
                                <p class="product-description">Aerocool Mirage L120 Enfriamiento Líquido</p>
                                <p class="precio">Precio: $1169</p>
                            </div>
                                                
                            <div class="item">
                                <img src="img/CotiSnFondo/DISIPADOR2.png" data-description="Game Factor LQG601 Enfriamiento Liquido para CPU, 2x 120mm, 2550RPM, Blanco" alt="DISIPADOR"  class="product-image" data-precio="1269">
                                <p class="product-description">Game Factor LQG601 Enfriamiento Liquido</p>
                                <p class="precio">Precio: $1269</p>
                            </div>
                            <div class="item">
                                <img src="img/CotiSnFondo/DISIPADOR3.png" data-description="AORUS WATERFORCE X 360 Enfriamiento Líquido para CPU, 3x 120mm, 800 - 2300RPM" alt="DISIPADOR"  class="product-image" data-precio="3949">
                                <p class="product-description">AORUS WATERFORCE X 360 Enfriamiento Líquido</p>
                                <p class="precio">Precio: $3949</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- GABINETES -->
                <button class="boton" data-modal="modal-8">
                    <h2>GABINETE</h2>
                    <i class='bx bx-plus-circle'></i>
                    <ul id="selected-list-8" class="list"></ul>
                </button>

                <div id="modal-8" class="modal">
                    <div class="modal-content">
                        <span class="close-btn">&times;</span>
                        <h2>Selecciona un componente</h2>
                        <div class="carousel">
                            <div class="item">
                                <img src="img/CotiSnFondo/GABINETE1.png" data-description="Gabinete Cooler Master MasterBox TD500 Mesh V2 con Ventana Midi-Tower, USB 3.0, sin Fuente, 3 Ventiladores ARGB Instalados, Negro" alt="GABINETE"  class="product-image" data-precio="1689">
                                <p class="product-description">Gabinete Cooler Master MasterBox TD500 Mesh V2</p>
                                <p class="precio">Precio: $1689</p>
                            </div>
                                                
                            <div class="item">
                                <img src="img/CotiSnFondo/GABINETE2.png" data-description="Gabinete Cooler Master MasterBox TD500 Mesh V2 con Ventana Midi-Tower, USB 3.0, sin Fuente, 3 Ventiladores ARGB Instalados, Blanco" alt="GABINETE"  class="product-image" data-precio="1729">
                                <p class="product-description">Gabinete Cooler Master MasterBox TD500 Mesh V2</p>
                                <p class="precio">Precio: $1729</p>
                            </div>
                            <div class="item">
                                <img src="img/CotiSnFondo/GABINETE3.png" data-description="Gabinete NZXT H7 Elite con Ventana RGB, Midi-Tower, Mini-ITX/Micro-ATX/ATX/EATX, USB 3.0, sin Fuente, Negro Mate" alt="GABINETE"  class="product-image" data-precio="3099">
                                <p class="product-description">Gabinete NZXT H7 Elite con Ventana RGB</p>
                                <p class="precio">Precio: $3099</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            
            </div>
        
        </section>

       <!-- RESUMEN DE PRODUCTOS -->

    <div class="resumen-total">
        <h2>Resumen de Productos Seleccionados</h2>
    </div>
    <!-- ------------------------------------------------ -->
     <!-- Ocultar lista de prodcutos seleccionados -->
     
    <button id="mostrar-ocultar-lista" class="mostrar-ocultar-btn">Mostrar/Ocultar Lista</button>
    <!-- ------------------------------------------------- -->
    <div class="product-info"></div>
        
        <div id="resumen-list" class="resumen-list">
            <!-- La lista de productos seleccionados se llenará aquí -->
        </div>
        <div id="precio-total" class="precio-total"></div>
    
        <div class="carrito-resumen" id="carrito-resumen">
            <a href="../controlador/carrito_cop.php" id="carrito-btn" class="agregar-carrito">Agregar al Carrito</a>
        </div>

        
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
        
        <!--js file link-->
        <script src="../controlador/modal_cop.js"></script>
        <script src="../controlador/ocultar_car_cop.js"></script>
        
        
        

    </body>


    </html>
