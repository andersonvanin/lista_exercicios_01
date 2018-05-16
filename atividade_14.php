<?php 
//compara se strings são iguais ou diferentes
	$texto1 = $_GET['palavra1'];
	$texto2 = $_GET['palavra2'];
	
if ($texto1 === $texto2) {
	echo $texto1 . " é igual e semelhante a " . $texto2;
}
else {

	echo $texto1 . " é diferente de " . $texto2;
}

	
?>