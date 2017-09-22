<?php
  $amigos = array('telefono' => 12324312, 'edad' => 23, 'pais' => 'Canadá');
  extract($amigos);
  echo $telefono;

  $semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
  //$ultimo_dia = array_pop($semana);  //Toma el ultimo valor
  //foreach ($semana as $dia) {
  //	echo $ultimo_dia . '<br />';
  //}
  echo join('<br />', $semana); //Separar cada elemento
  echo count($semana) . '<br />';
  sort($semana) . '<br />'; //Orden alfabetico
  $semana_reverse = array_reverse($semana);//separa los arreglos e invierte los valores
  echo join(' ,', $semana_reverse). '<br />';
  echo join (' - ', $semana). '<br />'; //Mostrar todos los elementos y añadir elementos
?>