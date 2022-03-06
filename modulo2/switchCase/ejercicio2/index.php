<?php 

/*
Ejercicio # 2.

Desarrollar una calculadora, la cual, en base a un operador, realice una operación con dos números enteros ya definidos y mostrar el resultado, los  operadores  a  tener  en  cuenta  son  los  vistos  en  la  tabla  de operadores  aritméticos, sí deseas agregar más operadores, siéntete en libertad de hacerlo.
*/ 
	echo "Resolución del ejercicio 2.<br>";
	$num1=rand(1,10);
	$num2=rand(1,10);
	$ope=rand(1, 5);
	echo "<br>La operación a realizar es ";
	switch ($ope) {
	    case 1:
	        echo "<br>Suma ".$num1." + ".$num2." = ".$num1 + $num2;
	        break;
	    case 2:
	        echo "<br>Resta ".$num1." - ".$num2." = ".$num1 - $num2;
	        break;
	    case 3:
	        echo "<br>Multiplicación ".$num1." * ".$num2." = ".$num1 * $num2;
	        break;
	    case 4:
	        echo "<br>División ".$num1." / ".$num2." = ".$num1 / $num2;
	        break;
	    case 5:
	        echo "<br>Mode ".$num1." % ".$num2." = ".$num1 % $num2;
	        break;
	    default:
	       echo "<br>operación invalidad.";
	};
?>	