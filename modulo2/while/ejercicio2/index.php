<?php 
/*
Ejercicio # 2.

Desarrollar  un  programa  que  determine  si  una  palabra  establecida previamente es o no palíndroma.
*/ 
	echo "Resolución del ejercicio 2.<br>";
	$palArr=array("ana", "david", "otto", "oso", "carro");
	$ind=rand(0,4);
	$i=0;
	$aux="";
	$pal=$palArr[$ind];
	while ($i < strlen($pal)) {
		$aux=$aux.$pal[(strlen($pal)-1)-$i];
		$i++;
	};
	echo("<br>La palabra " .$pal." es ");
	echo(strcmp($pal,$aux)=== 0) ? " palindroma" : " no es palindroma";
?>