<?php
/*
$alumno=array(
	'name'=>'Pablo',
	'lastname' => 'Iglesias',
	'email'=> 'a@a.com',
	'bDate'=>12/12/1990,
	false,
	123,
	"8"=>"y este",
	0=>"mas datos",
	5.6=> "ja ja",
	5=> "otro lado",
	"el ultimo dato",
	array("rojo","verde","naranja")		
);

echo "<pre>";
print_r($alumno);
echo "</pre>";


include_once 'functions.php';

muestraArray($alumno);

echo "<hr/>";
ksort($alumno);
echo "<pre>";
print_r($alumno);
echo "</pre>";

echo "<hr/>";

muestraArray($alumno[10]);


*/

$filas=4;
$columnas=5;

//$array=array [5][5];

//$numminas=($filas*$columnas div 3);
//echo $numminas;



//date_default_timezone_set('UTC');

echo "Hoy es el mes ".date('n')." del ".date('Y').". Es el día ".date('z')." del año, la semana ".date('W').", ".date('F');

?>