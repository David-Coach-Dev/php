<?php 
/*
Ejercicio # 2.

Desarrollar un algoritmo que a partir de la cantidad de horas trabajadas de una persona y las horas de trabajo normal, determinar si tuvo horas extras, y si las tuvo, cuantas fueron.
*/
	$horaTrabajadas =rand(1,100);
	echo "Resolución del ejercicio 2.<br>";
	echo "Las horas trabajadas del trabajador son ",$horaTrabajadas." para tener horas extras debe pasar de la 40 horas trabajadas.";
	if ($horaTrabajadas>40)
		echo "<br>El trabajador tienes ".($horaTrabajadas-40)." horas extras";
	else
		echo "<br>El trabajador tienes ".($horaTrabajadas)." horas trabajadas";
?>