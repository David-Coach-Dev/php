<?php 
/*
Ejercicio # 4.

Desarrolla un programa completamente de tu autoría y con el grado de complejidad que creas necesario, utiliza todo lo aprendido hasta ahora.   
*/ 
	echo "Resolución del ejercicio 2.<br>";
	$palArr=array("ana", "david", "otto", "oso", "carro");
	$ind=rand(0,4);
	echo("<br>La palabra " .$palArr[$ind]." es ");
	echo(strcmp($palArr[$ind],(strrev($palArr[$ind])))=== 0) ? " palindroma" : " no es palindroma";
?>