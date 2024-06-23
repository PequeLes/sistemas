<?php
// Incluir el archivo de conexión
include('conexion.php');

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$password = $_POST['contrasena'];

// Consulta SQL para verificar las credenciales del usuario
$query = "SELECT id, usuario, contrasena FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$password'";
$result = mysqli_query($conexion, $query);

// Verificar si se encontró un usuario con esas credenciales
if ($result && mysqli_num_rows($result) > 0) {
    // Obtener el ID del usuario
    $fila = mysqli_fetch_assoc($result);
    $id_usuario = $fila['id'];

    // Iniciar sesión si aún no está iniciada
    session_start();

    // Almacenar el ID del usuario en la sesión
    $_SESSION['id_usuario'] = $id_usuario;

    // Redirigir al panel de control o página principal
    header("Location: /sistemas/vistas/panel/index.php");
    exit();
} else {
    // Si las credenciales son incorrectas, redirigir a página de error
    session_start();
    $_SESSION['error_autenticacion'] = "Usuario o contraseña incorrectos.";
    header("Location: ./504/index.html");
    exit();
}

// Liberar el resultado y cerrar la conexión
mysqli_free_result($result);
mysqli_close($conexion);

