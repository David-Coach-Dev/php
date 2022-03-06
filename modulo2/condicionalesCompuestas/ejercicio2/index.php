<?php  
/*
Ejercicio # 2. 

Desarrollar un programa que permita determinar la cantidad de cifras de un número X teniendo en cuenta que el número únicamente puede tener 4 cifras. Mostrar un mensaje por defecto si el número supera las 4 cifras. 
*/
	echo "Resolución del ejercicio 2.<br>";
	$numero =rand(0,99999);
	echo ("El numero es".$numero.".");
	if ($numero>=0 && $numero <=9){
		echo "<br>El numero es de una cifra.";
	 }elseif($numero>9 && $numero <=99){
	 	echo "<br>El numero es de dos cifras.";
	 }elseif($numero>99 && $numero <=999){
	 	echo "<br>El numero es de tres cifras.";
	 }elseif($numero>999 && $numero <=9999){
	 	echo "<br>El numero es de cuatro cifras.";
	 }elseif($numero>9999){
	 	echo "<br>El numero es mayor de cuatro cifras.";
	 }else{
	 	echo "<br>La edad esta fuera del rango.";
	 };
 ?>