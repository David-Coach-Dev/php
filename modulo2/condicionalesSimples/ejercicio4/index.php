<?php  
/*
Ejercicio # 4.

Realizar el punto ejercicio 3 con el operador ternario.
*/
	echo "Resolución del ejercicio 4.<br>";
	$num1=rand(1,10);
	$num2=rand(1,10);
	echo "El numero uno es ".$num1.".";
	echo "<br>El numero dos es ".$num2.".";
	
	if ($num1 != $num2){
		echo($num1>$num2) ? ("<br>El numero ".$num1." elevado a ".$num2." es ".pow($num1, $num2).".") : ("<br>El numero ".$num2." elevado a ".$num1." es ".pow($num2, $num1).".");
	}	
	else
		echo "<br>El numero uno que es  ".$num2." es igual al numero dos que es ".$num1.".";
?>