<?php  
/*
Ejercicio # 1. 

Desarrollar un programa que permita por medio de la edad de una
persona, determinar la categoría en la que pertenece a raíz de la siguiente
tabla:
rango de edad		categoría
	0-5					Infante
	6-10				Niño
	11-15				Pre Adolencente
	16-18				Adolecente
	19-25				Pre Adulto
	26-40				Adulto
	41-55				Pre Amciano	
	56+					Anciamo
*/
	echo "Resolución del ejercicio 1.<br>";
	$edad =rand(0,100);
	echo ("La edad imgresada es ".$edad.".");
	if ($edad>=0 && $edad <=5){
		echo "<br>La edad esta en el rango de 0 a 5 años es un Infante.";
	 }elseif($edad>5 && $edad <=10){
	 	echo "<br>La edad esta en el rango de 6 a 10 años es un Niño.";
	 }elseif($edad>10 && $edad <=15){
	 	echo "<br>La edad esta en el rango de 11 a 15 años es un Pre Adolencente.";
	 }elseif($edad>16 && $edad <=18){
	 	echo "<br>La edad esta en el rango de 16 a 18 años es un Adolencente.";
	 }elseif($edad>18 && $edad <=25){
	 	echo "<br>La edad esta en el rango de 19 a 25 años es un Pre Adulto.";
	 }elseif($edad>25 && $edad <=40){
	 	echo "<br>La edad esta en el rango de 26 a 40 años es un Adolencente.";
	 }elseif($edad>40 && $edad <=55){
	 	echo "<br>La edad esta en el rango de 41 a 55 años es un Pre Anciano.";
	 }elseif($edad>55){
	 	echo "<br>La edad es mayor de 55 años es un Anciano.";
	 }else{
	 	echo "<br>La edad esta fuera del rango.";
	 };
 ?>
