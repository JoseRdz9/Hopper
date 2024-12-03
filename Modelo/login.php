<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurar la conexión a la base de datos
    $host = "localhost";
    $usuario_db = "root";
    $contrasena_db = "";
    $nombre_db = "login";

    // Crear la conexión
    $conexion = new mysqli($host, $usuario_db, $contrasena_db, $nombre_db);

    // Verificar si la conexión fue exitosa
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Obtener datos del formulario
    $accion = $_POST["accion"];
    $usuario = $_POST["usuario"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    // Verificar si es un intento de inicio de sesión o de registro
    if ($accion === "login") {
        // Consulta preparada para verificar el inicio de sesión
        $consulta = $conexion->prepare("SELECT * FROM usuario WHERE usuario = ? AND correo = ? AND contrasena = ?");
        $consulta->bind_param("sss", $usuario, $correo, $contrasena);
        $consulta->execute();

        // Obtener resultados
        $resultado = $consulta->get_result();

        // Verificar si se encontró un usuario con las credenciales proporcionadas
        if ($resultado->num_rows > 0) {
            // Inicio de sesión exitoso
            // Redirigir a la página de producto.php
            header("Location: ../index.php");
            exit();
        } else {
            // Credenciales incorrectas
            echo "Usuario o contraseña incorrectos. Inténtalo de nuevo.";
        }
    } elseif ($accion === "registro") {
        // Consulta preparada para verificar si el correo ya existe
        $consulta_correo_existente = $conexion->prepare("SELECT * FROM usuario WHERE correo = ?");
        $consulta_correo_existente->bind_param("s", $correo);
        $consulta_correo_existente->execute();

        // Obtener resultados
        $resultado_correo_existente = $consulta_correo_existente->get_result();

        // Verificar si el correo ya existe
        if ($resultado_correo_existente->num_rows > 0) {
            // El correo ya está registrado
            echo "El correo ya está registrado. Inténtalo con otro correo.";
        } else {
            // El correo no existe, proceder con el registro
            // Consulta preparada para insertar nuevo usuario
            $consulta_registro = $conexion->prepare("INSERT INTO usuario (usuario, correo, contrasena) VALUES (?, ?, ?)");
            $consulta_registro->bind_param("sss", $usuario, $correo, $contrasena);
            $consulta_registro->execute();

            // Registro exitoso
            echo "Registro exitoso. ¡Bienvenido!";
        }
    }

    // Cerrar la conexión
    // $consulta->close();
    $conexion->close();
}
?>