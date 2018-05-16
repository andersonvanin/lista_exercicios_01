<?php 

	$a = $_GET['x'];
	$b = $_GET['y'];
	
	if ($a>$b){
		echo "$b , $a";
	}
	else if($a<$b){
		echo "$a , $b";
	}
	else{
		echo "Valores Iguais ==> $a e $b";
	}

?>