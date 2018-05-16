<?php 
//conta intervalo
	$num_inicial = $_GET['inicio'];
	$num_final = $_GET['fim'];
	
	for($i=$num_inicial;$i<=$num_final;$i++){

		echo $i." - ";
	}

?>