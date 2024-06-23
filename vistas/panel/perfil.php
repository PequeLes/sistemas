<?php
session_start(); // Iniciar la sesión para acceder a $_SESSION

// Verificar si el usuario está autenticado (sesión iniciada)
if (!isset($_SESSION['id_usuario'])) {
    // Si no hay sesión iniciada, redirigir al inicio de sesión
    header("Location: /sistemas/index.php");
    exit();
}

// Incluir el archivo de conexión a la base de datos
include('../../autenticacion/conexion.php');

// Obtener el ID del usuario desde la sesión
$id_usuario = $_SESSION['id_usuario'];

// Consulta SQL para obtener todos los datos del usuario
$query = "SELECT u.id, u.nombres, u.apellido_paterno, u.apellido_materno, u.fecha_nacimiento, 
                 u.carnet_militar, c.nombre as cargo, d.nombre as departamento, 
                 u.usuario, u.contrasena, u.CI, e.nombre as extension
          FROM usuarios u
          LEFT JOIN cargo c ON u.id_cargo = c.id
          LEFT JOIN departamento d ON u.id_departamento = d.id
          LEFT JOIN extension e ON u.id_extension = e.id
          WHERE u.id = $id_usuario";
$result = mysqli_query($conexion, $query);

// Verificar si se encontró el usuario
if ($result && mysqli_num_rows($result) > 0) {
    $usuario = mysqli_fetch_assoc($result);
    // Aquí puedes acceder a todos los datos del usuario
 
    // Puedes acceder a más campos según tu estructura de base de datos
} else {
    // Manejo de error si no se encontró el usuario
    echo "Error: No se encontró el usuario.";
}

// Liberar el resultado y cerrar la conexión
mysqli_free_result($result);
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="./index.php" class="nav-link" data-bs-target="#inicio">Inicio</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="./perfil.php" class="sidebar-link nav-link" data-bs-target="#perfil">
                        <i class="lni lni-user"></i>
                        <span>Perfil</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="./pendientes.php" class="sidebar-link nav-link">
                        <i class="lni lni-agenda"></i>
                        <span>Pendientes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="./autenticacion.php" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-protection"></i>
                        <span>Autenticación</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Registro</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Rol</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Permiso</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="./departamento.php" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Depeartamento</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                               data-bs-target="#multi-one" aria-expanded="false" aria-controls="multi-one">
                                Dpto. l Personal
                            </a>
                            <ul id="multi-one" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                               data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Dpto ll Inteligencia
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                               data-bs-target="#multi-three" aria-expanded="false" aria-controls="multi-three">
                                Dpto lll Operaciones
                            </a>
                            <ul id="multi-three" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                               data-bs-target="#multi-four" aria-expanded="false" aria-controls="multi-four">
                                Dpto lV Logistica
                            </a>
                            <ul id="multi-four" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                               data-bs-target="#multi-five" aria-expanded="false" aria-controls="multi-five">
                                Dpto V Educaciones
                            </a>
                            <ul id="multi-five" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                               data-bs-target="#multi-six" aria-expanded="false" aria-controls="multi-six">
                                Dpto VI Ciencia y Tecnologia
                            </a>
                            <ul id="multi-six" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    
                </li>
                <li class="sidebar-item">
                    <a href="./notificaciones.php" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Notificaciones</span>
                    </a>
                </li>
               
            </ul>
            <div class="sidebar-footer">
                <a href="../../index.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Salida</span>
                </a>
            </div>
        </aside>
        <div class="main p-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Perfil de Usuario</h5>
                                
            <p><strong>Nombres:</strong> <?php echo $usuario['nombres']; ?></p>
            <p><strong>Apellido Paterno:</strong> <?php echo $usuario['apellido_paterno']; ?></p>
            <p><strong>Apellido Materno:</strong> <?php echo $usuario['apellido_materno']; ?></p>
            <p><strong>Fecha de Nacimiento:</strong> <?php echo $usuario['fecha_nacimiento']; ?></p>
            <p><strong>Carnet Militar:</strong> <?php echo $usuario['carnet_militar']; ?></p>
            <p><strong>Cargo:</strong> <?php echo $usuario['cargo']; ?></p>
            <p><strong>Departamento:</strong> <?php echo $usuario['departamento']; ?></p>
            <p><strong>Usuario:</strong> <?php echo $usuario['usuario']; ?></p>
            <p><strong>Contraseña:</strong> <?php echo $usuario['contrasena']; ?></p>
            <p><strong>CI:</strong> <?php echo $usuario['CI']; ?></p>
            <p><strong>Extensión:</strong> <?php echo $usuario['extension']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
       
    <script src="script.js"></script>
</body>