<?php 

	$x = $_GET['a'];

	if ($x>0){
		echo "Valor Positivo";
	}
	else if($x==0){
		echo "Igual a zero";
	}
	else{
		echo "Valor negativo";
	}

?>