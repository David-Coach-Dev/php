<?php 
/*
Ejercicio # 4.

Desarrollar un programa que por medio de tres (3) arrays.  Defina la cantidad de datos por array.
	Almacenar números pares aleatorios entre  0  y  100 en  el primer array.
	Almacenar números impares aleatorios entre 0 y 50 en el segundo array.
	Almacenar la suma de los valores de ambos arrays en el tercer array.
*/ 
	echo "Resolución del ejercicio 4.<br>";
	$arr1=array();
	$arr2=array();
	$arr3=array();
	for ($i=0; $i <=10 ; $i++) { 
		$aux=rand(1,10);
		if(($aux%2)==0)
			$arr1[$i] = $aux;
		else
			$i--;
	};
	for ($i=0; $i <=10 ; $i++) { 
		$aux=rand(1,10);
		if(($aux%2)!=0)
			$arr2[$i] = $aux;
		else
			$i--;
	};
	for ($i=0; $i <=10 ; $i++) { 
		$arr3[$i]=$arr1[$i]+$arr2[$i];
		echo $i." ) ".$arr1[$i]." + ".$arr2[$i]." = ".$arr3[$i]."<br>";
	};
?>