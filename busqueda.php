<?php

$sugerencia = '';

$datosrecibidos = $_POST['datos'];

$sugerencias = array(
	'ana', 
	'ani',
	'antonio',
	'aanybal', 
	'Beto',
	'suarez',
	'putina',
	'zorraberta'
);

if (strlen($datosrecibidos)>0) {
	for ($i=0; $i < count($sugerencias); $i++) { 
		if (strtolower($datosrecibidos)==strtolower(substr($sugerencias[$i], 0,strlen($datosrecibidos)))) {
			if ($sugerencia == '') {
				$sugerencia = $sugerencias[$i];
			}else{
				$sugerencia = $sugerencia.' , '.$sugerencias[$i];
			}
		}
	}
}

//Si no hay sugerencias, hay que decir eso
if ($sugerencia == '') {
	$sugerencia = 'No hay sugerencias :(';
}

//mandar la sugerencia
echo $sugerencia;

?>	