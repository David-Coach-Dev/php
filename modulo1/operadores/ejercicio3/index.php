<?php  
/*
Ejercicio # 3.

Realizar los siguientes pasos en su respectivo
orden:
- Crear una variable de nombre “numeroUno” con el valor de 8.
- Crear una variable de nombre “numeroDos” con el valor de 2.
- Intercambiar los valores de ambas variables, de modo que
“numeroUno” valga 2, y “numeroDos” valga 8. (Utiliza una variable
auxiliar).
- Mostrar los resultados de ambas variables.
*/
	$numerouno=8;
	$numerodos=2;
	$aux=0;
	echo "Resolución del ejercicio 3.<br><br>Numero uno es igual a ". $numerouno.
		 "<br>Numero dos es igual a ". $numerodos;
	$aux=$numerouno;
	$numerouno=$numerodos;
	$numerodos=$aux;
	echo "<br>Intercamcio de valores entre numero uno y numero dos<br>Numero uno es igual a ". $numerouno.
		 "<br>Numero dos es igual a ". $numerodos;
?>