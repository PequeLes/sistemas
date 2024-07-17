<?php
// Verificar si se recibieron los datos esperados
if (isset($_POST['usuario_id'], $_POST['nombres'], $_POST['apellidoPaterno'], $_POST['apellidoMaterno'],
    $_POST['fechaNacimiento'], $_POST['carnetMilitar'], $_POST['id_cargo'], $_POST['id_departamento'],
    $_POST['usuario'], $_POST['contrasena'], $_POST['CI'], $_POST['id_extension'], $_POST['rol_id'])) {
    
    // Recoger datos del formulario
    $id_usuario = $_POST['usuario_id'];
    $nombres = $_POST['nombres'];
    $apellido_paterno = $_POST['apellidoPaterno'];
    $apellido_materno = $_POST['apellidoMaterno'];
    $fecha_nacimiento = $_POST['fechaNacimiento'];
    $carnet_militar = $_POST['carnetMilitar'];
    $cargo = $_POST['id_cargo'];
    $departamento = $_POST['id_departamento'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $CI = $_POST['CI'];
    $extension = $_POST['id_extension'];
    $rol_id = $_POST['rol_id'];

    // Procesar los datos aquí
    // Por ejemplo, actualizar la base de datos
    include("./conexion.php");

    // Actualizar los datos en la base de datos
    $sql = "UPDATE usuarios SET 
        nombres='$nombres', 
        apellido_paterno='$apellido_paterno', 
        apellido_materno='$apellido_materno', 
        fecha_nacimiento='$fecha_nacimiento', 
        carnet_militar='$carnet_militar', 
        id_cargo='$cargo', 
        id_departamento='$departamento', 
        usuario='$usuario', 
        contrasena='$contrasena', 
        CI='$CI', 
        id_extension='$extension',
        rol_id='$rol_id' ,
        estado= 1
        WHERE id='$id_usuario'";

    if ($conexion->query($sql) === TRUE) {
        // Redirigir al perfil con un mensaje de éxito
        header("Location: /sistemas/vistas/panel/index.php?mensaje=actualizado");
    } else {
        echo "Error al actualizar el registro: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();

} else {
    echo "No se recibieron todos los datos esperados.";
}
