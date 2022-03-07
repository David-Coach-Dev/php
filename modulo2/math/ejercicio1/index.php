<?php 
/*
Ejercicio # 1.

Desarrollar un algoritmo que por medio de uno ciclo for de 10 iteraciones, almacenar en un array 10 números generados aleatoriamente entre 0 y 50 y determinar el número mayor en el array.
*/
	echo "Resolución del ejercicio 1.<br>";
	$are=array();
	$aux=0;
	for ($i=0; $i <=10 ; $i++) 
	{
		$are[$i]=rand(1,50);
		echo"El arreglo[".($i)."] = ".$are[$i]."<br>";
		$aux=max($aux, $are[$i]);
	};
	echo "El mayor valor en el arrelo es ". $aux;
?>