<?php

	$meses = array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
	for($i = 0; $i < count($meses); $i++){
	#echo $meses[$i] . '<br />';
	}
	/*
	$contador = 0;
	while($contador < count($meses)){
	echo $meses[$contador] . '<br />';
	$contador++;
	} */
	//Arreglo asociativo
	$Persona = array('telefono' => 552342452, 'edad' => 20, 'pais'=> 'mexico'); #Arreglo asociativo
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Meses</h1>
	<ul>
		<?php
		#foreach ($meses as $mes) {
		#echo '<li>' . $mes . '</li>';
		#}

		foreach ($Persona as $dato => $valor) { #recorrer el areglo Juan y por cada dato me va a traer su valor en una variable temporal
		echo '<li>' . $dato . ': ' .$valor . '</li>';
		}
		?>
	</ul>
</body>
</html>