<?php
require "mios/Carro.php";
require "otros/Carro.php";

use biblioteca\Carro;
use biblioteca2\Carro as Carro2;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$c = new Carro();
		$c->arrancar();
		echo "<hr>";
		$d = new Carro2();
		$d->arrancar();
	?>
</body>
</html>