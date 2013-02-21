<?php
/*
define('NAME',"Pablo");

$name = "Pablo";
$edad="1123";
$numero=56345;

$deporte=FALSE;
$fuma=false;

$codigo_postal=0XEE;

var_dump($name);
var_dump($edad);
var_dump($numero);

echo NAME;

var_dump($codigo_postal);
echo "<hr/>";
$valor=7*3+2*4-1-3*8<<3;
echo "<hr/>";

echo $valor;

echo "<pre>";
print_r($name);
echo "</pre>";

echo "<hr/>";
		
$direccion= array("Via","Julia");
var_dump($direccion);

echo "<pre>";
print_r($direccion);
echo "</pre>";

echo "<hr/>";
echo "<hr/>";
*/

/*
 // Tabla de multiplicar 
  
$filas=5;
$columnas=4;

echo "<table border=1>";
	
	for ($a=0;$a<=$filas;$a++)
	{
		echo "<tr>";
		for ($i=0;$i<=$columnas;$i++)
		{
			if($a==0)
				echo"<td>".$i."</td>";
			else 
				if ($i==0)
					echo"<td>".$a."</td>";
				else 
					echo"<td>".$i*$a."</td>";
		}
		echo "</tr>";
	}
	
	
echo "</table>";

*/

// Fibonacchi
/*
$max=22;

$n0=0;
$n1=1;
$n2=$n0+$n1;
while ($n2<$max)
{
	echo $n2.',';
	$n0=$n1;
	$n1=$n2;
	$n2=$n0+$n1;	
}

*/

define(AA,'1');

$valor[1]='texto';
$valor['1']='aaaa_';

echo $valor[AA];

echo $valor[1];
echo $valor['1'];

// Buscaminas





?>