<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	td{
		width: 30px;
		height: 25px;
	}
</style>
<body>
	<h1>Sopa de letras</h1>
	<h3>Formulario - Palabras</h3>
	<form method="POST" action="sopadeletras.php">
		<label>Palabra 1</label><br>
		<input type="text" name="palabra1"><br>
		<label>Palabra 2</label><br>
		<input type="text" name="palabra2"><br>
		<label>Palabra 3</label><br>
		<input type="text" name="palabra3"><br>
		<label>Palabra 4</label><br>
		<input type="text" name="palabra4"><br>
		<label>Palabra 5</label><br>
		<input type="text" name="palabra5"><br>
		<input type="submit" name="enviar" value="Guardar">
	</form>
	<?php
	$palabra1 = $_POST["palabra1"];
	$palabra2 = $_POST["palabra2"];
	$palabra3 = $_POST["palabra3"];
	$palabra4 = $_POST["palabra4"];
	$palabra5 = $_POST["palabra5"];
	echo $palabra1;
	echo $palabra2;
	echo $palabra3;
	echo $palabra4;
	echo $palabra5;
	echo"<table border='1'>";
		for($w=0;$w<14;$w++){
			echo"<tr>";
			for($i=0;$i<14;$i++){
				echo"<td>";					
				echo"</td>";
			}
			echo"</tr>";
		}
	echo"</table>";		
	?>
</body>
</html>