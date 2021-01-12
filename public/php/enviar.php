<?php
$destino = "mendieta.sergio.1995@gmail.com";
$nombre = $_POST["nombre"]:
$correo = $_POST["correo"]:
$telefono = $_POST["telefono"]:
$mensaje = $_POST["mensaje"]:
$asunto = $_POST["asunto"]:
$contenido ="Nombre: ". $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
mail($destino, $asunto, $contenido);
header("Location:index.js");
?>