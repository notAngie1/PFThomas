<?php

$nombre= $_POST["fullname"];
$mail= $_POST["email"];
$mensaje= $_POST["textarea"];

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su correo electronico es: " . $mail . ",\r\n";
$mensaje .= "Mensaje: " . $_POST["textarea"] . ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time())

$destinatario = "angeles_thomas@outlook.es";
$asunto = "este mail fue enviado desde la web"

mail($destinatario, $asunto, utf8_decode($mensaje), $header);

header("Location:contacto.html")


?>

