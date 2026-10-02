<?php

date_default_timezone_set("America/El_Salvador");

$fecha_us=date("l d F Y");
$fecha_es=date("d-m-Y");

$hora_12=date("h:1 a");
$hora_24=date("H:1");

$fecha_completa=date("1 d F Y H:1 A");
echo $fecha_completa;
