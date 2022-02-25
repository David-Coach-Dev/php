<?php 
/*
Ejercicio # 1.

Desarrollar un algoritmo que genere un número aleatorio de 1 a 100 y
por medio de una condicional determinar sí el número es menor a 50 o
mayor.
*/
	$numeAlt=rand(1,100);
	echo "Resolución del ejercicio 1.<br>";
	echo "<br>Numero alatorio ".$numeAlt."<br>";
	echo "<br>Con operador ternario ? verdadro : false";
	$msn=($numeAlt<50)? "Menor a 50" : "Mayor a 50";;

	echo("<br>".$msn);
	echo "<br><br>Con if";
	if($numeAlt<50)
		echo"<br>Menor a 50";
	else
		echo"<br>Mayor a 50";
?>