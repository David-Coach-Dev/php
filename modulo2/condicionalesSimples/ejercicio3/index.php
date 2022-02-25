<?php  
/*
Ejercicio # 3.

Dados dos números enteros, determinar cuál es el mayor por medio de
una condicional y realizar una potencia con el número menor como
exponente.
*/
	$num1=rand(1,10);
	$num2=rand(1,10);
	echo "Resolución del ejercicio 3.<br>";
	echo "El numero uno es ".$num1;
	echo "<br>El numero dos es ".$num2;
	if ($num1 != $num2)

		if ($num1>$num2)
			echo "<br>El numero ".$num1." elevado a ".$num2." es ".pow($num1, $num2);
		else
			echo "<br>El numero ".$num2." elevado a ".$num1." es ".pow($num2, $num1);
	else
		echo "<br>El numero ".$num2." es igual al ".$num1;
?>