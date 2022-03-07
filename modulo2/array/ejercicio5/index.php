<?php 
/*
Ejercicio # 5.

Desarrollar un programa que dado un array de números enteros entre 0 – 50, hallar el número mayor almacenado: 
	Puedes utilizar variables auxiliares.  
*/ 
	echo "Resolución del ejercicio 5.<br>";
	$arr1=array();
	$aux=0;
	for ($i=0; $i <=50 ; $i++) { 
		$arr1[$i] = rand(1,50);
		$aux=max($aux,$arr1[$i]);
		echo $i." ) ".$arr1[$i]."<br>";
	};
	echo"El numero mayor almacenado es ".$aux;
?>