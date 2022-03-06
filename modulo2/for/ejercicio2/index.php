<?php 
/*
Ejercicio # 2.

Desarrollar  un  programa  que  determine  los  divisores  de  un  número definido previamente.
*/ 
	echo "Resolución del ejercicio 2.<br>";
	$num=rand(0,1000);
	$fac=1;

	echo("<br>El numero ".$num);
	for ($i=1; $i <=$num ; $i++) { 
		if($num%$i==0)
			echo("<br>Es divisible para ".$i);
	}
?>	