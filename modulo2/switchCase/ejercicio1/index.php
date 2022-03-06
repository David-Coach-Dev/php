<?php 
/*
Ejercicio # 1.

Desarrolla  un  programa  donde  por  medio  del  tipo  de  un  motor, determinar qué tipo de fluido puede trasportar éste según las siguientes condiciones:  
	Si el tipo de motor es 0, mostrar un mensaje por consola indicando “No hay establecido un valor definido para el tipo”. 
	- Si el tipo de motor es 1, mostrar un mensaje por consola indicando “Agua”.
	- Si el tipo de motor es 2, mostrar un mensaje por consola indicando “Gasolina”.
	- Si el tipo de motor es 3, mostrar un mensaje por consola indicando “Hormigón”.
	- Si no se cumple ninguno de los valores anteriores mostrar el mensaje “No existe un valor válido”.
*/ 
	echo "Resolución del ejercicio 1.<br>";
	$motor=rand(0,5);
	echo("el morot es de tipo ".$motor.".");
	switch ($motor) {
	    case 0:
	        echo "<br>o hay establecido un valor definido para el tipo";
	        break;
	    case 1:
	        echo "<br>Agua";
	        break;
	    case 2:
	        echo "<br>Gasolina";
	        break;
	    case 3:
	        echo "<br>Hormigón";
	        break;
	    default:
	       echo "<br>No existe un valor válido";
	};
?>	