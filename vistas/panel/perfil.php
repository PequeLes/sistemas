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
                 u.usuario, u.contrasena, u.CI, e.abreviatura as extension
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="wrapper">
<<<<<<< HEAD
    <?php
    include('./navbar.php');  
    ?>
=======
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
                    <a href="./autenticacion.php" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-protection"></i>
                        <span>Autenticación</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="./registroauten/registro.php" class="sidebar-link">Registro</a>
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
                    <a href="./departamento.php" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Depeartamento</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi-one" aria-expanded="false" aria-controls="multi-one">
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
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
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
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi-three" aria-expanded="false" aria-controls="multi-three">
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
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi-four" aria-expanded="false" aria-controls="multi-four">
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
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi-five" aria-expanded="false" aria-controls="multi-five">
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
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi-six" aria-expanded="false" aria-controls="multi-six">
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
>>>>>>> f82e5ae3989d88c2aae4f2c5919c3158910e4459
        <div class="main p-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body" style="border-radius:70%">
                                <h5 class="card-title">Perfil de Usuario</h5>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Nombres:</strong> <?php echo $usuario['nombres']; ?></p>
                                        <p><strong>Apellido Paterno:</strong> <?php echo $usuario['apellido_paterno']; ?></p>
                                        <p><strong>Apellido Materno:</strong> <?php echo $usuario['apellido_materno']; ?></p>
                                        <p><strong>Fecha de Nacimiento:</strong> <?php echo $usuario['fecha_nacimiento']; ?></p>
                                        <p><strong>Carnet Militar:</strong> <?php echo $usuario['carnet_militar']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Cargo:</strong> <?php echo $usuario['cargo']; ?></p>
                                        <p><strong>Departamento:</strong> <?php echo $usuario['departamento']; ?></p>
                                        <p><strong>Usuario:</strong> <?php echo $usuario['usuario']; ?></p>
                                        <p><strong>Contraseña:</strong> <?php echo $usuario['contrasena']; ?></p>
                                        <p><strong>CI:</strong> <?php echo $usuario['CI']; ?></p>
                                        <p><strong>Extensión:</strong> <?php echo $usuario['extension']; ?></p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editarUsuarioModal">
                                    Editar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>


    <div class="modal fade" id="editarUsuarioModal" tabindex="-1" aria-labelledby="editarUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarUsuarioModalLabel">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de edición en dos columnas -->
                <form id="editForm" action="..\..\autenticacion\guardar_edicion.php" method="POST">
                        <input type="hidden" name="id_usuario" value="<?php echo $usuario['id']; ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nombres" class="form-label">Nombres</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $usuario['nombres']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="<?php echo $usuario['apellido_paterno']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="apellido_materno" class="form-label">Apellido Materno</label>
                                    <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="<?php echo $usuario['apellido_materno']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $usuario['fecha_nacimiento']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="carnet_militar" class="form-label">Carnet Militar</label>
                                    <input type="text" class="form-control" id="carnet_militar" name="carnet_militar" value="<?php echo $usuario['carnet_militar']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="cargo" class="form-label">Cargo</label>
                                    <select class="form-select" id="cargo" name="cargo">
    <?php
    // Valor guardado que deseas mantener seleccionado
    $valor_guardado = $fila['id_cargo'];

    // Consulta para obtener los cargos de la base de datos
    include("../../autenticacion/conexion.php");
    $query_cargos = "SELECT * FROM cargo";
    $result_cargos = mysqli_query($conexion, $query_cargos);

    while ($cargo = mysqli_fetch_assoc($result_cargos)) {
        $selected = ($cargo['id'] == $valor_guardado) ? 'selected' : '';
        echo '<option value="' . $cargo['id'] . '" ' . $selected . '>' . $cargo['nombre'] . '</option>';
    }
    ?>
</select>

                                </div>
                                <div class="mb-3">
                                    <label for="departamento" class="form-label">Departamento</label>
                                    <select class="form-select" id="departamento" name="departamento">
    <?php
    // Valor guardado que deseas mantener seleccionado
    $valor_guardado = $fila['id_departamento'];

    // Consulta para obtener los departamentos de la base de datos
    include("../../autenticacion/conexion.php");
    $query_departamentos = "SELECT * FROM departamento";
    $result_departamentos = mysqli_query($conexion, $query_departamentos);

    while ($departamento = mysqli_fetch_assoc($result_departamentos)) {
        $selected = ($departamento['id'] == $valor_guardado) ? 'selected' : '';
        echo '<option value="' . $departamento['id'] . '" ' . $selected . '>' . $departamento['nombre'] . '</option>';
    }
    ?>
</select>

                                </div>
                                <div class="mb-3">
                                    <label for="usuario" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario['usuario']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="contrasena" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="contrasena" name="contrasena" value="<?php echo $usuario['contrasena']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="CI" class="form-label">CI</label>
                                    <input type="text" class="form-control" id="CI" name="CI" value="<?php echo $usuario['CI']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="extension" class="form-label">Extensión</label>
                                    <select class="form-select" id="extension" name="extension">
    <?php
    // Valor guardado que deseas mantener seleccionado
    $valor_guardado = $fila['id_extension'];

    // Consulta para obtener las extensiones de la base de datos
    include("../../autenticacion/conexion.php");
    $query_extensiones = "SELECT * FROM extension";
    $result_extensiones = mysqli_query($conexion, $query_extensiones);

    while ($extension = mysqli_fetch_assoc($result_extensiones)) {
        $selected = ($extension['id'] == $valor_guardado) ? 'selected' : '';
        echo '<option value="' . $extension['id'] . '" ' . $selected . '>' . $extension['abreviatura'] . '</option>';
    }
    ?>
</select>

                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-success">Guardar Cambios</button>
                        <a href="./perfil.php" class="btn btn-warning" role="button">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
       
    <script src="script.js"></script>
</body>