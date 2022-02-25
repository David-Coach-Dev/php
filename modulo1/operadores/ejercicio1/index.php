<?php  
/*
Ejercicio # 1.

En un nuevo archivo. Realizar los siguientes pasos en su respectivo
orden:
- Crear una variable para almacenar el nombre de un estudiante.
- Crear 5 variables para almacenar 5 diferentes notas decimales.
- Calcular el promedio final del estudiante a partir de las 5 notas
decimales. (Recuerda que un promedio se calcula sumando todos los
valores y dividiendo el resultado por el número de valores).
- Mostrar el resultado y el nombre del estudiante.
*/
    $estudiante="David Hernando Caycedo Blum.";
    $n1=8.20;
    $n2=6.50;
    $n3=9.10;
    $n4=9.80;
    $n5=7.30;
    $promedio=($n1+$n2+$n3+$n4+$n5)/5;
     echo "Resolución del ejercicio 1.<br><br>Libreta de calificaciones del estudiante ".$estudiante.
     	  "<br><br>Nota 1 : ".$n1.
     	  "<br>Nota 2 : ".$n2.
     	  "<br>Nota 3 : ".$n3.
     	  "<br>Nota 4 : ".$n4.
     	  "<br>Nota 5 : ".$n5.
     	  "<br><br>El promedio es : ".$promedio;
?>