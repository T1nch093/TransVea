<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$recorrido = $_POST['recorrido'];
$mensaje = $_POST['descripcion'];

$header .= "Content-type= text/plain";
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
//Como llega el cuerpo del mail.
$mensaje .= "Nombre" . $nombre . "\r\n";
$mensaje .= "Email" . $email . "\r\n";
$mensaje .= "Telefono" . $telefono . "\r\n";
$mensaje .= "Recorrido" . $recorrido . "\r\n";
$mensaje .= "Descripcion" . $mensaje . "\r\n";
$mensaje .= "Enviado el " . date["d/m/y". time()];


$para = "martinservetti@gmail.com"; //mail donde llega el fomulario
$asunto = "Pedido de cotizacion"; //Asunto del mail

//la funcion mail envia un correo electronico y el orden es:
// A quien se lo envia - El titulo del correo - El mensaje - Header para añadir.
mail($para, $asunto, utf8_decode($mensaje), $header);

// Redireccion al haber enviado el form
header('Location:index.html');
?>