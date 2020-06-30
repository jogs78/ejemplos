<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	$mysqli = new mysqli("192.168.56.107", "homestead", "secret", "pruebas");

	/* comprobar la conexión */
	if ($mysqli->connect_errno) {
	    printf("Falló la conexión: %s\n", $mysqli->connect_error);
	    exit();
	}

	$stmt = $mysqli->prepare("UPDATE carro SET marca = ? , modelo = ?, linea = ? WHERE id = ?");
  $stmt->bind_param("sisi", $_POST["marca"],$_POST["modelo"],$_POST["linea"],$_POST["id"]);
  $stmt->execute();

	printf("%d Fila actualizada.\n", $stmt->affected_rows);

  $stmt->close();




	/* Consultas de selección que devuelven un conjunto de resultados */
	if ($resultado = $mysqli->query("SELECT * FROM carro")) {
	    printf("La selección devolvió %d filas.\n", $resultado->num_rows);
?>
<table border = 1>
   <tr>
     <th>Marca</th>
     <th>Modelo</th>
     <th>Linea</th>
     <tr></tr>
   </tr>
   <?php while ($row = $resultado->fetch_assoc()) { ?>
   <tr>
			<td><?php echo $row["marca"]; ?></td>
			<td><?php echo $row["modelo"]; ?></td>
			<td><?php echo $row["linea"];?></td>
			<td><a href="ocho.php?id=<?php echo $row["id"];?>"</a>  BORRAR</td>
   </tr>
   <?php } ?>
</table>


<?php
	    /* liberar el conjunto de resultados */
	    $resultado->close();
	}
	$mysqli->close();
?>
<br>
<form method="POST" action="siete.php">
	<input type="text" name="marca">
	<input type="text" name="modelo">
	<input type="text" name="linea">
	<input type="submit">
</form>
</body>
</html>