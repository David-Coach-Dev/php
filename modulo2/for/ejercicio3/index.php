<?php 
/*
Ejercicio # 3.

Desarrollar  un  programa  que  permita  definir  si  un  número  entero  ya establecido es un número perfecto o no.
*/ 
	echo "Resolución del ejercicio 3.<br>";
	$num=rand(0,1000);
	$per=1;
	for ($i=1; $i <$num ; $i++) { 
		if($num%$i==0)
			$per+=$i;
	};
	if($num==$per){
		echo("<br>El numero ".$num." es perfecto");
	}else{
		echo("<br>El numero ".$num." no es perfecto");
	};
?>	