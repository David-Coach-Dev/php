<?php 
/*
Ejercicio # 7.

 Desarrollar un programa que dados dos grupos (Grupo A – Grupo B). cada uno con 10 estudiantes y una nota final de la materia por estudiante, determinar:
	 El promedio general de cada grupo.
	 El promedio general de ambos grupos.
	 El grupo con mejor promedio. 
*/ 
	echo "Resolución del ejercicio 7.<br>";
	$arrA=array();
	$arrB=array();
	$proA=0;
	$proB=0;
	$proG=0;
	$Spro=0;
	for ($i=0; $i <=10 ; $i++) 
	{
		$arrA[$i]=rand(6,10);
		$arrB[$i]=rand(6,10);
		if ($arrA[$i]<10){
			echo("El grupo A el estudiante ".($i+1)." la nota es 0".$arrA[$i]."&emsp;"."&emsp;"."&emsp;");
		}else{
			echo("El grupo A el estudiante ".($i+1)." la nota 
				es ".$arrA[$i]."&emsp;"."&emsp;"."&emsp;");	
		}
		$proA+=$arrA[$i];
		if ($arrB[$i]<10){
			echo("El grupo B el estudiante ".($i+1)." la nota es 0".$arrB[$i]."<br>");
		}else{
			echo("El grupo B el estudiante ".($i+1)." la nota es 0".$arrB[$i]."<br>");
		}
		$proB+=$arrB[$i];
	};
	$proA=$proA/count($arrA);
	$proB=$proB/count($arrB);
	echo("El promedio del grupo A es ".$proA."&emsp; El promedio del grupo B es ".$proB);
	$proG=($proA+$proB)/2;
	echo"<br><br>El promedio del grupo general es ".$proG;
	echo"<br><br>El promedio mas alto es el de grupo ";
	if($proA>$proB){
		echo"A con ".$proA;
	}else{
		echo "B con ".$proB;
	};
?>