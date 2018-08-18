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
	$x = $a + $b;

	// Saída dos resultados
	echo "X = ".$x."\n";
}

?>