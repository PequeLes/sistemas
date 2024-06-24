<!doctype html>
<html lang="es">

<head>
  <title>Fuerza Aerea - Registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class="img js-fullheight" style="background-image: url(../images/Evening_Sky_Passenger_Airplanes_Asphalt_512661_1280x778.jpg);">
  <section class="ftco-section">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="login-wrap p-0">
            <h3 class="mb-4 text-center"><strong>Registro de Usuario</strong></h3>
            
            <?php
            // Verificar si hay un mensaje para mostrar
            $mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';

            // Mostrar el mensaje si existe
            if (!empty($mensaje)) {
                echo '<div class="alert alert-success">' . htmlspecialchars($mensaje) . '</div>';
            }
            ?>
            
            <form action="../autenticacion/solicitud.php" class="signin-form" method="POST">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <h3 class="h3login"><b>NOMBRES</b> </h3>
                  <input type="text" class="form-control" name="nombres" placeholder="Nombre(s)" required>
                </div>
                <div class="form-row">
                  <h3 class="h3login"> <b>APELLIDOS</b> </h3>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="apellido_paterno" placeholder="Apellido Paterno">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="apellido_materno" placeholder="Apellido Materno">
                  </div>
                </div>

              </div>
              <div class="form-row">
                <h3 class="h3login"><b>CARNTE DE IDENTIDAD - EXTENSIÓN </b></h3>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="CI" placeholder="Carnet de Identidad" required>
                </div>
                <div class="form-group col-md-6">
                  <select class="form-control" name="extension_id" id="extension_id" required>
                    <option value="">Seleccione una extensión</option>
                    <?php
                    // Conexión a la base de datos para obtener las extensiones
                    $conexion = mysqli_connect("localhost", "root", "", "db_fuerza");

                    // Consulta SQL para obtener las extensiones
                    $query = "SELECT id, nombre FROM extension";
                    $result = mysqli_query($conexion, $query);

                    // Verificar si hay resultados
                    if ($result && mysqli_num_rows($result) > 0) {
                        // Llenar el select con las extensiones
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['id'] . '">' . $row['nombre'] . '</option>';
                        }
                    } else {
                        echo '<option value="">No hay extensiones disponibles</option>';
                    }

                    // Cerrar la conexión a la base de datos
                    mysqli_close($conexion);
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <h3 class="h3login"><b>FECHA DE NACIMIENTO - CARNET MILITAR</b> </h3>
                <div class="form-group col-md-6">
                  <input type="date" class="form-control" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="carnet_militar" placeholder="Carnet Militar" required>
                </div>
              </div>

              <div class="form-row">
                <h3 class="h3login"><b>DATOS DE INGRESO</b> </h3>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
                </div>
                <div class="form-group col-md-6">
                  <input id="password-field" type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
              </div>
              <br>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3">Registrarse</button>
              </div>
              <div class="form-group d-md-flex">
                <div class="w-50 text-md-mid">
                  <a href="../index.php" style="color: #fff"><strong>Volver al Ingreso</strong></a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>

</body>

</html>
