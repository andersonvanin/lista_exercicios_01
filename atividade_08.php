<?php 

	$salario = $_GET['sal'];
	
	
	if ($salario>300){

		$salario_novo = $salario*1.3;
		echo "O novo salario é de: R$ ". number_format($salario_novo,2,',','.');
	}
	else if ($salario<=300){
		$salario_novo = $salario*1.5;
		echo "O novo salario é de: R$ ". number_format($salario_novo,2,',','.');
	}

?>