<?php
$edad = 18;
$edad = (isset($edad)) ? $edad : 'El usuario no estableció su edad';
echo 'Edad: ' . $edad;

$email = 'correo@gmail.com';
$email = (isset($email)) ? $email : 'Necesita añadir email';
echo '<br />El Correo es: ' . $email;
?>