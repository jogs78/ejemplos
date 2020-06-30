<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php
//var_dump ($_GET);
//var_dump ($_POST);


	if($_POST["edad"]>18){
?>
<div class="alert alert-success" role="alert">
  Si puedes votar
</div>
<?php
	}else{
?>
<div class="alert alert-danger" role="alert">
  No puedes votar
</div>
<?php
	}
?>
	<form method = "post" action="cuatro.php">
		Edad: <input type="text" name="edad" value="<?= $_POST["edad"]?>">
		<input type="submit" value="enviar">
	</form>
</body>
</html>
