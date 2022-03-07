<?php 
/*
Ejercicio # 2.

Una función que reciba cinco números enteros como como  argumentos y devuelva el resultado de sumar los cinco números. 
Asigna el resultado de una invocación a la función con los números 2, 5, 1, 8, 10 a una variable de nombre $temporal y muestra el resultado.
*/
	echo "Resolución del ejercicio 2.<br>";
	$tem="";
	//suma de enteros
	function sumaEnt(int $ae1, int $ae2, int $ae3, int $ae4, int $ae5)
	{
		return "<br>la suma de ".$ae1." + ".$ae2." + ".$ae3." + ".$ae4." + ".$ae5." = ".($ae1+$ae2+$ae3+$ae4+$ae5);
	}
	//llamado a la funcion
	$tem=sumaEnt(2, 5, 1, 8, 10);
	echo $tem;
?>