<?php

$c=1;
while($c<=18){
    echo $c. "<br>";
    if($c==9){
        break;
    }
    $c++;
}

$pc ["SO", "SSD", "GPU", "RAM","CPU"];
foreach ($pc as $componente){
    echo $componente. "<br>";
    if ($componente=="GPU"){
        break;
    }
}