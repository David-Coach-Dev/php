<?php  
/*
Ejercicio # 3. 

Desarrollar  un  programa  que,  por  medio  de  3  números  enteros, determinar cuál es el mayor.   
*/	
	echo "Resolución del ejercicio 3.<br>";
	$n1 =rand(0,99);
	$n2 =rand(0,99);
	$n3 =rand(0,99);

	echo ("El numero uno es ".$n1.".");
	echo ("<br>El numero dos es ".$n2.".");
	echo ("<br>El numero tres es ".$n3.".");
	echo ("<br>El numero mayor es ".max($n1, $n2, $n3).".");
 ?>