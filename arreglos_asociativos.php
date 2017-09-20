<?php
$alex = array('telefono' => '553412353','edad' => 25, 'apellido' => 'Ramirez', 'pais' =>'mexico');
echo $alex['telefono'] . '<br />';
echo $alex['edad'] . '<br />';
echo $alex['apellido'] . '<br />';
echo $alex['pais'] . '<br />';

$alex['telefono'] ='112313';
echo 'El telefono de Alex es: ' . $alex['telefono'];
?>