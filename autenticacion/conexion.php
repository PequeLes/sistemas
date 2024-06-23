<?php
// Datos de conexión a la base de datos
$host = 'localhost'; // Cambiar por el nombre del servidor si es necesario
$username = 'root'; // Cambiar por el nombre de usuario de la base de datos
$password = ''; // Cambiar por la contraseña de la base de datos
$dbname = 'db_fuerza'; // Cambiar por el nombre de tu base de datos

$conexion = mysqli_connect($host, $username, $password, $dbname);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Si llegamos aquí, la conexión fue exitosa


