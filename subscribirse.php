<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
	<body>
	<?php
	$nombre=$_POST['nombresubs'];
	$apellidos=$_POST['apellidossubs'];
	$DNI=$_POST['dnisubs'];
	$nacimiento=$_POST['nacisubs'];
	$telefono=$POST['telefonosubs'];
	$email=$_POST['emailsubs'];
	$direccion=$_POST['direccionsubs'];
	$CP=$_POST['cpsubs'];
	$poblacion=$_POST['poblacionsubs'];
	$licencia=$_POST['numerosubs'];
	
	echo "Hola ". $nombre." ". $apellidos. " hemos recibido tus datos y nos pondremos en contacto contigo lo antes posible. Gracias.";

	$destinatario = "info@rcnucia.com";
	$asunto = "Nuevo socio";
	$cuerpo = "Nombre: ".$nombre."\n";
	$cuerpo.= "Apellidos: ".$apellidos."\n";
	$cuerpo.= "DNI: ".$DNI."\n";
	$cuerpo.= "F. nacimiento: ".$nacimiento."\n";
	$cuerpo.= "Teléfono: ".$telefono."\n";
	$cuerpo.= "Email: ".$email."\n";
	$cuerpo.= "Dirección: ".$direccion."\n";
	$cuerpo.= "C.P.: ".$CP."\n";
	$cuerpo.= "Población: ".$poblacion."\n";
	$cuerpo.= "Licencia: ".$licencia."\n";
	$headers = "FromName: $nombre";
	$headers = "From: $email";

	mail($destinatario, $asunto, $cuerpo, $headers);
?>
		<br/><br/><a href="contacto.html"><input id="boton_volver"  type="button" value="Volver"></a>
	</body>
</html>
