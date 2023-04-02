<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo 
$destinatario = "mathiastanta059@gmail.com";
$header ="Enviado desde la pagina de edesseperu";

$carta = "De: $nombre \n";
$carta .= "Apellidos: $apellido\n";
$carta .= "Email: $email\n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje

mail($destinatario, $asunto, $carta);
 echo "<script>alert('correo enviado existosamente')</script>";
 echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>