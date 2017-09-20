<?php
  $numeros = array(1,2,3.9,10,3,20,100,23);
  sort($numeros)
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Meses del Año</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Meses del año</h1>
	<ul>
		<?php
		foreach ($numeros as $numero) {
			echo '<li>' . $numero . '</li>';
		}
		?>
	</ul>
</body>
</html>