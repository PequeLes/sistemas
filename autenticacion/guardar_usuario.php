<?php
// Verifica si se han recibido los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Incluir archivo de conexión a la base de datos
    include('./conexion.php');

    // Obtener los datos del formulario
    $nombres = $_POST['nombres'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $carnet_militar = $_POST['carnet_militar'];
    $rol_id = $_POST['rol_id'];
    $id_cargo = $_POST['id_cargo'];
    $id_departamento = $_POST['id_departamento'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $CI = $_POST['CI'];
    $id_extension = $_POST['id_extension']; // Asegúrate de tener este campo en tu formulario
   
    // Consulta SQL para insertar un nuevo usuario
    $query = "INSERT INTO usuarios (nombres, apellido_paterno, apellido_materno, fecha_nacimiento, carnet_militar, rol_id, id_cargo, id_departamento, usuario, contrasena, CI, id_extension, estado) 
              VALUES ('$nombres', '$apellido_paterno', '$apellido_materno', '$fecha_nacimiento', '$carnet_militar', '$rol_id', '$id_cargo', '$id_departamento', '$usuario', '$contrasena', '$CI', '$id_extension', 1)";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $query)) {
        // Si la inserción fue exitosa, redirigir al listado de usuarios
        header("Location: /sistemas/vistas/panel/index.php");
        exit();
    } else {
        // Si hubo un error en la inserción, mostrar mensaje de error
        echo "Error al intentar guardar el usuario: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    // Si no se recibieron los datos por POST, redirigir a alguna página de error o manejar la situación según necesites
    echo "no se registro";
    exit();
}

