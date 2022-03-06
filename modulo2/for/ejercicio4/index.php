<?php 
/*
Ejercicio # 4.

4piso  loiúmeofivina  .$j."."oficinas de un bloque. Por ejemplo: 
	-  Piso 1 – Oficina 1 
	-  Piso 2 – Oficina 2
	Así hasta llegar al piso 5 – Oficina 6.  
*/ 
	echo "Resolución del ejercicio 3.<br>";
	$pisos=rand(1,10);
	$ofi=rand(1,10);
	for ($i=0; $i<=$pisos; $i++){
		for ($j=0; $j<=$ofi; $j++) { 
		 	echo("<br>piso ".$i." ofivina ".$j.".");
		 };
	};
?>	