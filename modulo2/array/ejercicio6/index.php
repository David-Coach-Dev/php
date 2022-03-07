<?php 
/*
Ejercicio # 6.

Desarrollar un programa que por medio de un array de tipo float permita almacenar el peso de 5 personas para posteriormente:
	Determinar el promedio del peso de las 5 personas.
	Determinar cuántas personas superar el promedio del peso.
	Determinar cuántas personas son inferiores al promedio del peso.
*/ 
	echo "Resolución del ejercicio 6.<br>";
	$arr1=array(67.80, 70.56, 85.62, 60.53, 78.30);
	$pro=0;
	$ipro=0;
	$Spro=0;
	for ($i=0; $i <count($arr1) ; $i++) {
			echo("<br>La persona ".($i+1)." pesa " .$arr1[$i]);
			$pro+=$arr1[$i];	
	};
	$pro=$pro/count($arr1);
	for ($i=0; $i <count($arr1) ; $i++) { 
		if ($arr1[$i]<$pro)
			$ipro++;
		else
			$Spro++;
	};
	echo "<br><br>El promedio de peso de ".count($arr1)." persomas es ".$pro. "<br>hay ".$ipro." personas que son inferiores al promedio <br>hay ". $Spro." personas que superan el promedio.";
?>