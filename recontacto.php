<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>

	<body>
		<header>
			<img id="logo" src="Imágenes/logotipoblanco.jpg">
		</header>
		<section id="recontacto">
	<?php
	

	$usuario = $_POST['nombre'];
	$remitente = $_POST['mail'];
	$telefono = $_POST['telefono'];
	$coment = $_POST['comentarios'];
	
	if (($telefono>800000000 and $telefono<=900000000) or $telefono>999999999){
		echo "teléfono no válido";
	}
	else
	{
	echo "Formulario enviado correctamente ".$usuario." gracias por ponerte en contacto con nosotros, en breve contactaremos contigo en el teléfono: ".$telefono;
	$cuerpo ="Nombre: ". $usuario. "\n";
	$cuerpo.="Correo: ". $remitente. "\n";
	$cuerpo.="Teléfono: ". $telefono. "\n";
	$cuerpo.=$coment. "\n";
	$headers ="FromName: $usuario";
	$headers ="From: $remitente";

	mail("info@rcnucia.com", "Formulario recibido", $cuerpo, $headers);
	}
	?>

		<br/><br/><a href="contacto.html"><input id="boton_volver"  type="button" value="Volver"></a>
		<br/><br/>
		</section>
	<footer>
			<div id="pieizquierda">
				e-mail:<a href="mailto:info@rcnucia.com?subject=Información">info@rcnucia.com</a><br/>
				&copy Club RC La Nucía<br/>
				<a href="aviso.html">Aviso legal</a><br/>
			</div>
			<div id="piecentro">
				Club RC La Nucía<br/>
				Pda. La Muixara<br/>
				<a href="https://www.ciudaddeportivacamilocano.com" target="_blank">Ciudad Deportiva Camilo Cano</a><br/>
				03530 La Nucía (Alicante)<br/>
			</div>
			<div id="piederecha">
				Webmaster:<a href="mailto:ramontrujillo@rcnucia.com">ramontrujillo@rcnucia.com</a>
			</div>
		</footer>
	</body>
</html>