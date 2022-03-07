<?php 
/*
Ejercicio # 1.

Una función que reciba cinco números enteros como parámetros y muestre por pantalla el resultado de sumar los cinco números (tipo procedimiento, no hay valor devuelto).
*/
	echo "Resolución del ejercicio 1.<br>";
	//suma de entero
	function sumaEnt(int $ae1, int $ae2, int $ae3, int $ae4, int $ae5)
	{
		echo"<br>la suma de ".$ae1." + ".$ae2." + ".$ae3." + ".$ae4." + ".$ae5." = ".($ae1+$ae2+$ae3+$ae4+$ae5);
	}
	//llamado a la funcion
	sumaEnt(rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10));
?>