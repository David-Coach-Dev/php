<?php
/* ejercicio # 1. 

Dada la siguiente cadena “Diego-Palacio.5;28;41;08” remplace los
caracteres “-.;” de forma que la cadena termine de la siguiente forma:
“Diego Palacio 5284108”.*/

$cadena="“Diego-Palacio.5;28;41;08”";
echo "Resolución del ejercicio 1.<br><br>La cadena que se va a remplazar los “ ; ” por “ - ” es : <br><br>".$cadena." la cadena ya remplazada es ".str_replace(";","-", $cadena).".";
?>