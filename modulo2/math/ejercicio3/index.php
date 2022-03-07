<?php 
/*
Ejercicio # 3.

Realiza una operación trigonométrica del grado de dificultad de consideres 
	Resuelve cos(2x)-cos(6x)=sen(5x)+sen(3x). 
*/
	echo "Resolución del ejercicio 3.<br>";
	$x=rand(1, 10);
    echo "<br>El resultado valor de x es ".$x."<br>cos(2x)-cos(6x)=sen(5x)+sen(3x) =>  "
    	.sprintf("%.2f",(cos(2*$x)-cos(6*$x)))." = "
    	.sprintf("%.2f",(sin(5*$x)+sin(3*$x)));
?>