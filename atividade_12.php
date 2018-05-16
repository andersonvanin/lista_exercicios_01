<?php 
//multiplica com soma
	$numero = $_GET['num'];
	$fator = $_GET['mult'];

	$resultado = 0;
	for($i=1;$i<=$fator;$i++){

		$resultado += $numero;

		echo "$numero + ";

	}

	echo " = ".$resultado;
?>