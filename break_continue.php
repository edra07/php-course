<?php

$paises = array ('Mexico','Argenitina','Paraguay','Inglaterra','Venezuela');
/*foreach ($paises as $pais) {
	echo $pais . '<br />';
	if ($pais == 'Inglaterra') {
		break;
	}
}*/

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Document</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Paises del Mundo</h1>
	<?php
	foreach ($paises as $pais) {
		if ($pais == 'Paraguay') {
			continue;
		}
		echo $pais . '<br />';
	}
	?>
</body>
</html>