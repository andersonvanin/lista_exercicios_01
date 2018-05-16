<?php
	$palavra = $_GET['texto'];
	$letra = $_GET['letra'];

	$tamanho = strlen($palavra);
	$achei = 0;

	for ($i=0; $i <= $tamanho ; $i++) { 
		
		if ( (substr($palavra, $i,1)) === $letra) {
		$achei += 1;
		}

	}

	echo "Foram encontradas $achei letras iguais";

?>