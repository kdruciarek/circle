<?php
/*Autor: Krzysztof Druciarek*/
/*Data: 05/06/2019*/

$r = 20; // promień
$n = 0;
// tworzenie tablic first i last, aby znaleźć pierwszą i ostatnią pozycję znaku do wyświetlenia
for($i=-$r ; $i<=0 ; $i++){
	$x = true;
	$m = $n;
	for($j=-$r ; $j<=0 ; $j++){
		if($i*$i + $j*$j <= $r*$r){ //warunek na obecność znaku wewnątrz koła
			if($x){
				$x = false;
				$n = $j;
				$first[$i] = $j;
				$last[$i] = $j;
			}else if(!$x && ($j < $m)){
				$last[$i]=max($last[$i], $j);
			}
		}
	}
}

// wypisywanie
for($i=-$r ; $i<=$r ; $i++){
	for($j=-$r ; $j<=$r ; $j++){
		if(($j>=$first[-abs($i)] && $j<=$last[-abs($i)])||($j<=-$first[-abs($i)] && $j>=-$last[-abs($i)])){
			echo "+";
		}else{
			echo " ";
		}
	}
	echo "\n";
}
?>