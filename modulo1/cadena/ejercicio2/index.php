<?php
/*
Ejercicio # 2. 

A partir de la contraseña: “dapv0102”, cifrar la misma con sha1 y md5,
mostrar ambos resultados.
*/
	$pass="dapv0102";
	echo "Resolución del ejercicio 2.<br><br>La contrseña cifrada en: "."<br><br> Sha1 es : ".sha1($pass)."<br><br> Md5 es : ".md5($pass);
?>