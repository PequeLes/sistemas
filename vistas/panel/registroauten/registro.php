<?php
session_start();
include('../../../autenticacion/conexion.php');

// Obtener el ID del usuario desde la sesión


// Consulta SQL para obtener todos los datos del usuario
$query = "SELECT solicitud.id, solicitud.nombres, s.apellido_paterno, s.apellido_materno, s.fecha_nacimiento, 
                 s.carnet_militar, s.usuario, s.contrasena, s.CI, s.abreviatura as extension
          FROM solicitud s
          LEFT JOIN extension e ON s.id_extension = e.id
          WHERE s.id = $id";
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
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="../index.php" class="nav-link" data-bs-target="#inicio">Inicio</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="../perfil.php" class="sidebar-link nav-link" data-bs-target="#perfil">
                        <i class="lni lni-user"></i>
                        <span>Perfil</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../pendientes.php" class="sidebar-link nav-link">
                        <i class="lni lni-agenda"></i>
                        <span>Pendientes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="../autenticacion.php" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
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
                    <a href="../departamento.php" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="lni lni-layout"></i>
                        <span>Departamento</span>
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
                    <a href="../notificaciones.php" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Notificaciones</span>
                    </a>
                </li>

            </ul>
            <div class="sidebar-footer">
                <a href="../../../index.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Salida</span>
                </a>
            </div>
        </aside>
        <div class="main p-5">
            <div id="inicio" class="text-center content-div">
                <h1>
                    Lista de usuarios de solicitudes enviadas
                </h1>
                <div class="taks">
                    <form class="search-form" method="GET" action="">
                        <input type="text" name="buscar" placeholder="Buscar por nombre..." value="<?php echo isset($_GET['buscar']) ? htmlspecialchars($_GET['buscar']) : ''; ?>">
                        <button class="buttonuno" type="submit">Buscar</button>
                    </form>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <h3>Datos del Solicitante</h3>
                            <th style="text-align: center;">ID</th>
                            <th style="text-align: center;">Nombres </th>
                            <th style="text-align: center;">Apellido Paterno</th>
                            <th style="text-align: center;">Apellido Materno</th>
                            <th style="text-align: center;">Carnet de Identidad</th>
                            <th style="text-align: center;">Carnet Militar</th>
                            <th style="text-align: center;">Aceptar</th>
                            <th style="text-align: center;">Denegar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conexion = mysqli_connect("localhost", "root", "", "db_fuerza");
                        if (!$conexion) {
                            die("Error al conectar con la base de datos: " . mysqli_connect_error());
                        }

                        // Consulta SQL inicial para obtener todos los registros
                        $sql = "SELECT id, nombres, apellido_paterno, apellido_materno, CI, carnet_militar FROM solicitud";

                        // Verificamos si se envió el formulario de búsqueda
                        if (isset($_GET['buscar']) && !empty($_GET['buscar'])) {
                            $busqueda = $_GET['buscar'];

                            // Consulta SQL modificada para buscar por nombre del trabajador
                            $sql_busqueda = "SELECT id, nombres, apellido_paterno, apellido_materno, CI, carnet_militar
                                             FROM solicitud 
                                             WHERE nombres LIKE '%$busqueda%'";
                            $sql = $sql_busqueda;
                        }
                        $resultado = $conexion->query($sql);
                        $resultados = [];

                        // Almacenamos los resultados de la búsqueda en el array $resultados
                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $resultados[] = $row;
                            }
                        } else {
                            echo "<tr><td colspan='8' style='text-align: center;' class='no-results-container'><div class='no-results'>No se encontraron resultados</div></td></tr>";
                        }
                        foreach ($resultados as $row) {
                            echo "<tr>";
                            echo "<td data-label='ID'>" . $row["id"] . "</td>";
                            echo "<td data-label='Nombres'>" . $row["nombres"] . "</td>";
                            echo "<td data-label='Apellido Paterno'>" . $row["apellido_paterno"] . "</td>";
                            echo "<td data-label='Apellido Materno'>" . $row["apellido_materno"] . "</td>";
                            echo "<td data-label='Carnet de Identidad'>" . $row["CI"] . "</td>";
                            echo "<td data-label='Carnet Militar'>" . $row["carnet_militar"] . "</td>";
                        ?>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#aceptarUsuarioModal<?php echo $solicitud['id']; ?>">
                                Aceptar
                            </button>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#aceptarUsuarioModal">
                                    Denegar
                                </button>
                            </td>

                        <?php
                            echo "</tr>";
                        }

                        ?>
                    </tbody>


                </table>
            </div>

        </div>

    </div>
    <div class="modal fade" id="aceptarUsuarioModal" tabindex="-1" aria-labelledby="aceptarUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aceptarUsuarioModalLabel">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de edición en dos columnas -->
                    <form action="guardar_edicion.php" method="POST">
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
                                        // Consulta para obtener las extensiones
                                        include("../../autenticacion/conexion.php");
                                        $result = $conexion->query("SELECT * FROM cargo");

                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                            <option value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                        <?php
                                        }

                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="departamento" class="form-label">Departamento</label>
                                    <select class="form-select" id="departamento" name="departamento">

                                        <?php
                                        // Consulta para obtener las extensiones
                                        include("../../autenticacion/conexion.php");
                                        $result = $conexion->query("SELECT * FROM departamento");

                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                            <option value="<?= $row['id'] ?>"><?= $row['nombre'] ?></option>
                                        <?php
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
                                        // Consulta para obtener las extensiones
                                        include("../../autenticacion/conexion.php");
                                        $result = $conexion->query("SELECT * FROM extension");

                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                            <option value="<?= $row['id'] ?>"><?= $row['abreviatura'] ?></option>
                                        <?php
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script src="../script.js"></script>
</body>