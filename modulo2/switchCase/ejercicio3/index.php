<?php 
/*
Ejercicio # 3.

Se  desea  saber  la  nacionalidad  de  una  persona  (Colombiano,  Italiano, Argentino  y  Alemán),  mostrar  la  nacionalidad  de  la  persona,  en  caso contrario  de  que  no  se  encuentre,  se  debe  mostrar  el  siguiente mensaje: “Nacionalidad no especificada en la lista”. 
*/ 


	echo "Resolución del ejercicio 3.<br>";
	$na = array("Ecuatoriano", "Colombiano",  "Italiano", "Argentino", "Alemán");
	$num=rand(0,6);
	switch ($num) {
	    case 0:
	        echo "<br>La nacionalidad es ".$na[$num].".";
	        break;
	    case 1:
	        echo "<br>La nacionalidad es ".$na[$num].".";
	        break;
	    case 2:
	        echo "<br>La nacionalidad es ".$na[$num].".";
	        break;
	    case 3:
	        echo "<br>La nacionalidad es ".$na[$num].".";
	        break;
	    case 4:
	        echo "<br>La nacionalidad es ".$na[$num].".";
	        break;
	    default:
	       echo "<br>Nacionalidad no especificada en la lista.";
	};
?>	