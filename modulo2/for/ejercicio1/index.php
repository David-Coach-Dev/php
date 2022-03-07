<?php 
/*
Ejercicio # 1.

Desarrolla un programa que permita mostrar el factorial de un número definido previamente.
*/ 
	echo "Resolución del ejercicio 1.<br>";
	$num=rand(0,100);
	$fac=1;
	echo("<br>El factorial de  ".$num."! es");
	for ($i=1; $i <=$num ; $i++) { 
		$fac*=$i;
	}
	echo($fac.".");
?>	