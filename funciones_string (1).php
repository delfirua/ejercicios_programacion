<?php
//1
$cadena_texto="Hola Mundo";

$cadena_texto=ucwords($cadena_texto);

echo $cadena_texto; 

//2
$cadena_texto="hola mundo php";

$longitud=strlen($cadena_texto);
echo $cadena_texto." tiene ".$longitud." caracteres <br>";

$palabras=str_word_count($cadena_texto);
echo $cadena_texto." tiene ".$palabras." palabras <br>";

//3
$fecha_1="2010/05/19";
$fecha_2="2010-04-27";
$numeros="Uno Dos Tres Cuatro Cinco Sies Siete";

$array_numeros=explode(" ",$numeros,-2);
echo $array_numeros[4];