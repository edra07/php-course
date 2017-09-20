<?php
  $meses = array(
	'Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio',
	'Agosto','Septiembre','Octubre','Noviembre','Diciembre'
  );
  sort($meses); #sirve para ordenar alfabeticamente
  #rsort($meses); ordena al reves
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
		foreach ($meses as $mes) {
			echo '<li>' . $mes . '</li>';
		}
		?>
	</ul>
</body>
</html>