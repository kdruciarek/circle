<?php
/*Autor: Krzysztof Druciarek*/
/*Data: 03/06/2019*/

$r = 10; // promień

for($i=-$r ; $i<=$r ; $i++){
	for($j=-$r ; $j<=$r ; $j++){
		if($i*$i + $j*$j <= $r*$r) echo "+";
		else echo " ";
	}
	echo "\n";
}
?>
