<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos (ajusta los valores según tu configuración)
    include('conexion.php');

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        die("Error al conectar con la base de datos: " . mysqli_connect_error());
    }

    // Obtener los datos del formulario
    $nombres = mysqli_real_escape_string($conexion, $_POST['nombres']);
    $apellido_paterno = mysqli_real_escape_string($conexion, $_POST['apellido_paterno']);
    $apellido_materno = mysqli_real_escape_string($conexion, $_POST['apellido_materno']);
    $CI = mysqli_real_escape_string($conexion, $_POST['CI']);
    $extension_id = mysqli_real_escape_string($conexion, $_POST['extension_id']);
    $fecha_nacimiento = mysqli_real_escape_string($conexion, $_POST['fecha_nacimiento']);
    $carnet_militar = mysqli_real_escape_string($conexion, $_POST['carnet_militar']);
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT); // Encriptar la contraseña

    // Consulta SQL para insertar los datos en la tabla solicitud
    $query = "INSERT INTO solicitud (nombres, apellido_paterno, apellido_materno, CI, extension_id, fecha_nacimiento, carnet_militar, usuario, contrasena) 
          VALUES ('$nombres', '$apellido_paterno', '$apellido_materno', '$CI', '$extension_id', '$fecha_nacimiento', '$carnet_militar', '$usuario', '$contrasena')";

    if (mysqli_query($conexion, $query)) {
        // Éxito en la inserción, preparar mensaje
        $mensaje = "¡Registro exitoso! Gracias por registrarte, espera hacer aceptado.";
    } else {
        // Error en la inserción
        $mensaje = "Error al registrar. Inténtalo nuevamente.";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);

    // Redirigir a la página de registro con el mensaje
    header("Location: /sistemas/vistas/registro.php?mensaje=" . urlencode($mensaje));
    exit();
} else {
    // Si el método de solicitud no es POST, redirigir a la página de registro
    header("Location: /sistemas/vistas/registro.php");
    exit();
}
