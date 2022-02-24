<?php 
/*
Ejercicio 4. 
Almacena todo tu nombre en un variable, por ejemplo: “diego alejandro
palacio valencia” y este mismo conviértelo a mayúscula por medio de una
función de cadenas
*/
$nombre="david hernando caycedo blum";
echo "Resolución del ejercicio 4.<br><br>El nombre que se va a covertir es : ".$nombre."<br><br>A mayuscula es: ";
$nomMayus=strtoupper($nombre);
echo $nomMayus;
?>