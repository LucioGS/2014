<html>
<head>
</head>
<body>
<?php
	$nombre = $_POST["nombre"];
	$apellidos = $_POST["apellidos"];
	$dni = $_POST["dni"];
	$ciudad = $_POST["ciudad"];
	$datos = [];
	$datos[] = $nombre;
	$datos[] = $apellidos;
	$datos[] = $dni;
	$datos[] = $ciudad;
	foreach ($datos as $valor) {
		echo $valor;
		echo "</br>";
	}
?>
</body>
</html>

