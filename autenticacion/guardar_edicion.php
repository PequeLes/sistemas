<?php
// Conexión a la base de datos
include("./conexion.php");


// Recoger datos del formulario
$id_usuario = $_POST['id_usuario'];
$nombres = $_POST['nombres'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$carnet_militar = $_POST['carnet_militar'];
$cargo = $_POST['cargo'];
$departamento = $_POST['departamento'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$CI = $_POST['CI'];
$extension = $_POST['extension'];

// Validar los datos si es necesario
// ...

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
    id_extension='$extension' 
    WHERE id='$id_usuario'";

if ($conexion->query($sql) === TRUE) {
    // Redirigir al perfil con un mensaje de éxito
    header("Location: /sistemas/vistas/panel/perfil.php?mensaje=actualizado");
} else {
    echo "Error al actualizar el registro: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
