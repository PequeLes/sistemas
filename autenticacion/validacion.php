
<?php
include('conexion.php');
$usuario=$_POST['usuario'];
$password=$_POST['contrasena'];



$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$password'";
$result = mysqli_query($conexion, $query);

$filas=mysqli_num_rows($result);

if($filas){
  
    header("Location: /sistemas/autenticacion/entro.php");

}else{
  session_start();
        $_SESSION['error_autenticacion'] = "Usuario o contraseña incorrectos.";
        header("Location: ./504/index.html");
        exit();
}
mysqli_free_result($result);
mysqli_close($conexion);
