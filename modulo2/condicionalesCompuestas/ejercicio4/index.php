<?php  
/*
Ejercicio # 4. 

Un  postulante  a  un  empleo,  realiza  un  test  de  capacitación,  se  obtuvo  la siguiente  información:  cantidad  total  de  preguntas  que  se  le  realizaron  y la  cantidad  de  preguntas  que  contestó  correctamente.  Desarrolle  un programa  que  informe  el  nivel  según  el  porcentaje  de  respuestas correctas que ha obtenido, y sabiendo que: 
  Nivel máximo:   Porcentaje  >=  90%. 
  Nivel medio:    Porcentaje  >=  75% y <90%. 
  Nivel regular:  Porcentaje  >=  50% y <75%. 
  Fuera de nivel: Porcentaje  <  50%.
*/
	  echo "Resolución del ejercicio 4.<br>";
		$pro =rand(1,99);
		echo ("El postulante saco un promedio de  ".$pro.".");
		if ($pro>=90){
			echo "<br>El postulante saco el Nivel Máximo.";
		 }elseif($pro<90 && $pro >=75){
		 	echo "<br>El postulante saco el Nivel Medio.";
		 }elseif($pro<75 && $pro >=50){
		 	echo "<br>El postulante saco el Nivel Regular.";
		 }elseif($pro<50){
		 	echo "<br>El postulante esta fuera de Nivel.";
		 }else{
		 	echo "<br>El promedio esta fuera del rango.";
		 };
 ?>