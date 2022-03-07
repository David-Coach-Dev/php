<?php 
/*
Ejercicio # 4.

Diseñar una función que muestre sí un número es par o impar. 
*/ 
	echo "Resolución del ejercicio 4.<br>";
	//numero par o impar
	function parImpar($numero)
	{
		echo "<br>El numero  ".$numero." es ",($numero%2==0)?"es par.":"es impar.";

	}
	//llamado a la funcion
	parImpar(rand(1,10));
	
	
?>