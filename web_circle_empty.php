<!--
Autor: Krzysztof Druciarek
Data: 04/06/2019
-->

<!DOCTYPE html>
<html>
<head>
	<title>Circle</title>
	<style type="text/css">
		body{
			font-family: monospace;
			font-size: 1em;
			letter-spacing: 0.60em;
		}
	</style>
</head>
<body>

<?php

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
			echo "&nbsp;";
		}
	}
	echo "<br>";
}
?>

</body>
</html>
