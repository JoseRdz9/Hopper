<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CotiEx</title>
    <link rel="stylesheet" type="text/css" href="../vista/styles/crud.css">
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
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        <a href="../vista/producto_cop.php" class="h-btn">Cotizar</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        
    </div>
</header>
<!--header end-->
    <h2>Administración de usuarios</h2>
    <!-- Botón para agregar usuario --> 
   

    <!-- Tabla de usuarios -->
    <table id="usuariosTable" border="1">
        <thead>
            <tr>
                <th>id_usuario</th>
                <th>usuario</th>
                <th>correo</th>
                <th>contrasena</th>
                <th>opciones</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <!-- Formulario de Edición de Usuario -->
    <div id="modalEditar" style="display:none;">
        <h3>Editar Usuario</h3>
        <form id="mostrarEditarUsuario">
            <!-- Campos de edición: id_usuario, usuario, contrasena -->
            id_usuario: <span id="editId_usuario"></span><br>
            usuario: <input type="text" id="editUsuario"><br>
            correo: <input type="text" id="editCorreo"><br>
            contrasena: <input type="text" id="editContrasena"><br>
            <button type="button" onclick="guardarEdicion()">Guardar</button>
            <button type="button" onclick="cancelarEdicion()">Cancelar</button>
        </form>
    </div>
    <button class="button" type="button" onclick="mostrarAgregarUsuario()">Agregar Usuario</button>

    <!-- Modal para agregar usuario -->
    <div id="modalAgregar" style="display:none;">
        <h3>Agregar Usuario</h3>
        <form id="mostrarAgregarUsuario">
            <!-- Campos de agregar: usuario, correo, contrasena,-->
            usuario: <input type="text" id="agregarUsuario"><br>
            correo: <input type="text" id="agregarCorreo"><br>
            contrasena: <input type="text" id="agregarContrasena"><br>
            <button type="button" onclick="guardarAgregarUsuario()">Guardar</button>
            <button type="button" onclick="cancelarAgregarUsuario()">Cancelar</button>
        </form>
    </div>

    <script>
        $(document).ready(function(){
            // Cargar la lista de usuarios al cargar la página
            cargarUsuarios();
        });

        function cargarUsuarios() {
            $.ajax({
                url:'cargar_usuarios.php',
                type:'Get',
                success:function(response) {
                    $('#usuariosTable tbody').html(response);
                }
            });
        }

        function mostrarEditarUsuario(id_usuario, usuario, correo, contrasena) {
            // Llenar los campos del formulario de edición
            document.getElementById('editId_usuario').innerText = id_usuario;
            document.getElementById('editUsuario').value = usuario;
            document.getElementById('editCorreo').value = correo;
            document.getElementById('editContrasena').value = contrasena;

            // Mostrar la ventana modal de edición
            document.getElementById('modalEditar').style.display ='block';  
        }

        function guardarEdicion() {
            // Obtener los datos del formulario de edición
            var id_usuario = document.getElementById('editId_usuario').innerText;
            var usuario = document.getElementById('editUsuario').value;
            var correo = document.getElementById('editCorreo').value;
            var contrasena = document.getElementById('editContrasena').value;

            // Enviar los datos editados al servidor usando AJAX
            $.ajax({
                type: 'POST',
                url: 'guardaredicion.php',
                data:{
                    id_usuario,
                    usuario,
                    correo,
                    contrasena
                    
                },
                success: function(response) {
                    alert('Usuario editado correctamente');
                    document.getElementById('modalEditar').style.display = 'none';
                    // Actualizar la lista de usuarios después de la edición
                    cargarUsuarios();
                }
            }); 
        }

        function eliminarUsuario(id_usuario) {
            if (confirm("¿Estás seguro de que deseas eliminar este usuario?")) {
                // Enviar la solicitud para eliminar el usuario al servidor usando AJAX
                $.ajax({
                    type: 'POST',
                    url: 'eliminar_usuarios.php',
                    data: {
                        id_usuario: id_usuario
                    },
                    success: function (response) {
                        alert(response);
                        // Actualizar la lista de usuarios después de la eliminación
                        cargarUsuarios();
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                        alert("Error al intentar eliminar el usuario.");
                    }
                });
                
            }
            
        }

        function mostrarAgregarUsuario() {
            // Limpiar los campos del formulario de agregar usuario
            
            document.getElementById('agregarUsuario').value = '';
            document.getElementById('agregarCorreo').value = '';
            document.getElementById('agregarContrasena').value = '';

            // Mostrar la ventana modal de agregar
            document.getElementById('modalAgregar').style.display = 'block';
        }

        function guardarAgregarUsuario() {
            // Obtener los datos del formulario de agregar usuario
            var usuario = document.getElementById('agregarUsuario').value;
            var correo = document.getElementById('agregarCorreo').value;
            var contrasena = document.getElementById('agregarContrasena').value;
            

            // Enviar los datos del nuevo usuario al servidor usando AJAX
            $.ajax({
                type: 'POST',
                url: 'registrar_usuarios.php',
                data: {
                    usuario,
                    correo,
                    contrasena
                   
                },
                success: function(response) {
                    alert('Usuario agregado correctamente');
                    document.getElementById('modalAgregar').style.display = 'none';
                    // Actualizar la lista de usuarios después de la adición
                    cargarUsuarios();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert("Error al agregar el usuario.");
                }
            });
        }

        function cancelarEdicion() {
        // Ocultar la ventana modal de edición
        document.getElementById('modalEditar').style.display = 'none';
    }

        function cancelarAgregarUsuario() {
        // Ocultar la ventana modal de agregar
        document.getElementById('modalAgregar').style.display = 'none';
    }
    </script>
</body>
</html>
