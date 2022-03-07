<?php 
/*
Ejercicio # 7.

 Desarrollar una función que calcule el IVA aplicable a un producto, la función debe recibir el total del producto y el IVA para aplicar, sino no se pasa un IVA, por defecto deberá tener 10 %. 
*/ 
	echo "Resolución del ejercicio 7.<br>";
	//iva
	function calIva(int $tProd=0,int$vIva=10)
	{
		return "<br>total de producto es ".$tProd."<br>IVA de ".$vIva." % es ".($tProd*($vIva/100))." <br> total a pagar es ".($tProd*(1+($vIva/100)));
	};
	//llamado a la funcion
	echo "<br>Ingresando el valor del IVA<br>".calIva(rand(1,1000),rand(1,20));
	echo "<br><br>El valor del IVA por defecto<br>".calIva(rand(1,1000));
?>