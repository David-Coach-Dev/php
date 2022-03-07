<?php 
/*
Ejercicio # 3.

Desarrollar  un  programa  que  continúe  con  la  serie  sumatoria  de  11  – 22  –  33  –  44.  Debe  mostrar  únicamente  los  primeros  25  valores  de  la serie.   
*/ 
	echo "Resolución del ejercicio 3.<br>";
	$i=1;
	echo("Seria <br>");
	while ($i< 26) {
		echo($i." ) ".(11*$i)."<br>");
		$i++;
	};
?>