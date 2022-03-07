<?php 
/*
Ejercicio # 6.

Crear  una  función  que  retorne  el  nombre  del  mes  a  partir  de  un  número.
*/ 
	echo "Resolución del ejercicio 6.<br>";
	//nombre del mes
	function nomMes(int $nMes)
	{
		$mes=array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
       'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
		return "<br>El nombre del mes que coresponde al numero ".$nMes.(($nMes<1 || $nMes>12) ?" este numero no corresponde a ningun mes":(" es ".$mes[$nMes-1]));
	};
	//llamado a la funcion
	echo nomMes(rand(0,15));
	
?>