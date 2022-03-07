<?php 
/*
Ejercicio # 1.

Almacene  el  un  array  los  10  primeros  números  pares.  Imprímelos  cada uno en una línea.
*/ 
	echo "Resolución del ejercicio 1.<br>";
	$nPares=array();
	$i=1;
	echo("Los primero 10 numeros primos son");
	while ($i <=10) {
		$nPares[$i-1]=$i*2;
		echo($i." ) ".$nPares[$i-1]."<br>");
		$i++;
	};
	foreach ($nPares as $num)
	{
		echo $num."<br>";
	};
?>