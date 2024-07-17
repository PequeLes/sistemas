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
                            <th style="text-align: center;">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Conexión a la base de datos
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
                                             WHERE nombres LIKE '%$busqueda%' OR CI LIKE '%$busqueda%' OR carnet_militar LIKE '%$busqueda%'";
                            $sql = $sql_busqueda;
                        }

                        // Ejecutar consulta
                        $resultado = $conexion->query($sql);

                        // Mostrar resultados en la tabla
                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["nombres"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["apellido_paterno"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["apellido_materno"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["CI"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["carnet_militar"]) . "</td>";
                                echo "<td>";
                                echo "<form method='get' action='registro.php'>";
                                echo "<input type='hidden' name='id' value='" . htmlspecialchars($row["id"]) . "' />";
                                echo "<button type='button' class='btn btn-primary edit-btn' data-bs-toggle='modal' data-bs-target='#modalDetalleUsuario'>Aceptar</button>";

                                echo "</form>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7' style='text-align: center;'>No se encontraron resultados</td></tr>";
                        }

                        // Cerrar conexión a la base de datos
                        $conexion->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalDetalleUsuario" tabindex="-1" aria-labelledby="modalDetalleUsuarioLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDetalleUsuarioLabel">Detalle del Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    // Conexión a la base de datos
                    $conexion = mysqli_connect("localhost", "root", "", "db_fuerza");
                    if (!$conexion) {
                        die("Error al conectar con la base de datos: " . mysqli_connect_error());
                    }

                    // Verificar si se ha enviado un ID de usuario para cargar los detalles
                    if (isset($_GET['id']) && !empty($_GET['id'])) {
                        $id = $_GET['id'];

                        // Consulta SQL para obtener los detalles del usuario según el ID
                        $sql = "SELECT * FROM solicitud WHERE id = $id";

                        $resultado = $conexion->query($sql);

                        // Verificar si se encontraron resultados
                        if ($resultado->num_rows > 0) {
                            $row = $resultado->fetch_assoc();

                            // Mostrar los detalles del usuario en el modal
                            echo "<div class='user-details'>";
                            echo "<p><strong>Nombres: </strong>" . htmlspecialchars($row['nombres']) . "</p>";
                            echo "<p><strong>Apellidos: </strong>" . htmlspecialchars($row['apellido_paterno']) . " " . htmlspecialchars($row['apellido_materno']) . "</p>";
                            echo "<p><strong>Carnet de Identidad: </strong>" . htmlspecialchars($row['CI']) . "</p>";
                            echo "<p><strong>Carnet Militar: </strong>" . htmlspecialchars($row['carnet_militar']) . "</p>";
                            echo "<p><strong>Fecha de Nacimiento: </strong>" . htmlspecialchars($row['fecha_nacimiento']) . "</p>";
                            // Agrega más detalles según sea necesario
                            echo "</div>";


                            // Puedes agregar más campos según tus necesidades
                        } else {
                            echo "No se encontraron detalles para el usuario seleccionado.";
                        }
                    } else {
                        echo "No se ha especificado ningún usuario para mostrar.";
                    }

                    // Cerrar la conexión a la base de datos
                    $conexion->close();
                    ?>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script src="../script.js"></script>
</body>