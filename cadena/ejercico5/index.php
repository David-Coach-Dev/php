<?php  
/*
Ejercicio 5.
Almacena todo tu nombre en un variable, por ejemplo: “DIEGO
ALEJANDRO PALACIO VALENCIA” y este mismo conviértelo a minúsculas
por medio de una función de cadenas.
*/
$nombre="DAVID HERNANDO CAYCEDO BLUM";
echo "Resolución del ejercicio 5.<br><br>El nombre que se va a covertir es : ".$nombre."<br><br>A minuscula es: ";
$nomMayus=strtolower($nombre);
echo $nomMayus;
?>