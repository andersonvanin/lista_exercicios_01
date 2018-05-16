<?php 
// fatorial de um numero
	$numero = $_GET['num'];
	$fat = 1;

	for($i=$numero;$i>1;$i--){

		$fat *= $numero;
	
	}

	echo "O fatorial de $numero é $fat";

?>