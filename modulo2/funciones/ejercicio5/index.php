<?php 
/*
Ejercicio # 5.

Realizar un algoritmo que incremente un número pasado como valor.
*/ 
	echo "Resolución del ejercicio 5.<br>";
	//incrementa
	function incre($numero, $incremento)
	{
		echo "<br>El numero  ".$numero." es incrementado com ".$incremento." es ".$numero+$incremento.".";

	}
	//llamado a la funcion
	incre(rand(1,10), rand(1, 10));
?>