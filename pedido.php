<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pedido</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	echo "<h1>Pedidos comprados</h1>";
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
	echo "<p>Serán enviados a ".$_SESSION["nombre"]."</p>";
echo "<a href='home.php'>Volver a Home</a>";
?>
</body>
</html>