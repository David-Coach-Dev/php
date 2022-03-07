<?php 
/*
Ejercicio # 2.

Imprime el siguiente array usando la estructura cíclica foreach: 
$arrayName[4] = 80; 
$arrayName[9] = “Hola”; 
$arrayName[22] = 99; 
$arrayName[156] = “Mundo;  
*/ 
	echo "Resolución del ejercicio 2.<br>";
	Echo("<br>Recoriendo el arreglo con un forech<br>");
	$dato=array("4"=>80,"9"=>"hola","22"=>99,"156"=>"Mundo");
	foreach($dato as $key=>$vaule)
	{
		echo $key." - ".$vaule."<br>";
	};
?>