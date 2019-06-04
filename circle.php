<?php
/*Autor: Krzysztof Druciarek*/
/*Data: 05/06/2019*/

$r = 20; // promień

// wypisywanie
for($i=-$r ; $i<=$r ; $i++){
	for($j=-$r ; $j<=$r ; $j++){
		if($i*$i + $j*$j <= $r*$r){ //warunek na obecność znaku wewnątrz koła
			echo "+";
		}else{
			echo " ";
		}
	}
	echo "\n";
}
?>