<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ingreso</title>
</head>

<body>
<?php
include_once("conexion.php");

$email = $_POST['email'];
$password = $_POST['password'];

$peticion = "SELECT * FROM galeria WHERE email='$email' AND password='$password'";
$otro = mysqli_query($conexion, $peticion);

//if($registro = mysqli_fetch_array(otro))

while($fila = mysqli_fetch_array($otro))
{
	
	$email = $fila['email'];
    $password = $fila['password'];
	
	$_SESSION['correoUsuario']= $email;
	
	if($email == $emailBasedatos && $password == $passwordBasedatos){
		echo "Bienvenido";
	}else{
		echo "Lo sentimos, aún no te has registrado";
		}
	}
	
/*$genero = $_POST['genero'];
$protagonista = $_POST['protagonista'];


if ($email == "" || $password == ""){
	echo "Los campos son obligatorios"."<br/>";
}else if($email== "megr827@hotmail.com" && $password==123456 && $genero=="ciencia ficcion" && $protagonista=="bradley cooper"){
	header ("Location: imagenes.php?poster=1");
	}else if($email== "megr827@hotmail.com" && $password==123456 && $genero=="ciencia ficcion" && $protagonista=="taissa farmiga"){
	header ("Location: imagenes.php?poster=2");
	}else if($email== "megr827@hotmail.com" && $password==123456 && $genero=="ciencia ficcion" && $protagonista=="bruce willis"){
	header ("Location: imagenes.php?poster=3");
	}else if($email== "megr827@hotmail.com" && $password==123456 && $genero=="ciencia ficcion" && $protagonista=="justin timberlake"){
	header ("Location: imagenes.php?poster=4");
	}else if($email== "megr827@hotmail.com" && $password==123456 && $genero=="ciencia ficcion" && $protagonista=="shailene woodley"){
	header ("Location: imagenes.php?poster=5");
	}else if($email== "megr827@hotmail.com" && $password==123456 && $genero=="ciencia ficcion" && $protagonista=="brad pitt"){
	header ("Location: imagenes.php?poster=6");
	}else if($email== "megr827@hotmail.com" && $password==123456 && $genero=="ciencia ficcion" && $protagonista=="tom cruise"){
	header ("Location: imagenes.php?poster=7");
	}else if($email== "megr827@hotmail.com" && $password==123456 && $genero=="ciencia ficcion" && $protagonista=="ethan hawke"){
	header ("Location: imagenes.php?poster=8");
	}else if($email== "megr827@hotmail.com" && $password==123456 && $genero=="ciencia ficcion" && $protagonista=="jennifer lawrence"){
	header ("Location: imagenes.php?poster=9");
	}else if($email== "megr827@hotmail.com" && $password==123456 && $genero=="ciencia ficcion" && $protagonista=="dylan o'brien"){
	header ("Location: imagenes.php?poster=10");
	}*/
	
?>
</body>
</html>