<!DOCTYPE html>
<html>
<head>
	<title>Cliente</title>
	<meta charset="utf-8">
</head>
<body>
<?php
session_start();
if(isset($_SESSION["nombre"]) == false)
{
	$_SESSION["nombre"] = $_POST["nombre"];
}
if(isset($_SESSION["apellido"]) == false)
{
	$_SESSION["apellido"] = $_POST["apellido"];
}
	echo "<h1>Lista de la compra</h1>";
	echo "<h3>Formulario Compra</h3>";

	echo "<p>Bienvenido ".$_SESSION["nombre"]." ".$_SESSION["apellido"]."</p>";
	echo "<p>Realice su pedido:</p>";
	echo "<h4>Productos:</h4>";
?>
	<form action="cliente.php" method="POST">
		<label>Manzana</label><br>
		<input type="number" name="nmanzanas"><br>
		<label>Peras</label><br>
		<input type="number" name="nperas"><br>
		<label>Tomate</label><br>
		<input type="number" name="ntomate"><br>
		<label>Pepino</label><br>
		<input type="number" name="npepino"><br>
		<label>Coliflor</label><br>
		<input type="number" name="ncoliflor"><br>
		<input type="submit" name="enviar" value="comprar">
	</form>
<?php


echo "<p>Su pedido ".$_SESSION["nombre"]."</p>";
if(isset($_SESSION["manzana"]) == false)
{
	$_SESSION["manzana"] = $_POST["nmanzanas"];
}else{
	$_SESSION["manzana"] = $_SESSION["manzana"]+$_POST["nmanzanas"];
}
if(isset($_SESSION["pera"]) == false)
{
	$_SESSION["pera"] = $_POST["nperas"];
}else{
	$_SESSION["pera"] = $_SESSION["pera"]+$_POST["nperas"];
}
if(isset($_SESSION["tomate"]) == false)
{
	$_SESSION["tomate"] = $_POST["ntomate"];
}else{
	$_SESSION["tomate"] = $_SESSION["tomate"]+$_POST["ntomate"];
}
if(isset($_SESSION["pepino"]) == false)
{
	$_SESSION["pepino"] = $_POST["npepino"];
}else{
	$_SESSION["pepino"] = $_SESSION["pepino"]+$_POST["npepino"];
}
if(isset($_SESSION["coliflor"]) == false)
{
	$_SESSION["coliflor"] = $_POST["ncoliflor"];
}else{
	$_SESSION["coliflor"] = $_SESSION["coliflor"]+$_POST["ncoliflor"];
}
	echo "<table border='1'>";
		echo "<tr>";
			echo "<td>Manzana</td>";
			echo "<td>Pera</td>";
			echo "<td>Tomate</td>";
			echo "<td>Pepino</td>";
			echo "<td>Coliflor</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>".$_SESSION["manzana"]."</td>";
			echo "<td>".$_SESSION["pera"]."</td>";;
			echo "<td>".$_SESSION["tomate"]."</td>";
			echo "<td>".$_SESSION["pepino"]."</td>";
			echo "<td>".$_SESSION["coliflor"]."</td>";
		echo "</tr>";
	echo "</table>";
	echo "<form action='pedido.php'>";
	echo "<input type='submit' value='Finalizar' name='enviar'>";
	echo "</form>";
echo "<a href='home.php'>Volver a Home</a>";

?>
</body>
</html>