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

	$stmt = $mysqli->prepare("SELECT * FROM carro WHERE id = ?");
  $stmt->bind_param("i", $_GET["id"]);
  $stmt->execute();

  $resultado = $stmt->get_result();

	$row = $resultado->fetch_assoc();
?>
<form method="POST" action="diez.php">
	<input type="hidden" name="id" value = "<?php echo $_GET["id"]; ?>">
	<input type="text" name="marca" value = "<?php echo $row["marca"]; ?>">
	<input type="text" name="modelo" value = "<?php echo $row["modelo"]; ?>">
	<input type="text" name="linea" value = "<?php echo $row["linea"]; ?>">
	<input type="submit">
</form>
<?php
  $stmt->close();
 	$mysqli->close();
?>
</body>
</html>