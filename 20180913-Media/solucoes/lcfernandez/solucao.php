<?php

// Criado por lcfernandez, para ser rodado no shell/prompt

// Abertura de stream para o STDIN
if(!defined("STDIN")){
	define("STDIN", fopen('php://stdin','rb'));
}

while (true) {
	// Obtenção do primeiro número
	$a = fgets(STDIN);

	// Obtenção do segundo número
	$b = fgets(STDIN);

	// Verificação para abortar a iteração em caso de um Ctrl+C
	if (empty($a) || empty($b)) {
		break;
	}

	// Soma dos números
	$media = (($a * 3.5) + ($b * 7.5)) / 11.0;

	// Saída dos resultados
	echo "MEDIA = ".round($media, 5)."\n";
}

?>