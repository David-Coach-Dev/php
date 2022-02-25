<?php  
/*
Ejercicio# 6.

realizar los siguientes pasos en su respectivo orden.
- Crear una variable llamada “ladoCuadrado” de valor 8.
- Calcular el área y el perímetro del cuadrado a partir de la variable
anteriormente creada.
- Crear una variable llamada “baseTriangulo” de valor 9.
- Crear una variable llamada “alturaTriangulo” de valor 8.
- Crear dos variables llamadas “ladoUnoTriangulo” y
“ladoDosTriangulo” de valor 8 ambas.
- Calcular el área y el perímetro del triángulo a partir de variables
anteriormente creadas.
- Crear una variable llamada “baseRectangulo” de valor 8.
- Crear una variable llamada “alturaRectangulo” de valor 6.
- Calcular el área y el perímetro del rectángulo a partir de variables
anteriormente creadas.
- Mostrar el resultado de las operaciones.
*/
//cuadrado
	$ladoCuadrado=8;
	echo "Resulicion del ejercicio 6.<br><br>El cuadrado con 
		  un lado de ".$ladoCuadrado.
		  "tiene: <br><br>El area es : ".($ladoCuadrado**2).
		  "<br>El perimetro es :".($ladoCuadrado*4);
//triangulo
	$baseTriangulo=9;
	$alturaTrinagulo=8;
	$ladoUnoTriangulo=8;
	$ladodosTriangulo=8;
	echo "<br><br>El triangulo con base de ".$baseTriangulo.
		 " y una altura de ".$alturaTrinagulo.
		 " y el lado uno de ".$ladoUnoTriangulo.
		 " y el lado dos de ".$ladodosTriangulo.
		 "tiene: <br><br>El area es :".(($baseTriangulo*$alturaTrinagulo)/2).
		 "<br>El perimetro es :".($baseTriangulo+$ladoUnoTriangulo+$ladodosTriangulo);
//rectangulo
	 $baseRectangulo=8;
	 $alturaRectangulo=6;
	 echo "<br><br>El rectangulo con la base de ".$baseRectangulo.
	 	  " y la alrura de ".$alturaRectangulo.
	 	  "tiene: <br><br>El area es :".($baseRectangulo*$alturaRectangulo).
		  "<br>El perimetro es :".(2*($baseRectangulo*$alturaRectangulo));
?>