

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include(db.php)


$nombre=$_POST['txtnombre'];
$documento=$_POST['txtdocumento'];
$clave=$_POST['txtclave'];
$id_rol=$_POST['txtrol'];

$consulta="INSERT INTO `usuarios` (`id`, `nombre`, `documento`, `clave`, `id_rol`)
 VALUES ('$nombre', '$documento', '$clave', '$id_rol');";

$resultado=mysqli_query($conexion,$consulta); or die("error al registrar usuario")

echo"registro exitoso"

mysqli_close($conexion);
?>