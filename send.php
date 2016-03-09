<?php
	$destino = "fabianmorar1223@gmail.com";
	$nombre = $_POST["name"];
	$correo = $_POST["email"];
	$mensaje = $_POST["message"];
	$contenido = "Nombre " . $nombre ."\nCorreo: " . $correo . "\nMensaje: " .$mensaje;
	mail($destino, "Mail from website", $contenido);
	header("Location:index.html") 
?>