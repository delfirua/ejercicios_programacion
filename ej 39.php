<?php

$cantidad_1=12345.67;
$cantidad_2=4567,89;

$cantidad_1=number_format($cantidad_1,2);
echo $cantidad_1;

$cantidad_2=number_format($cantidad_2,2,".",",");
echo $cantidad_2;