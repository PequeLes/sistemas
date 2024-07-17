<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="wrapper">
    <?php
    include('./navbar.php');  
    ?>
        
                <div class="main p-5">
                
                    <div class="row justify-content-center">
                       
                            
                                
                                    <h4 class="card-title">Listado de Usuarios</h4>
                                   <br>
                                   <br>
                                   <div class="d-flex justify-content-end mb-3">
                                   <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNuevo">
            Nuevo
        </button>
    </div>

                                    <div class="table-responsive">
                                        <table id="tablaUsuarios" class="table table-striped table-hover">
                                            <thead>
                                                <tr   id="fila_<?php
                                                 include('../../autenticacion/conexion.php');
                                                echo $fila['id']; ?>">
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nombres</th>
                                                    <th scope="col">Apellido Paterno</th>
                                                    <th scope="col">Apellido Materno</th>
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
                                               if ($fila['estado'] == 1){
                                                    $con =$con+1;
                                                    echo "<tr>";
                                                    echo "<th scope='row'>" . $con . "</th>";
                                                    echo "<td>" . $fila['nombres'] . "</td>";
                                                    echo "<td>" . $fila['apellido_paterno'] . "</td>";
                                                    echo "<td>" . $fila['apellido_materno'] . "</td>";
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
                                                
                                                   echo "<button type='button' class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#modalEditarUsuario" . $fila['id'] . "'><i class='lni lni-pencil'></i></button>";

                                                   echo "<button type='button' class='btn btn-danger btn-sm' onclick='cambiarEstado(\"" . $fila['id'] . "\")'><i class='lni lni-trash-can'></i></button>";

                                                    
                                                    echo "</tr>";
                                                }
                                                echo "<div class='modal fade' id='modalEditarUsuario" . $fila['id'] . "' tabindex='-1' aria-labelledby='modalEditarUsuarioLabel" . $fila['id'] . "' aria-hidden='true'>";
                                               
                                               ?>
                                                   <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarUsuarioLabel<?php echo $fila['id']; ?>">Editar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="..\..\autenticacion\guardar_cambios_usuario.php" method="POST">
                    <input type="hidden" name="usuario_id" value="<?php echo $fila['id']; ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombres" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo htmlspecialchars($fila['nombres']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" value="<?php echo htmlspecialchars($fila['apellido_paterno']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" value="<?php echo htmlspecialchars($fila['apellido_materno']); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo $fila['fecha_nacimiento']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="carnetMilitar" class="form-label">Carnet Militar</label>
                                <input type="text" class="form-control" id="carnetMilitar" name="carnetMilitar" value="<?php echo htmlspecialchars($fila['carnet_militar']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="idCargo" class="form-label">Cargo</label>
                                <select class="form-select" id="id_cargo" name="id_cargo" required>
    <option value="">Seleccionar...</option>
    <?php
    // Valor guardado que deseas mantener seleccionado
    $valor_guardado = $fila['id_cargo'];

    // Consulta para obtener las opciones del select
    include("../../autenticacion/conexion.php");
    $result = $conexion->query("SELECT * FROM cargo");

    while ($row = mysqli_fetch_array($result)) {
        $selected = ($row['id'] == $valor_guardado) ? 'selected' : '';
        ?>
        <option value="<?= $row['id'] ?>" <?= $selected ?>><?= $row['nombre'] ?></option>
        <?php
    }
    ?>
</select> </div>
                                </div>
                                <div class="col-md-6">
                            <div class="mb-3">
                                <label for="idDepartamento" class="form-label">Departamento</label>
                                <select class="form-select" id="id_departamento" name="id_departamento" required>
    <option value="">Seleccionar...</option>
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
                                <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo htmlspecialchars($fila['usuario']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena" value="<?php echo htmlspecialchars($fila['contrasena']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="rolId" class="form-label">Rol</label>
                                <select class="form-select" id="rol_id" name="rol_id" required>
    <option value="">Seleccionar...</option>
    <?php
    // Valor guardado que deseas mantener seleccionado
    $valor_guardado = $fila['rol_id'];

    // Consulta para obtener los roles de la base de datos
    include("../../autenticacion/conexion.php");
    $query_rol  = "SELECT * FROM rol";
    $result_rol = mysqli_query($conexion, $query_rol);

    while ($rol = mysqli_fetch_assoc($result_rol)) {
        $selected = ($rol['id'] == $valor_guardado) ? 'selected' : '';
        echo '<option value="' . $rol['id'] . '" ' . $selected . '>' . $rol['nombre'] . '</option>';
    }
    ?>
</select>
 </div>
                           
                            <div class="mb-3">
                                <label for="CI" class="form-label">CI</label>
                                <input type="text" class="form-control" id="CI" name="CI" value="<?php echo htmlspecialchars($fila['CI']); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="idExtension" class="form-label">Extensión</label>
                                <select class="form-select" id="id_extension" name="id_extension">
    <option value="">Seleccionar...</option>
    <?php
    // Valor guardado que deseas mantener seleccionado
    $valor_guardado = $fila['id_extension'];

    // Consulta para obtener las extensiones de la base de datos
    include("../../autenticacion/conexion.php");
    $query_extensiones = "SELECT * FROM extension";
    $result_extensiones = mysqli_query($conexion, $query_extensiones);

    while ($extension = mysqli_fetch_assoc($result_extensiones)) {
        $selected = ($extension['id'] == $valor_guardado) ? 'selected' : '';
        echo '<option value="' . $extension['id'] . '" ' . $selected . '>' . $extension['nombre'] . '</option>';
    }
    ?>
</select>
</div>
                        </div>
                    </div>
                    <!-- Otros campos según necesites -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                                                </div>
                                                <?php
                                                } // Fin del bucle while
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                
                            
                        
                    </div>
                
        
        
          <!-- Modal para agregar nuevo usuario -->
<!-- Modal para agregar nuevo usuario -->
<div class="modal fade" id="modalNuevo" tabindex="-1" aria-labelledby="modalNuevoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="..\..\autenticacion\guardar_usuario.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNuevoLabel">Nuevo Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Primera columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombres" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" required>
                            </div>
                            <div class="mb-3">
                                <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno">
                            </div>
                            <div class="mb-3">
                                <label for="apellido_materno" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" id="apellido_materno" name="apellido_materno">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                            </div>
                            <div class="mb-3">
                                <label for="carnet_militar" class="form-label">Carnet Militar</label>
                                <input type="text" class="form-control" id="carnet_militar" name="carnet_militar">
                            </div>
                            <div class="mb-3">
                                <label for="id_rol" class="form-label">Rol</label>
                                <select class="form-select" id="rol_id" name="rol_id" required>
                                    <option value="">Seleccionar...</option>
                                    <?php
                                    // Consulta para obtener los cargos de la base de datos
                                    $query_rol  = "SELECT * FROM rol";
                                    $result_rol = mysqli_query($conexion, $query_rol);
                                    while ($rol = mysqli_fetch_assoc($result_rol)) {
                                        echo '<option value="' . $rol['id'] . '">' . $rol['nombre'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <!-- Segunda columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="id_cargo" class="form-label">Cargo</label>
                                <select class="form-select" id="id_cargo" name="id_cargo" required>
                                    <option value="">Seleccionar...</option>
                                    <?php
                                    // Consulta para obtener los cargos de la base de datos
                                    $query_cargos = "SELECT * FROM cargo";
                                    $result_cargos = mysqli_query($conexion, $query_cargos);
                                    while ($cargo = mysqli_fetch_assoc($result_cargos)) {
                                        echo '<option value="' . $cargo['id'] . '">' . $cargo['nombre'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="id_departamento" class="form-label">Departamento</label>
                                <select class="form-select" id="id_departamento" name="id_departamento" required>
                                    <option value="">Seleccionar...</option>
                                    <?php
                                    // Consulta para obtener los departamentos de la base de datos
                                    $query_departamentos = "SELECT * FROM departamento";
                                    $result_departamentos = mysqli_query($conexion, $query_departamentos);
                                    while ($departamento = mysqli_fetch_assoc($result_departamentos)) {
                                        echo '<option value="' . $departamento['id'] . '">' . $departamento['nombre'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" required>
                            </div>
                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                            </div>
                            <div class="mb-3">
                                <label for="CI" class="form-label">CI</label>
                                <input type="text" class="form-control" id="CI" name="CI">
                            </div>
                            <div class="mb-3">
                                <label for="id_extension" class="form-label">Extensión</label>
                                <select class="form-select" id="id_extension" name="id_extension">
                                    <option value="">Seleccionar...</option>
                                    <?php
                                    // Consulta para obtener las extensiones de la base de datos
                                    $query_extensiones = "SELECT * FROM extension";
                                    $result_extensiones = mysqli_query($conexion, $query_extensiones);
                                    while ($extension = mysqli_fetch_assoc($result_extensiones)) {
                                        echo '<option value="' . $extension['id'] . '">' . $extension['nombre'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
       

       
      

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
       

    <script src="script.js"></script>
    <script>
        function cambiarEstado(id) {
  // Hacer una solicitud AJAX para cambiar el estado del usuario en el servidor
  fetch('../../autenticacion/cambiar_estado.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({ id: id })
  })
  .then(response => response.json())
  .then(data => {
      if (data.success) {
          // Si la solicitud tuvo éxito, recargar la página o actualizar la tabla
          location.reload();
      } else {
          // Manejar el error
          alert('No se pudo cambiar el estado del usuario.');
      }
  })
  .catch(error => console.error('Error:', error));
}

    </script>
</body>