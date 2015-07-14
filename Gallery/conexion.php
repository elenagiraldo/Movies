<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Conexión</title>
</head>

<body>
<?php
$conexion = new mysqli("localhost", "maria", "1234567", "datosgaleria");
if (!$conexion) {
    die("No se ha conectado correctamente".mysqli_error());
}
?>
</body>
</html>