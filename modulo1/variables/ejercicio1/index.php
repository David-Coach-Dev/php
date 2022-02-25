<?php  
/*
Ejercicio # 1.

crea las siguientes variables según tu
criterio:
- Una variable que me permita almacenar el nombre de una persona.
- Una variable “x” para almacenar un número con 2 decimales.
- Una variable constante para almacenar el valor del dólar en pesos
colombianos.
- Una variable para almacenar los primeros 7 decimales de “pi”.
- Un variable para almacenar los primeros 15 decimales de “Euler”.
- Mostrar el contenido de todas las variables haciendo uso de
var_dump.
*/
	$nombre="david Hernando Caycedo Blum";
	$x=2.22;
	CONST DOLARPESOS=3931.17;
	$pi=3.1415926;
	$euler=2.718281828459045;
	echo "Resolución del ejercicio 1.<br>";
	echo "<br>La variable nombre es ";
	var_dump($nombre);
	echo "<br>La variable x es ";
	var_dump($x);
	echo "<br>La variable constante de cambio de peso a dolares es ";
	var_dump(DOLARPESOS);
	echo "<br>La variable pi es ";
	var_dump($pi);
	echo "<br>La variable euler es ";
	var_dump($euler);
?>