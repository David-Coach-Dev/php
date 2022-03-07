<?php 
/*
Ejercicio # 4.

Calcular la hipotenusa de un triángulo rectángulo de lados. A = 5 cm y B = 6 cm.

*/
	echo "Resolución del ejercicio 4.<br>";
	$lA=5;
	$lB=6;
	echo "<br>Un triangulo <br>Lado a es ".$lA."<br>lado BN es ".$lB."<br>La hipotenuza es ".
		sprintf("%.2f",sqrt((pow($lA, 2)+pow($lB, 2))));
?>