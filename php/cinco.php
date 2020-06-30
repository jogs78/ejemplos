<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Saludo</title>
</head>
<body>

<?php
//	echo "en " . date_default_timezone_get() . "son " .  date('H:i');	
	date_default_timezone_set('America/Mexico_City');
//	echo " <br> y en " . date_default_timezone_get() . " son " .  date('H:i');

	$hora = date('H');
	$minutos = date('i');

	if ($hora<12)
		echo "Buenos dias";
	elseif($hora<18)
		echo "Buenas tardes";
	else
		echo "Buenas noches";
?>
<hr>
Cual es la diferencia entre usar comillas y apostrofes
<?php
echo 'hola ';
echo "que tal";
echo '1 ';
echo "2";
$a = 10;
$b = 20;
$c = $a + $b;
echo $c;
echo '$c';
echo "$c";
?>

</body>
</html>