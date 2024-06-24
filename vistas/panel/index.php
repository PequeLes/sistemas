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
                
                    <div class="row justify-content-center">
                       
                            
                                
                                    <h5 class="card-title">Listado de Usuarios</h5>
                                   
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nombres</th>
                                                    <th scope="col">Apellido Paterno</th>
                                                    <th scope="col">Apellido Materno</th>
                                                    <th scope="col">Fecha de Nacimiento</th>
                                                    <th scope="col">Carnet Militar</th>
                                                    <th scope="col">Cargo</th>
                                                    <th scope="col">Departamento</th>
                                                    <th scope="col">Usuario</th>
                                                    <th scope="col">Contraseña</th>
                                                    <th scope="col">CI</th>
                                                    <th scope="col">Rol</th>
                                                    <th scope="col">Acción</th> <!-- Nueva columna para acciones -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                            include('../../autenticacion/conexion.php');

// Realiza la consulta para obtener todos los usuarios y sus atributos
$query = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $query);

// Verifica si hay resultados
if (mysqli_num_rows($resultado) > 0) {}

$con=0;
                                                while ($fila = mysqli_fetch_array($resultado)) {
                                                    $con =$con+1;
                                                    echo "<tr>";
                                                    echo "<th scope='row'>" . $con . "</th>";
                                                    echo "<td>" . $fila['nombres'] . "</td>";
                                                    echo "<td>" . $fila['apellido_paterno'] . "</td>";
                                                    echo "<td>" . $fila['apellido_materno'] . "</td>";
                                                    echo "<td>" . $fila['fecha_nacimiento'] . "</td>";
                                                    echo "<td>" . $fila['carnet_militar'] . "</td>";
                                                    
                                                    // Para mostrar el nombre del cargo, departamento y extensión
                                                    $cargo_id = $fila['id_cargo'];
                                                    $departamento_id = $fila['id_departamento'];
                                                    $rol_id = $fila['rol_id'];
                                                    
                                                    // Obtener el nombre del cargo
                                                    $cargo_query = "SELECT nombre FROM cargo WHERE id = '$cargo_id'";
                                                    $cargo_resultado = mysqli_query($conexion, $cargo_query);
                                                    if ($cargo_row = mysqli_fetch_assoc($cargo_resultado)) {
                                                        $cargo_nombre = $cargo_row['nombre'];
                                                    } else {
                                                        $cargo_nombre = "Sin asignar";
                                                    }
                                                    
                                                    // Obtener el nombre del departamento
                                                    $departamento_query = "SELECT nombre FROM departamento WHERE id = '$departamento_id'";
                                                    $departamento_resultado = mysqli_query($conexion, $departamento_query);
                                                    if ($departamento_row = mysqli_fetch_assoc($departamento_resultado)) {
                                                        $departamento_nombre = $departamento_row['nombre'];
                                                    } else {
                                                        $departamento_nombre = "Sin asignar";
                                                    }
                                                    
                                                    // Obtener el nombre de la extensión
                                                    $extension_query = "SELECT nombre FROM rol WHERE id = '$rol_id'";
                                                    $extension_resultado = mysqli_query($conexion, $extension_query);
                                                    if ($extension_row = mysqli_fetch_assoc($extension_resultado)) {
                                                        $extension_nombre = $extension_row['nombre'];
                                                    } else {
                                                        $extension_nombre = "Sin asignar";
                                                    }
                                                    
                                                    echo "<td>" . $cargo_nombre . "</td>";
                                                    echo "<td>" . $departamento_nombre . "</td>";
                                                    echo "<td>" . $fila['usuario'] . "</td>";
                                                    echo "<td>" . $fila['contrasena'] . "</td>";
                                                    echo "<td>" . $fila['CI'] . "</td>";
                                                    echo "<td>" . $extension_nombre . "</td>";
                                                    
                                                    // Columna de acciones (editar y estado)
                                                    echo "<td>";
                                                    echo "<button type='button' class='btn btn-warning btn-sm' onclick='editarUsuario(" . $fila['id'] . ")'><i class='lni lni-pencil'></i> </button>";
                                                    echo "<button type='button' class='btn btn-danger btn-sm' onclick='cambiarEstado(" . $fila['id'] . ")'><i class='lni lni-checkmark-circle'></i></button>";
                                                    echo "</td>";
                                                    
                                                    echo "</tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                
                            
                        
                    </div>
                </div>
            </div>
        
        
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz1y5M9AR8Ebbj6xL9B3TZB9jjc1a5F1D0/tAANdJcXU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
       
    <script src="script.js"></script>
</body>