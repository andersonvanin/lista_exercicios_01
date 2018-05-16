<?php 
//string 1
	$texto = $_GET['palavra'];
	$total_caracter = strlen($texto);

	echo "Total de caracteres = $total_caracter"."<br>";
	for($i=1;$i<=$total_caracter;$i++){

		echo $i ." - ";

	}

	
?>