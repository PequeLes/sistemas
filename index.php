<!doctype html>
<html lang="es">
<head>
    <title>Fuerza Aerea</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="img js-fullheight" style="background-image: url(images/Evening_Sky_Passenger_Airplanes_Asphalt_512661_1280x778.jpg);">

<section class="ftco-section">

    <div class="container">
	<div class="row justify-content-center">

<img style="height: 50%; width: 17%; margin: 0;" src="./images/FuerzaAéreaFAB.png" alt="fuerza aerea">

</div>
        <div class="row justify-content-center">

            <div class="col-md-8 col-lg-6">

                <div class="login-wrap p-0">

                    <h3 class="mb-4 text-center"> <strong> Ingreso de Usuario </strong></h3>
                    <form action="/sistemas/autenticacion/validacion.php" method="POST" class="signin-form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Ingresar</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Recordarme
                                    <input type="checkbox" name="recordar" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="vistas\registro.php" style="color: #fff"><strong>Registrate</strong></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
