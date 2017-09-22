<?php
 //variables que están afuera de una funcion pasarlas como parametro
//Las funciones no pueden acceder a variables que estén fuera de la función, en caso de necesitarlo se pasan como parametro
$numero = 7;
function mostrarNumero($numero){
	echo $numero;
}
 mostrarNumero($numero);
 //Si queremos acceder a un valor de una función escribe return como lo siguiente:
 function mostrarNombre(){
 	$nombre = 'Edin';
 	return $nombre;
 }
 echo mostrarNombre();
?>