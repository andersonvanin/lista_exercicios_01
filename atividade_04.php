<?php 

	$a = $_GET['x'];
	$b = $_GET['y'];
	$c = $_GET['z'];
	$d = $_GET['w'];

	$soma = $a+$c;
	$multiplica = $b*$d;


	if ($soma>$multiplica){
		echo "A + C é maior que B * D";
	}
	else if($soma<$multiplica){
		echo "A + C é menor que B * D";
	}
	else{
		echo "A + C é igual a B * D";
	}

?>