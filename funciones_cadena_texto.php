<?php
$texto = '< > & "" ';
echo htmlspecialchars($texto); //si se pone en negritas podemos inyecta codigo
$mensaje = ' Hola Fernanda';
echo trim($mensaje) .'<br />';
echo strlen($texto) .'<br />';
echo substr($mensaje, 1, 3) .'<br />';
echo strtoupper($mensaje) .'<br />'; #A MAYUSCULAS
echo strtolower($mensaje) .'<br />'; # minusculas
echo strpos($mensaje, 'H');
?>