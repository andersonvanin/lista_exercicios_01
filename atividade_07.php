<?php 

	$sexo = $_GET['s'];
	$altura = $_GET['h'];
	
	
	if ($sexo==m){

		$peso_ideal = ((72.7*$altura)-58);
		echo "O peso ideal para um homem de $altura metros é $peso_ideal";
	}
	else {
		$peso_ideal = ((62.1*$altura)-44.7);
		echo "O peso ideal para uma mulher de $altura metros é $peso_ideal";
	}

?>