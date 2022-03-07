<?php 
/*
Ejercicio # 3.

Crear un array asociativo para los siguientes datos: Nombre: Juan Orozco Dirección: Crra 48 A # 22 Teléfono: 3215489621 

*/ 
	echo "Resolución del ejercicio 3.<br>";
	Echo("<br>Recoriendo el arreglo con un forech<br>");
	$dato=array("Nombre:"=> "Juan Orozco", "Dirección:"=> "Crra 48 A # 22","Teléfono:"=>"3215489621");
	foreach($dato as $key=>$vaule)
	{
		echo $key." ".$vaule."<br>";
	};
?>