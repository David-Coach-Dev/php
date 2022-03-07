<?php 
/*
Ejercicio # 1.

Desarrolla un programa que permita invertir la palabra “Programación”.El resultado debe ser “nóicamargorP”.
*/ 
	echo "Resolución del ejercicio 1.<br>";
	$pal="Programacion";
	$i=0;
	echo("La palabra " .$pal." invertida es ");
	while ($i < strlen($pal)) {
		echo($pal[(strlen($pal)-1)-$i]);
		$i++;
	};
?>