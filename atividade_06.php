<?php 

	$n1 = $_GET['a'];
	$n2 = $_GET['b'];
	$n3 = $_GET['c'];
	$n4 = $_GET['d'];
	
	$media = (($n1+$n2+$n3+$n4)/4);


	if ($media>=7){
		echo "Aprovado com média $media";
	}
	else {
		echo "Reprovado com média $media";
	}

?>