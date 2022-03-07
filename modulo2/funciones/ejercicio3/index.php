<?php 
/*
Ejercicio # 3.

Una función que reciba como parámetros el valor del radio de la base y la altura de un cilindro y devuelva el volumen del cilindro, teniendo en cuenta que el volumen de un cilindro se calcula como Volumen = númeroPi * radio * radio * Altura, siendo númeroPi =  3.1416 aproximadamente o usa la constante de PI.    
*/
	echo "Resolución del ejercicio 3.<br>";
	//generador de numero decimales rand
	function randomFloat($min = 0, $max = 1) {
   	 $num = $min + mt_rand() / mt_getrandmax() * ($max - $min);
   	 Return Sprintf ("%.2f",$num); // Control después del número decimal
	}
	//volumen de un cilindro
	function volCilindro(float $radio, float $altura)
	{
		return "<br>Un cilindro con un radio de ".$radio." y una la altura de ".$altura." el volumen es de ".Sprintf("%.2f",pi()*$radio*$radio*$altura)." .";
	}
	//llamado a la funcion
	echo volCilindro(randomFloat(1, 10), randomFloat(1, 10));
	
?>