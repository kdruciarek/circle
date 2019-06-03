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

for($i=-$r ; $i<=$r ; $i++){
	for($j=-$r ; $j<=$r ; $j++){
		if($i*$i + $j*$j <= $r*$r) echo "+";
		else echo "&nbsp;";
	}
	echo "<br>";
}
?>

</body>
</html>
