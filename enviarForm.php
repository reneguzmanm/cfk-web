<?php
$nombre = $_POST['first_name'];
$apellido = $_POST['last_name'];
$email = $_POST['EMAIL'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$destinatario = 'rene.guzman@usach.cl';

$carta = 'De: '.$nombre.' ' ;
$carta .= ' '.$apellido." \n";
$carta .= 'Correo: '.$email." \n";
$carta .= 'Mensaje: '.$mensaje;

mail($destinatario, $asunto, $carta);
//header('Location:contacto.html')
?>