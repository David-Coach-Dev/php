<?php 
/*
Ejercicio # 8.

  Desarrollar un programa que, dada una palabra, divida todos sus caracteres y los almacene en las posiciones de un array del tamaño de la palabra, por ejemplo:
  	“Colombia”, tiene 8 palabras, por ende, el array debe ser de tamaño 8.
*/ 
	echo "Resolución del ejercicio 8.<br>";
	$arP=array("Ecuatoriano", "Colombiano",  "Italiano", "Argentino", "Aleman");
	$pal="";
	$ind=rand(0,4);
	$pal=$arP[$ind];
	$arrP=array();
	for ($i=0; $i<(strlen($pal)); $i++) 
	{
		$arrP[$i]=$pal[$i];
	};
	echo"<br>La palabra ".$pal." tiene ".strlen($pal)." caracteres y se tranformo en el arreglo con una longitud de ".count($arrP)." es <br>";
	for ($i=0; $i <count($arrP) ; $i++) 
	{
		echo "<br>arrego [".$i."] "." = ".$arrP[$i];
	};