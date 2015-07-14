<?php

include_once("conexion.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$ciudad = $_POST['ciudad'];


if ($nombre == "" || $email == "" || $password == "" || $password2 == "" || $ciudad =="" || $password != $password2){
	echo "No se ha podido registrar correctamente, verifique los datos"."<br/>";
}else{
	
$datos = "INSERT INTO galeria( nombre, email, password, password2, ciudad)
VALUES('$nombre','$email','$password','$password2','$ciudad')";

mysqli_query($conexion,$datos);
echo "Datos insertados con exito"."<br/>";
echo "Nombre: $nombre"."<br/>";
echo "Correo: $email"."<br/>";
echo "Ciudad: $ciudad"."<br/>";
echo "<a href='index.html'>Ingresar</a>";
}
?>

