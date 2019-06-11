<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	session_start();
	session_unset();
	session_destroy();
	echo "<h1>Cliente</h1>";
	echo "<h3>Formulario Cliente</h3>";
?>
	<form action="cliente.php" method="POST">
		<label>Nombre:</label></br>
		<input type="text" name="nombre"></br>
		<label>Apellido:</label></br>
		<input type="text" name="apellido"></br>
		<input type="submit" name="enviar" value="enviar"></br>
	</form>
<?php

 /*
	$nombreCliente = $_POST["nombre"];
	$apellidoCliente = $_POST["apellido"];
	if(isset($_POST["enviar"]))
	{
		if(empty($nombreCliente) && empty($apellidoCliente))
		{
			echo "Campos vacio";
		}else
		{
			$_SESSION["nombre"] = $_POST["nombre"];
			$_SESSION["apellido"] = $_POST["apellido"];
			echo "Ha sido introducido correctamente";
		}
	}
*/
?>
</body>
</html>
