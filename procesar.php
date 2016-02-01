<?php
	
	$n = $_REQUEST['nombre'];
	$e = $_REQUEST['correo'];
	$a = $_REQUEST['asunto'];
	$m = $_REQUEST['mensaje'];

	$cabecera = "From: $n <$e>";

	//echo "Nombre: $n <br>";
	//echo "Email: $e <br>";
	//echo "Asunto: $a <br>";
	//echo "Mensaje: $m <br>";

	if (mail("ventas@youcardonline.com", $a, $m, $cabecera)) {
		# code...
		echo "Mensaje enviado correctamente.";
	}
	else
	{
		echo "Mensaje no se ha enviado, ocurrio un error.";
	}


?>