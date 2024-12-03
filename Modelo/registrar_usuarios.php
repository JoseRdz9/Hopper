<?php

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "login";

  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

  if ($conn->connect_error) {
    die("No hay conexión: " . $conn->connect_error);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['usuario']) && isset($_POST['correo']) && isset($_POST['contrasena'])) {
      
    // Obtener los datos del formulario
    
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Preparar la consulta para insertar un nuevo usuario
    $sql = "INSERT INTO usuario (usuario, correo, contrasena) VALUES ('$usuario', '$correo', '$contrasena')";

    if (mysqli_query($conn, $sql)) {
        echo '
        <script>
        alert("Registro exitoso");
        location.href = "../login.php"
        </script>
        ';
    } else {
        echo "Error al agregar el usuario: " . mysqli_error($conn);
    }
  }
?>
